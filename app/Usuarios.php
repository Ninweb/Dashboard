<?php

namespace App;



use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Usuarios extends Authenticatable

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
        'contraseña', 'remember_token',
    ];

    public function setPasswordAttribute(){

        if (!empty($valor)) {
            # code...
            $this->attributes['contraseña'] = \Hash::make($valor);
        }
    }
}
