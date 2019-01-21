<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate(request(),[
           'correo' => 'email|required|string',
           'contraseña' => 'required|string'
        ]);

        $credenciales = ['correo'=>$request->input('correo'),
<<<<<<< HEAD
                        'contraseña'=>bcrypt($request->input('contraseña'))
        ];
        $hola = Auth::attempt($credenciales);
        return $credenciales;
=======
                        'password'=>$request->input('contraseña')];

        //return $credenciales;

>>>>>>> 1c302fa1bb22b11070670c5953f08fe671dfe6b5
        if (Auth::attempt($credenciales)){
            //return "Tu sesión fue iniciada correctamente";
            return redirect()->route('dashboardPrueba');
        }

        /*return back()
            ->withErrors(['correo' => trans('auth.failed')])
            ->withInput(request(['correo']));
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
