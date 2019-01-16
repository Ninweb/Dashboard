<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use Notifiable;

    protected $fillable = [
        'nomnbre','apellido','salario_ticket','sexo','fecha_nacimiento','cedula','profesion'
    ];

}
