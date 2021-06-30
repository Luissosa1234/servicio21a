<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUbicacionPost extends FormRequest
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
            'nombre'=> 'required|min:5|max:50',
            'letra'=> 'required|min:1|max:1',
            'edificio'=> 'required|min:5|max:50',
            'description'=> 'required|min:5|max:500',
            'latitud'=> 'required|min:5|max:50',
            'longitud'=> 'required|min:5|max:50',
           
        ];

    }
}
