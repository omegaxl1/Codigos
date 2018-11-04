<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
                     
                     'ci'=>['required','min:10','max:10','unique:users,ci'],
                     'name'=>['required','min:3','max:20'],
                     'lastname'=>['required','min:3','max:20'],
                     'birthday'=>['required','before:today'],
                     'address'=>['required','min:5','max:30'],
                     'phone'=>['numeric','min:100000000','max:99999999999999'],
                     'email' => ['required','email','unique:users,email'],
                     'password' => ['required','min:6','max:191']

                   
                    
                ];
        }
        
        public function messages()
        {
            
            return [ 'ci.required'=>'Ingrese un número de cédula',
                     'ci.min'=>'número de la cédula debe tener más de 10 caracteres.',
                     'ci.max'=>'número de la cédula debe ser maximo de 10 caracteres.',
                     'ci.unique'=>'Ya está registrado la cédula por otro usuario.',
                     'name.required'=>'Ingrese un nombre del usuario',
                     'name.min'=>'El nombre del usuario debe tener más 3 caracteres',
                     'name.max'=>'El nombre del usuario no debe tener más 20 caracteres ',
                     'lastname.required'=>'Ingrese el apellido del usuario.',
                     'lastname.min'=>'El apellido del usuario debe tener más 3 caracteres',
                     'lastname.max'=>'El apellido del usuario no debe tener más 20 caracteres',
                     'birthday.required'=>'Ingrese la fecha de nacimiento del usuario.',
                     'birthday.before'=>'Ingrese una fecha válida.',
                     'address.required'=>'Ingrese una dirección',
                     'address.min'=>'Ingrese una dirección válida',
                     'address.max'=>'La dirección no debe tener mas de 30 caracteres',
                     'phone.numeric'=>'Solo se permiten números en el campo de teléfono.',
                     'phone.min'=>'El teléfono ingresado debe tener como mínimo 10 caracteres.',
                     'phone.max'=>'El teléfono ingresado debe tener como maximo de 15 caracteres.',
                     'email.required'=>'Ingrese un correo electrónico',
                     'email.email'=>'Ingrese un correo valido.',
                     'email.unique'=>'Correo Electrónico ya esta registrado por otro usuario.',
                     'password.required'=>'Ingrese una contraseña.',
                     'password.min'=>'La contraseña debe tener mínimo 6 caracteres.',
                     'password.max'=>'La contraseña no debe tener más 191 caracteres.'

              
                ];
        }
        


    
}
