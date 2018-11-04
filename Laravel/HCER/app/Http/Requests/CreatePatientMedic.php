<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePatientMedic extends FormRequest
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

            'ci'=>['required','min:10','max:10','unique:patients,ci'],
            'namef'=>['required','min:3','max:50'],
            'lastname'=>['required','min:3','max:50'],
            'birthday'=>['required','before:today'],
            'id_gender'=>['exists:genders,id'],
            'id_bloodtype'=>['exists:bloodtypes,id'],
            'address'=>['nullable','min:5','max:150'],
            'phone'=>['required','numeric','min:100000000','max:99999999999999'],
            'email' => ['nullable','email','unique:patients,email'],
            'id_contact'=>['exists:contacts,id'],
            'namecontact'=>['required','min:5','max:30'],
            'contphone'=>['required','numeric','min:10']
             


            
        ];
    }

     public function messages()
        {
            return[
            'ci.required'=>'Ingrese un número la cédula del paciente.',
            'ci.min'=>'Número de cédula debe tener más de 10 caracteres.',
            'ci.max'=>'Número de cédula no debe tener más de 10 caracteres.',
            'ci.unique'=>'Ya está registrado la cédula por otro paciente',
            'namef.required'=>'Ingrese un nombre del paciente.',
            'namef.min'=>'El nombre del paciente debe tener más 3 caracteres.',
            'namef.max'=>'El nombre del paciente no debe tener más 50 caracteres.',
            'lastname.required'=>'Ingrese el apellido del paciente',
            'lastname.min'=>'El apellido del paciente debe tener más 3 caracteres.',
            'lastname.max'=>'El apellido del paciente no debe tener más 50 caracteres.',
            'birthday.required'=>'Ingrese una Fecha de Nacimeinto',
            'birthday.before'=>'Ingrese la fecha de nacimiento del paciente.',
            'id_gender.exists'=>'Seleccione una opción válida en el campo de género.',
            'id_bloodtype.exists'=>'Seleccione una opción en el campo tipo de sangre',
            'address.min'=>'Ingrese una dirección válida.',
            'address.max'=>'La dirrección no debe tener más 150 caracteres',
            'phone.required'=>'Ingrese un número telefónico',
            'phone.numeric'=>'Solo se permiten números en el campo de teléfono.',
            'phone.min'=>'El teléfono ingresado debe tener como mínimo 10 de caracteres.',
            'phone.max'=>'El teléfono ingresado no debe tener más de 10 caracteres.',
            'occupation.min'=>'Ingrese en el campo de occupation debe tener minimo  5 caracteres',
            'email.email'=>'Ingrese un correo valido.',
            'email.unique'=>'Ya está registrado este correo por otro paciente.',
            'id_contact.exists'=>'Seleccione una opción en el campo de tipo de contacto',
            'namecontact.required'=>'Ingrese los nombres del contacto del paciente',
            'namecontact.min'=>'Ingrese un nombre correcto del contacto del paciente',
            'namecontact.max'=>'El nombre del contacto del paciente no debe tener más 30 caracteres',
            'contphone.required'=>'Ingrese un número del pariente o encargado del paciente',
            'contphone.numeric'=>'Solo se permite números en el campo de pariente o encargado del Paciente',
            'contphone.min'=>'Ingreso incorrecto en el número telefónico en pariente o encargado del Paciente'

            ];
        }
}
