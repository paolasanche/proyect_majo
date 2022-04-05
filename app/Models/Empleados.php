<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_empleado',
        'edad_empleado',
        'telefono_empleado',
        'correo_empleado',       
        'direccion_empleado',
        'puesto_empleado'
    ];
}
