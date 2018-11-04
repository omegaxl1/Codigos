<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDateUpdateRequest extends FormRequest
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
        'id_statusdate'=>['required','exists:statusdates,id']
        ];
    }
    public function messages()
    {
        return[
            'id_statusdate.required'=>'Seleccione una opcion en el campo de  cita',
            'id_statusdate.exists'=>'Ingrese un valor valido del campo de cita'
        ];
    }
}
