<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDiagnostiRequest extends FormRequest
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
            'id_def_1'=>['required','exists:cis10s,descrip'],
            'id_def_2'=>['nullable','exists:cis10s,descrip'],
            'id_def_3'=>['nullable','exists:cis10s,descrip'],
            'id_pers_1'=>['nullable','exists:cis10s,descrip'],
            'id_pers_2'=>['nullable','exists:cis10s,descrip'],
            'id_pers_3'=>['nullable','exists:cis10s,descrip'],
            'treatment'=>['required','min:5'],
            'recipe'=>['required','min:5'],
            'instructions'=>['required','min:5']
        ];
    }

    public function messages()
    {
        return [
    'id_def_1.required'=>'Ingrese un diagnóstico definitivo en el campo de diagnóstico definitivo 1.',
    'id_def_1.exists'=>'Ingrese un valor de la tabla cis10 en campo definitivo 1.',
    'id_def_2.exists'=>'Ingrese un valor de la tabla cis10 en campo definitivo 2.',
    'id_def_3.exists'=>'Ingrese un valor de la tabla cis10 en campo definitivo 3.',
    'id_pers_1.exists'=>'Ingrese un valor de la tabla cis10 en campo presuntivo 1.',
    'id_pers_2.exists'=>'Ingrese un valor de la tabla cis10 en campo presuntivo 2.',
     'id_pers_3.exists'=>'Ingrese un valor de la tabla cis10 en campo presuntivo 3',
     'treatment.required'=>'En el campo de tratamiento no puede estar vacío ',
     'recipe.required'=>'Ingrese más de 5 caracteres en el campo de recetas.',
     'instructions.required'=>'Ingrese más de 5 caracteres en el campo de instrucciones.',
     'treatment.min'=>' Ingrese más de 5 caracteres en el campo de tratamiento.',
     'recipe.min'=>'El campo de Recetas  deben tener más de 5 caracteres',
     'instructions.min'=>'El campo de instrucciones  deben tener más de 5 caracteres'
        ];
    }
}
