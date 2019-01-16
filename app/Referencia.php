<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
    use Notifiable;

    protected $fillable = [
        'id_persona','parentezco','tiempo_conocido','telefono'
    ];
}
