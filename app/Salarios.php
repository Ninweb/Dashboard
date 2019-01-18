<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;

class Salarios extends Model
{
    //
    use Notifiable;

    protected $fillable = [
       'id_empleado','salario_base','salario_ticket','salario_seguro','fecha_inicio','fecha_fin'
    ];
}
