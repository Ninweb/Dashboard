<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Empleado extends Model
{
    use Notifiable;

    protected $fillable = [
        'id_persona','id_usuario','id_departamento','descripcion_cargo','fecha_ingreso','fecha_retirado',
        'estado_empleado','descripcion_transporte_ida','descripcion_transporte_vuelta','numero_habitacion','numero_celular',
        'tipo_sangre','profesion','estado_civil','educacion'
    ];
}
