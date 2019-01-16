<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;

class personaController extends Controller
{
    //
    public function index(){

    	return 'index';
    }

    public function create(){


    }

    public function store(Request $request){
        try{



            $usuario = new Usuario([
                'correo'=>$request->input('correo'),
                'contraseña'=>bcrypt( $request->input('contraseña')),
                'acceso_usuario'=>$request->input('acceso_usuario')
            ]);
            $usuario->save();
            return response()->json([
                'status'=>'true',
                'Perfecto Gracias'
            ],200);
        }catch (\Exception $e){
            Log::critical("Hubieron algunos problemas: {$e->getCode()},{$e->getLine()},{$e->getMessage()} ");
            return response('Algo salio mal',500);
        }

    }

    public function show($id){


    }

    public function edit($id){


    }

    public function update(Request $request, $id)


    }

    public function destroy($id){

    	try{

    		$persona = Persona::find($id);
    		if (!$persona) {
    			# code...
    			return response()->json(['id no encontrado']);
    		}

    		$persona->delete();
    		return response()->json(['elimanado']);

    	}catch (\Exception $e){
            Log::critical("Hubieron algunos problemas: {$e->getCode()},{$e->getLine()},{$e->getMessage()} ");
            return response('Algo salio mal',500);
        }
    }


}
