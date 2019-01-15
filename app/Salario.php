<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Salario extends Model
{
    //
    use Notifiable;

    protected $fillable = [
       'salario_base','salario_ticket','salario_seguro'
    ];
}
