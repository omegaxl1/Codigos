<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSpecialtyRequest extends FormRequest
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

            'n_specialties'=>['required','min:5','unique:specialties,n_specialties'],
            'detail'=>['nullable','min:10']
            
        ];


    }

    
    public function messages()
    {

        return ['n_specialties.required'=>'Ingrese la especialidad',
                'n_specialties.min'=>'La Especialidad debe tener minimo 3 caracteres',
                'n_specialties.unique'=>'Ya se ha registrado  esta especialidad',
                'detail.min'=>'El detalle de la Especialidad debe tener minimo 10 caracteres'
            ];
    }
}
