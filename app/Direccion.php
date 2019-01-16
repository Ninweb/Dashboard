<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use Notifiable;

    protected $fillable = [
        'id_persona','parroquia','municipio','alcaldia','ciudad','zona'
    ];
}
