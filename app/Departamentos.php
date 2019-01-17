<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Departamentos extends Model
{
    //
    use Notifiable;

    protected $fillable = [
       'nombre_departamento'
    ];
}
