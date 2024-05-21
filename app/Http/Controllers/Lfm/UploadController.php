<?php

namespace App\Http\Controllers\Lfm;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use UniSharp\LaravelFilemanager\Controllers\LfmController;
use UniSharp\LaravelFilemanager\Events\FileIsUploading;
use UniSharp\LaravelFilemanager\Events\FileWasUploaded;
use UniSharp\LaravelFilemanager\Events\ImageIsUploading;
use UniSharp\LaravelFilemanager\Events\ImageWasUploaded;

class UploadController extends LfmController
{
    protected $errors;

    public function __construct()
    {
        parent::__construct();
        $this->errors = [];
    }

    /**
     * Upload files
     *
     * @param  void
     *
     * @return JsonResponse
     */
    public function upload()
    {
        $uploaded_files = request()->file('upload');
        $error_bag = [];
        $new_filename = null;

        foreach (is_array($uploaded_files) ? $uploaded_files : [$uploaded_files] as $file) {
            try {
                $this->lfm->validateUploadedFile($file);

                $new_filename = $this->uploadFile($file);
            } catch (\Exception $e) {
                Log::error($e->getMessage(), [
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                    'trace' => $e->getTraceAsString()
                ]);

                $error_bag[] = $e->getMessage();
            }
        }

        if (is_array($uploaded_files)) {
            $response = count($error_bag) > 0 ? $error_bag : parent::$success_response;
        } elseif (is_null($new_filename)) {
            // upload via ckeditor5 expects json responses
            $response = [
                'error' => ['message' => $error_bag[0]]
            ];
        } else {
            $url = $this->lfm->setName($new_filename)->url();

            $response = [
                'url' => $url,
                'uploaded' => $url
            ];
        }

        return response()->json($response);
    }

    public function uploadFile($file)
    {
        $new_file_name = Str::slug($this->getFileName($file->getClientOriginalName())) . '.' . $file->getClientOriginalExtension();
        // $extension = $file->getClientOriginalExtension();
        // $new_file_name_with_extension = $new_file_name . '.' . $extension;

        $new_file_path = $this->lfm->setName($new_file_name)->path('absolute');

        event(new FileIsUploading($new_file_path));
        event(new ImageIsUploading($new_file_path));
        try {
            $this->lfm->setName($new_file_name)->storage->save($file);

            $this->lfm->generateThumbnail($new_file_name);
        } catch (\Exception $e) {
            Log::info($e);
            return $this->lfm->error('invalid');
        }
        // TODO should be "FileWasUploaded"
        event(new FileWasUploaded($new_file_path));
        event(new ImageWasUploaded($new_file_path));

        return $new_file_name;
    }

    public function getFileName($path)
    {
        if (strpos($path, '/') === false) {
            $path_parts = pathinfo('a' . $path);
        } else {
            $path = str_replace('/', '/a', $path);
            $path_parts = pathinfo($path);
        }

        return substr($path_parts['filename'], 1);
    }
}
