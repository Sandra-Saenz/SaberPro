<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class saveRespuestaRequest extends FormRequest
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
          'respuesta_A'=>'required',
          'respuesta_B'=>'required',
          'respuesta_C'=>'required',
          'respuesta_D'=>'required',
        ];
    }
}
