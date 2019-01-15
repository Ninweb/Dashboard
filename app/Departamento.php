<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Departamento extends Model
{
    //
        use Notifiable;

    protected $fillable = [
       'nombre_departamento'
    ];
}
