<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public  function __contruct(){
        //
    }

    public function login(Request $request){
        $usuario = Usuarios::where('correo',$request->input('correo'));

    }
}
