<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PersonaRequest extends Request
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
            'primer_nom'    =>'min:3|required|string',
            'segundo_nom'   =>'min:3|required|string',
            'primer_ape'    =>'min:3|required|string',
            'segundo_ape'   =>'min:3|required|string',
            'doc_identidad' =>'min:5|required|unique:personas,doc_identidad',
            'fecha_nac'     =>'required',
            'genero'        =>'required',
            'direccion'     =>'min:6|required',
            'ciudad'        =>'required',
            'email'         =>'required|email|unique:personas,email',
            'telefono'      =>'required'
        ];
    }
}
