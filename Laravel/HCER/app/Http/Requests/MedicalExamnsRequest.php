<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicalExamnsRequest extends FormRequest
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
            'title'=>['required','min:5','max:50'],
            'observations'=>['required','min:5']
        ];
    }

    public function messages()
    {
        return [
        'title.required'=>'El campo titulo es obligatorio',
        'title.min'=>'El campo titulo debe tener mas de 4 caracteres',
        'title.max'=>'El campo titulo debe ser maximo de 50 caracteres',
        'observations.required'=>'El campo observación es obligatorio',
        'observations.min'=>'El campo observación debe tener mas de 4 caracteres'
        ];
    }
}
