<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class savePreguntaRequest extends FormRequest
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
            'enunciado' => 'required',
            'respuesta_correcta'=>'required',
            'propietario_pregunta'=>'required',
            'asignatura_id'=>'required',
        ];
    }
}
