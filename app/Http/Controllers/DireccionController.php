<?php

namespace App\Http\Controllers;
use DB;
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
    	
    	try{
            $direccion = new Direcciones([
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

    	$direccion = Direcciones::find($id);

        return response()->json($direccion);

    }

    public function edit()
    {

    }


    public function update()
    {

    }


    public function destroy()
    {

    }



}
