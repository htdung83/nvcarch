<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreOrUpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'slug' => 'required|string|max:255',
            'content' => 'nullable',
            'enabled' => 'required|integer|in:0,1',
            'project_category_id' => 'required|integer',
        ];
    }

    public function prepareForValidation(): void
    {
        $content = $this->input('content');

        if ('' !== $content) {
            $content = str_replace(
                [
                    'https://x3.com.vn/wp-content/uploads',
                    env('APP_URL') . '//storage',
                    env('APP_URL') . '/storage',
                ],
                '/project-assets',
                $content
            );
        }

        $this->merge([
            'slug' => Str::slug($this->input('name')),
            'enabled' => intval($this->input('enabled', 0)),
            'project_category_id' => intval($this->input('category', 0)),
            'content' => $content,
        ]);
    }
}
