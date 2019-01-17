<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class login extends Model
{
    use Notifiable;

    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $fillable = [
          'correo', 'contraseña',
    ];

    protected $hidden = [
        'contraseña',
    ];

     protected $hidden = [
        'contrasena', 'remember_token',
    ];
   
}
