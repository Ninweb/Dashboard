<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Salarios extends Model
{
    //
    use Notifiable;

    protected $fillable = [
       'id_empleado','salario_base','salario_ticket','salario_seguro','fecha_inicio','fecha_fin'
    ];
}
