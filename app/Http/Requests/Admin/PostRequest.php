<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'       => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'image'       => ['nullable', 'mimes:jpg,jpeg,png,gif'],
            'user_id'     => ['required', 'exists:App\\User,id'],
        ];
    }
}
