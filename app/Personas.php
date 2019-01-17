<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Personas extends Model
{
    use Notifiable;

    
    protected $fillable = [
        'nombre','apellido','sexo','fecha_nacimiento','cedula','profesion'
    ];

}
