<?php

namespace App\Http\Requests\Front\Users;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'nom' => 'bail|required',
            'prenoms' => 'bail|required',
            'email' => 'bail|required|unique:users,email',
            'password' => 'bail|required|min:8|confirmed',
            'tel1' => 'bail|required',
        ];
    }
}
