<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDateRequest extends FormRequest
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
            'hour'=>['required','numeric','min:1','max:12'],
            'minutes'=>['required','in:00,15,30'],
            'timezone'=>['required','in:AM,PM'],
            'dateturns'=>['required','after:today']
        ];
    }

    public function messages()
    {
        return[
            'hour.required'=>'En el campo hora es obligato ingresar una hora',
            'hour.numeric'=>'Solo se permiten valores numericos en campo hora',
            'hour.min'=>'Ingrese una hora validad',
            'hour.max'=>'Ingrese una hora validad',
            'minutes.required'=>'Selecione una opcion en el campo minutos',
            'minutes.in'=>'Solos valores validos son 00, 15, 30 en el cmapo de minutos',
            'dateturns.required'=>'Ingrese una fecha ',
            'dateturns.after'=>'Ingrese una fecha valida'


        ];
    }
}
