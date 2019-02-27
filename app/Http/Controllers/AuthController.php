<?php

namespace App\Http\Controllers;

use App\Usuarios;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public  function __contruct(){
        //
    }

    public function login(Request $request){


        $usuario = Usuarios::where('correo',$request->input('correo'))->first();


        if (!$usuario){

            return  response()->json([
                'status'=>'error',
                'message'=>'Correo no valido'
            ]);

        }

        if ( Hash::check($request->input('password'), $usuario->password) ){
            $usuario->update(['api_token'=>str_random(50)]);
            return response()->json([
                'status'=>'success',
                'usuario'=>$usuario
            ],200);
        }


        return response()->json([
            'status'=>'error',
            'message'=>'Contraseña invalida'
        ]);

    }

    public  function logout(Request $request){
        $api_token = $request->api_token;

        $usuario = Usuarios::where('api_token',$api_token)->first();

        if (!$usuario){
            return  response()->json([
                'status'=>'error',
                'message'=>'No esta logeado'
            ],401);
        }

        $usuario->api_token = '';

        $usuario->save();

        return  response()->json([
            'status'=>'success',
            'message'=>'Has cerrado sesion'
        ],200);

    }
}
