<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Familiares extends Model
{
    use Notifiable;

    protected $fillable = [
        'id_persona','id_empleado','parentezco','telefono'
    ];
}
