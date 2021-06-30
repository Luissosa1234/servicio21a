<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHistoricoPost extends FormRequest
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
            'ctrabajador'=> 'required|min:5|max:50',
            'fentrega'=> 'required|min:5|max:50',
            'dprestamo'=> 'required|min:5|max:50',
            'status'=> '',
        ];
    }
}
