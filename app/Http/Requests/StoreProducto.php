<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProducto extends FormRequest
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
            'nombre'        => 'required|min:5|max:100',
            'slug'          => '',
            'descripcion'   => 'required|min:20|max:250',
            'precio'        => 'required',
            'cantidad'      => 'required|numeric',
            'minimo'        => 'required|numeric',
            'estatus'       => 'required',
            'categoria_id'  => 'required|numeric',
            'tienda_id'     => 'required|numeric',
            'imagen'        => 'required',
            
        ];
    }
}
