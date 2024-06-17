<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AboutUsController extends Controller
{
    public function create()
    {
        $needle = AboutUs::first();

        if (is_null($needle)) {
            $needle = AboutUs::create([
                'title' => 'Tiêu đề',
                'headline' => 'Headline',
                'content' => 'Mô tả ngắn',
                'button_url' => '#',
            ]);
        }

        return view('admin.about-us.input-form', ['needle' => $needle]);
    }

    public function update(Request $request, int $id)
    {
        try {
            $request->validate(
                [
                    'title' => 'required',
                    'headline' => 'required',
                    'slogan' => 'nullable',
                    'content' => 'required',
                    'button_url' => 'nullable',
                ]
            );

            $needle = AboutUs::find($id);
            $imgUrl = str_replace(
                [
                    config('app.url')
                ],
                '',
                $request->input('img_url')
            );

            if ($needle) {
                $needle->update([
                    'title' => $request->input('title'),
                    'slug' => Str::slug($request->input('title')),
                    'headline' => $request->input('headline'),
                    'slogan' => $request->input('slogan'),
                    'content' => $request->input('content'),
                    'button_url' => $request->input('button_url', '#'),
                    'img_url' => $imgUrl,
                ]);
            }

            return redirect()->back()->withSuccess(trans('messages.saved_success'));
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }
}
