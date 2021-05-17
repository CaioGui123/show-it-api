<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                  => ['required', 'string'],
            'email'                 => ['required', 'email', 'unique:App\\User,email'],
            'password'              => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'confirmed']
        ];
    }
}
