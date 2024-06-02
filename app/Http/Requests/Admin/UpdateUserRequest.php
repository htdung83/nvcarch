<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check() && auth()->user()->isSuperAdmin();
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
            'email' => 'required|email|unique:users,email,' . $this->user,
            'password' => 'nullable',
            'enabled' => 'required|integer',
            'roles' => 'required|array',
        ];
    }

    public function prepareForValidation(): void
    {
        $this->merge([
            'name' => Str::title($this->input('name')),
            'password' => $this->input('password') != "" ? bcrypt($this->input('password')) : '',
            'enabled' => intval($this->input('enabled'))
        ]);
    }
}
