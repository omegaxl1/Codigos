<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEvolutionRequest extends FormRequest
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
            'devolution'=>['required','min:5']
        ];
    }
     public function messages()
        {
            return['devolution.required'=>'El campo de evolución es Obligatorio',
            'devolution.min'=>'El campo de evolución deben tener más de 5 caracteres'
        ];
    }
}
