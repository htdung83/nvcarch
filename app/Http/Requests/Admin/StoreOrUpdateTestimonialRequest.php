<?php

namespace App\Http\Requests\Admin;

use App\Traits\UtilsTrait;
use Illuminate\Foundation\Http\FormRequest;

class StoreOrUpdateTestimonialRequest extends FormRequest
{
    use UtilsTrait;

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
            'img_url' => 'required',
            'construction' => 'nullable',
            'comment' => 'required',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'img_url' => $this->removeRootDomainIn($this->input('img_url'))
        ]);
    }
}
