<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVitalSignRequest extends FormRequest
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
            'heartrate'=>['nullable','numeric','min:0','max:999'],
            'head_circunference'=>['nullable','numeric','min:0','max:999'],
            'bloodpressure'=>['nullable','numeric','min:0','max:999'],
            'weight'=>['nullable','numeric','min:0','max:999'],
            'breathingfrequency'=>['nullable','numeric','min:0','max:999'],
            'temperature'=>['nullable','numeric','min:0','max:999'],
            'oxygensaturation'=>['nullable','numeric','min:0','max:999'],
            'size'=>['nullable','numeric','min:0','max:999'],
            'id_ims'=>['nullable','exists:ims,id'],
            'id_head'=>['nullable','exists:cpsps,id'],
            'id_eyes'=>['nullable','exists:cpsps,id'],
            'id_ears'=>['nullable','exists:cpsps,id'],
            'id_nose'=>['nullable','exists:cpsps,id'],
            'id_abdomen'=>['nullable','exists:cpsps,id'],
            'id_mouthpharynx'=>['nullable','exists:cpsps,id'],
            'id_neck'=>['nullable','exists:cpsps,id'],
            'id_nervousystem'=>['nullable','exists:cpsps,id'],
            'id_cardiopulmonary'=>['nullable','exists:cpsps,id'],
            'id_extremities'=>['nullable','exists:cpsps,id'],
            'details'=>['required','min:5']




        ];
    }

    public function  messages()
    {

        return [
            'heartrate.numeric'=>'Solo se permiten números en el campo de frecuencia cardíaca .',
            'heartrate.min'=>'Solo se permite números positivos en el campo de frecuencia cardíaca',
            'heartrate.max'=>'Solo se permiten máximo 5 dígitos en el campo  frecuencia cardíaca.',
            'head_circunference.numeric'=>'Solo se permiten números en el campo de perímetro cefálico.',
            'head_circunference.max'=>'Solo se permiten máximo 5 dígitos en el campo perímetro cefálico.',
            'head_circunference.min'=>'Solo se permite números positivos en el campo de perímetro cefálico',
            'bloodpressure.numeric'=>'Solo se permiten números en el campo de tensión arterial.',
            'bloodpressure.max'=>'Solo se permiten máximo 5 dígitos en el campo tensión arterial.',
            'bloodpressure.min'=>'Solo se permite números positivos en el campo de tensión arterial.',
            'weight.numeric'=>'Solo se permiten números en el campo de peso.',
            'weight.max'=>'Solo se permiten máximo 5 dígitos en el campo peso.',
            'weight.min'=>'Solo se permite números positivos en el campo peso',
            'breathingfrequency.numeric'=>'Solo se permiten números en el campo de frecuencia respiratoria.',
            'breathingfrequency.max'=>'Solo se permiten máximo 5 dígitos en el campo frecuencia respiratoria.',
            'breathingfrequency.min'=>'Solo se permite números positivos en el campo de frecuencia respiratoria.',
            'temperature.numeric'=>'Solo se permiten números en el campo de frecuencia respiratoria.',
            'temperature.max'=>'Solo se permiten máximo 5 dígitos en el campo temperatura.',
            'temperature.min'=>'Solo se permite números positivos en el campo de temperatura',
            'oxygensaturation.numeric'=>'Ingrese números en campo de saturación de oxigeno',
            'oxygensaturation.max'=>'Solo se permite maximo 5 cifras en el  campo de saturación de oxigeno',
            'oxygensaturation.min'=>'Solo se permite números positivos en el campo de saturación de oxigeno',
            'size.numeric'=>'Solo se permiten números en el campo de estatura.',
            'size.max'=>'Solo se permiten máximo 5 dígitos en el campo estatura.',
            'size.min'=>'Solo se permite números positivos en el campo de estatura.',
            'id_ims.exists'=>'Selecione una opccion validad en el campo IMC',
            'id_head.exists'=>'Seleccione una opción en la campo de cabeza.',
            'id_eyes.exists'=>'Seleccione una opción en la campo de ojos.',
            'id_nose.exists'=>'Seleccione una opción en la campo de oídos.',
            'id_abdomen.exists'=>'Seleccione una opción en la campo de abdomen.',
            'id_mouthpharynx.exists'=>'Seleccione una opción en la campo de boca y faringe.',
            'id_neck.exists'=>'Seleccione una opción en la campo de cuello.',
            'id_nervousystem.exists'=>'Seleccione una opción en la campo de sistema nervioso.',
            'id_cardiopulmonary.exists'=>'Seleccione una opción en la campo de cardiopulmonar.',
            'id_extremities.exists'=>'Seleccione una opción en la campo de extremidades.',
            'details.required'=>'El campo de observaciónes no puede estar vacío.',
            'details.min'=>'Ingrese más de 5 caracteres en el campo de observación.'


        ];
    }



}
