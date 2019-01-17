<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class personaController extends Controller
{
    //
    public function index(){

    	 $personas = Persona::all()->toArray();

        return response()->json($personas);
    }

    public function create(){


    }

    public function store(Request $request){
        try{

            $persona = new Persona([
                'nombre'=>$request->input('nombre'),
                'apellido'=>$request->input('apellido'),
                'sexo'=>$request->input('sexo'),
                'fecha_nacimiento'=>$request->input('fecha_nacimiento'),
                'cedula'=>$request->input('cedula'),
                'profesion'=>$request->input('profesion')
            ]);
            $persona->save();
            return response()->json([
                'status'=>'true',
                'Perfecto Gracias'
            ],200);
        }catch (\Exception $e){
            Log::critical("Hubieron algunos problemas: {$e->getCode()},{$e->getLine()},{$e->getMessage()} ");
            return response('Algo salio mal',500);
        }

    }

    public function show($id)
    {

         $persona = Persona::find($id);

         return response()->json($persona);

    }

    public function edit($id){

         $persona = Persona::find($id);

    }

    public function update($id, Request $request)
    {
        $persona = Persona::find($id);
        $persona->fill($request->all());
        $persona->save();

        return response()->json([$persona]);
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
