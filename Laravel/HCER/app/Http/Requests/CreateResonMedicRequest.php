<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateResonMedicRequest extends FormRequest
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
            'reason'=>['required','min:4']
        ];
    }

     public function messages()
        {
            return['reason.required'=>'El campo de motivo de consulta no puede estar vacío.',
            'reason.min'=>'el campo de motivo de consulta debe tener mínimo 4 caracteres.'
        ];
    }
}
