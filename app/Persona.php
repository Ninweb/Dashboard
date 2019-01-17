<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Persona extends Model
{
    use Notifiable;

    
    protected $fillable = [
        'nombre','apellido','sexo','fecha_nacimiento','cedula','profesion'
    ];

}
