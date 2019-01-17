<?php

namespace App\Http\Controllers\Auth;

use Auth;

use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credenciales = $this->validate(request(),[
           'correo' => 'email|required|string',
           'contraseña' => 'required|string'
        ]);

        if (Auth::attempt(($credenciales))){
            return "Tu sesión fue iniciada correctamente";
            //return redirect()->route('');
        }

        return back()->withErrors(['correo' => trans('auth.failed')]);

        /*
        $correo = $request->input('correo');
        $contraseña = $request->input('contraseña');

        $usuario = Usuario::where('correo',$correo)->first();


        if($usuario != null && Hash::check($contraseña, $usuario->getAuthPassword())) {
            $usuario->api_token = str_random(60);
            $usuario->save();
            return $usuario;
        }else{
            return 'gola';
        }*/
    }
}
