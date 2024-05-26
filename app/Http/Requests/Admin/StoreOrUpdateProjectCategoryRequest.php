<?php

namespace App\Http\Requests\Admin;

use App\Traits\UtilsTrait;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreOrUpdateProjectCategoryRequest extends FormRequest
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
            'slug'  => 'required|string|max:255',
            'img_url' => 'nullable',
            'position' => 'required|int',
            'description' => 'nullable',
            'enabled' => 'required|int',
        ];
    }

    public function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug($this->input('name')),
            'position' => intval($this->input('position')),
            'enabled' => intval($this->has('enabled')),
            'img_url' => $this->removeRootDomainIn($this->input('img_url')),
        ]);
    }
}
