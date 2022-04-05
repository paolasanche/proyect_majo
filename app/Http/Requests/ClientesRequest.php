<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesRequest extends FormRequest
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
            'nombre_cliente' => 'required',
            'telefono_cliente' => 'required',
            'correo_cliente' => 'required',
            'edad_cliente' => 'required',
            'direccion_cliente' => 'required',
            'estado_cliente' => 'required',
            'municipio_cliente' => 'required',
            'codigopostal_cliente' => 'required',
            'forma_pago' => 'required',
        ];
    }
}
