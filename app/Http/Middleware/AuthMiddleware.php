<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Debug\Exception\FatalThrowableError;
use App\Usuarios;
use Illuminate\Support\Facades\Log;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public $usuarioRequest;
    public $usuarioDB;
    public $correo;
    public $token;

    public function handle($request, Closure $next)
    {
        if($request->status == 'success' ){
            $this->usuarioRequest = $request->usuario;
            try{
                $this->usuarioDB = Usuarios::where('correo',$this->usuarioRequest['correo'])->get();
                if( $this->usuarioDB[0]['api_token'] == $this->usuarioRequest['api_token'] && $this->usuarioDB[0]['api_token'] != ''){
                    return $next($request);
                }
            }catch (\Exception  $e){
                Log::critical("Hubieron algunos problemas: {$e->getCode()},{$e->getLine()},{$e->getMessage()} ");
                return response()->json([
                    'status' => 'error',
                    'msj' => 'No tienes permiso para operar en esta ruta'
                ],500);
            }
        }

        return response()->json([
            'status' => 'error',
            'msj' => 'No tienes permiso para operar en esta ruta'
        ],400);
    }
}
