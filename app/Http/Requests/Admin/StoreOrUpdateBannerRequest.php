<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrUpdateBannerRequest extends FormRequest
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
            'img_url' => 'required|string|max:255',
            'head_text' => 'required_with:highlight_text,button_url|max:40',
            'highlight_text' => 'nullable|string|max:170',
            'button_url' => 'nullable|string|max:255',
            'position' => 'required|integer',
            'enabled' => 'required|integer',
        ];
    }

    public function prepareForValidation(): void
    {
        $this->merge([
            'position' => intval($this->input('position')),
            'enabled' => intval($this->input('enabled')),
        ]);
    }

    public function messages(): array
    {
        return [
            'head_text.required_with' => 'Tiêu đề không được rỗng khi có lời giới thiệu hoặc nút liên kết',
        ];
    }
}
