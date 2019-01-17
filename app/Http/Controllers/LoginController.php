<?php

namespace App\Http\Controllers;

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
        
   
}
