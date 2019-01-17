<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuarios extends Model
{
    use Notifiable;

    protected $fillable = [
        'correo', 'contraseña','acceso_usuario'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'contrasena', 'remember_token',
    ];

    public function setPasswordAttribute(){

        if (!empty($valor)) {
            # code...
            $this->attributes['contraseña'] = \Hash::make($valor);
        }
    }
}
