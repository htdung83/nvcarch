<?php

namespace App\Http\Requests\Admin;

use App\Traits\UtilsTrait;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreOrUpdateStaffMemberRequest extends FormRequest
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
            'title' => 'required|string|max:100',
            'description' => 'nullable',
            'img_url' => 'required|string|max:255',
            'position' => 'integer',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'position' => intval($this->input('position', 1)),
            'img_url' => $this->removeRootDomainIn($this->input('img_url')),
            'title' => Str::title($this->input('title'))
        ]);
    }
}
