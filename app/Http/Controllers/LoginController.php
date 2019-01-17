<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
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
=======
use Auth;
use App\login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
        
        public function store(Request $request){

        	
        	if(Auth::attempt(['correo' => $request->correo,
                          'contraseña' => $request->contraseña
                        ]))
        	{
            	return "correcto";
        	}else{
            	return "incorrecto";    
        	}

        }
        
   
>>>>>>> f9621b165fffae85e09651b06a6cb9aa843160c0
}
