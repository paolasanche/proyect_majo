<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_cliente',
        'telefono_cliente',
        'correo_cliente',
        'edad_cliente',
        'direccion_cliente',
        'estado_cliente',
        'municipio_cliente',
        'codigopostal_cliente',
        'forma_pago'
    ];
}
