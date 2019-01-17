<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\login;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function store(Request $request){

        try{
            $usuario = new Usuario([
                'correo'=>$request->input('correo'),
                'contraseña'=>bcrypt( $request->input('contraseña')),
            ]);

        }
            
            if(Auth::attempt($usuario))
            {
                return "correcto";
            }else{
                return "incorrecto";    
            }

    }
        


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
