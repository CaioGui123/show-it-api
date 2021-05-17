<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'body'    => ['required', 'max:500'],
            'user_id' => ['required', 'exists:App\\User,id'],
            'post_id' => ['required', 'exists:App\\Post,id'],
        ];
    }
}
