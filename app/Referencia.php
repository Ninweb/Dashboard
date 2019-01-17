<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Referencia extends Model
{
    use Notifiable;

    protected $fillable = [
        'id_persona','parentezco','tiempo_conocido','telefono'
    ];
}
