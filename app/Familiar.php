<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Familiar extends Model
{
    use Notifiable;

    protected $fillable = [
        'id_Persona','parentezco','telefono','sexo'
    ];
}
