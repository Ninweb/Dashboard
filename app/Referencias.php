<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Referencias extends Model
{
    use Notifiable;

    protected $fillable = [
        'id_persona','id_empleado','parentezco','tiempo_conocido','telefono'
    ];
}
