<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->json()->all();

        $usuario = Usuario::where('correo',$data['correo'])->first();

        if($usuario != null && Hash::check($data['contraseña'], $usuario->getAuthPassword())) {
            $usuario->api_token = str_random(60);
            $usuario->save();
            return $usuario;
        }
    }
}
