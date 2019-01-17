<?php

namespace App;



use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

<<<<<<< HEAD:app/Usuario.php
class Usuario extends Authenticatable
=======
class Usuarios extends Model
>>>>>>> 865a073359ab0d2d9fd66d1626ad15934828c01c:app/Usuarios.php
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
