<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Documentos extends Model
{
    //
     use Notifiable;

    protected $fillable = [
        'id_empleado','ruta'
    ];
}
