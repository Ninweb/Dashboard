<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Usuario;
use Hash;


class LoginController extends Controller
{
    public function login(Request $request)
    {

        $correo = $request->input('correo');
        $contraseña = $request->input('contraseña');

        $usuario = Usuario::where('correo',$correo)->first();


        if($usuario != null && Hash::check($contraseña, $usuario->getAuthPassword())) {
            $usuario->api_token = str_random(60);
            $usuario->save();
            return $usuario;
        }else{
            return 'gola';
        }
    }
 }