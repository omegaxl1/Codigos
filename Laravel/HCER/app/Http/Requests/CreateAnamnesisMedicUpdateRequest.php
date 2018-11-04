<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAnamnesisMedicUpdateRequest extends FormRequest
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

            'allergies'=>['nullable','min:5'],
            'p_pathologies'=>['nullable','min:5'],
            'f_pathologies'=>['nullable','min:5'],
            'surgical'=>['nullable','min:5'],
            'alcohol'=>['nullable','min:5','max:30'],
            'smoking'=>['nullable','min:5','max:30'],
            'drugs'=>['nullable','min:5','max:30'],
            'inmunizaciones'=>['nullable','min:5','max:30'],
            'others'=>['nullable','min:5']

        ];
    }

     public function messages()
        {
            
            return [

                'allergies.min'=>'En el campo de alergias debe tener mínimo 5  caracteres.',
                'p_pathologies.min'=>'En el campo de patologías personales debe tener mínimo 5 caracteres.',
                'f_pathologies.min'=>'En el campo de patologías familiares debe tener mínimo 5  caracteres.',
                'surgical.min'=>'En el campo de quirúrgicos debe tener mínimo 5  caracteres.',
                'alcohol.min'=>'En el campo de alcoholismo debe tener mínimo 5  caracteres.',
                'alcohol.max'=>'En el campo de alcoholismo no deben exceder de 30 caracteres',
                'smoking.min'=>'): En campo de tabaquismo debe tener mínimo 5  caracteres.',
                'smoking.max'=>'En el campo de tabaquismo no deben exceder de 30 caracteres',
                'drugs.min'=>'En el campo de drogas debe tener mínimo 5  caracteres.',
                'drugs.max'=>'En el campo de drogas no deben exceder de 30 caracteres',
                'inmunizaciones.min'=>'En el campo de inmunizaciones debe tener mínimo 5  caracteres',
                'inmunizaciones.max'=>'En el campo de inmunizaciones no deben exceder de 30 caracteres',
                'others.min'=>'En el campo de Drogas debe tener mínimo 5  caracteres.'




            ];
        }
}
