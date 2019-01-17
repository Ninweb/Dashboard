<?php

namespace App\Http\Controllers;

use App\Personas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PersonaController extends Controller
{
    //
    public function index(){

    	 $personas = Personas::all()->toArray();

        return response()->json($personas);
    }

    public function create(){


    }

    public function store(Request $request){
        try{

            $persona = new Personas([
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

         $persona = Personas::find($id);

         return response()->json($persona);

    }

    public function edit($id){

         $persona = Personas::find($id);

    }

    public function update($id, Request $request)
    {
        $persona = Personas::find($id);
        $persona->fill($request->all());
        $persona->save();

        return response()->json([$persona]);
    }

    public function destroy($id){

    	try{
            
    		$persona = Personas::find($id);
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
