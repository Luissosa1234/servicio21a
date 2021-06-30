<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEquipoPost extends FormRequest
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
            'equipo'=> 'required|min:5|max:50',
            'modelo'=> 'required|min:5|max:50',
            'marca'=> 'required|min:5|max:50',
            'nserie'=> 'required|min:5|max:50',
            'cudg'=> 'required|min:5|max:50',
            'description'=> 'required|min:10|max:500',
            'status'=> '',
            'ubicacion'=> 'required|min:5|max:50',
            'cunitario'=> 'required|numeric|between:0,99.99',
            
        ];
    }
}
