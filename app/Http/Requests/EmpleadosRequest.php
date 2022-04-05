<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadosRequest extends FormRequest
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
        'nombre_empleado' => 'required',
        'edad_empleado' => 'required',
        'telefono_empleado' => 'required',
        'correo_empleado' => 'required',        
        'direccion_empleado' => 'required',
        'puesto_empleado' => 'required',
        
    ];
    }
}
