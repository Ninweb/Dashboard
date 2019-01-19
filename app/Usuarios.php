<?php

namespace App;



use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Usuarios extends Authenticatable

{
    use Notifiable;

    protected $table = 'Usuarios';

    protected $fillable = [
        'correo', 'password','acceso_usuario'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute(){

        if (!empty($valor)) {
            # code...
            $this->attributes['password'] = \Hash::make($valor);
        }
    }
}
