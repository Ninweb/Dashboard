<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    use Notifiable;

    protected $fillable = [
        'id_Persona','parentezco','telefono','sexo'
    ];
}
