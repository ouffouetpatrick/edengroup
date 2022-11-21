<?php

namespace App\Http\Requests\Front\Demande;

use Illuminate\Foundation\Http\FormRequest;

class DemandeCreateRequest extends FormRequest
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
            'select' => 'bail|required',
            'content' =>'bail|required'
        ];
    }
}
