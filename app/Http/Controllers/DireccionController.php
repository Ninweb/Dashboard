<?php

namespace App\Http\Controllers;
use DB;
use App\Personas;
use App\Direcciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DireccionController extends Controller
{
    //
    public function index()
    {
    	$direcciones = DB::table('direcciones')
    	->join('personas','personas.id','=','direcciones.id')
    	->select('personas.nombre','direcciones.parroquia')
    	->get();

        return response()->json($direcciones);
    }

    public function create()
    {

    }


    public function store(Request $request)
    {
    	// $idPersona = DB::table('Personas')->latest('id')->first();
    	try{
            $direccion = new Direcciones([
                // 'id_persona'=>$idPersona,
                'id_persona'=>$request->input('id_persona'),
                'parroquia'=>$request->input('parroquia'),
                'municipio'=>$request->input('municipio'),
                'alcaldia'=>$request->input('alcaldia'),
                'ciudad'=>$request->input('ciudad'),
                'zona'=>$request->input('zona')
            ]);
            $direccion->save();
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

    	$direccion = Direcciones::where('id_persona',$id)->get();

        return $direccion;

    }

    public function edit($id)
    {

        $direccion = Direcciones::find($id);

    }


    public function update($id, Request $request)
    {
        $direccion=Direcciones::find($id);
        $direccion->fill($request->all());
        $direccion->save();

        return response()->json([$direccion]);
    }


    public function destroy()
    {
        try{
            $direccion = Direcciones::find($id);

            if(!$direccion){
                return response()->json(['Este id no existe'],404);
            }

            $direccion->delete();
            return response()->json(['Direccion eliminado'],200);

        }catch (\Exception $e){
            Log::critical("Hubieron algunos problemas: {$e->getCode()},{$e->getLine()},{$e->getMessage()} ");
            return response('Algo salio mal',500);
        }
    }



}
