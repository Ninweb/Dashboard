<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Referencias extends Model
{
    use Notifiable;

    protected $fillable = [
        'id_persona','id_empleado','relacion','tiempo_conocido','telefono'
    ];
}
