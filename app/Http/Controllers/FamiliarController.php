<?php

namespace App\Http\Controllers;

use DB;
use App\Empleados;
use App\Personas;
use App\Familiares;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FamiliarController extends Controller
{
    //
    //
    public function index()
    {
    	$familiar = DB::table('familiares')
    	->join('personas','personas.id','=','familiares.id')
    	->select('personas.nombre','familiares.parentezco')
    	->get();

        return response()->json($familiar);
    }

    public function create()
    {

    }


    public function store(Request $request)
    {
    	// $idPersona = DB::table('Personas')->latest('id')->first();
        // $idEmpleado = DB::table('Empleados')->latest('id')->first();

    	try{
            $familiar = new Familiares([

            	// 'id_persona'=>$idPersona,
                // 'id_empleado'=>$idEmpleado,
                'id_persona'=>$request->input('id_persona'),
                'id_empleado'=>$request->input('id_empleado'),                
                'parentezco'=>$request->input('parentezco'),
                'telefono'=>$request->input('telefono'),
            
                
            ]);
            $familiar->save();
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

    	$familiar = Familiares::find($id);

        return response()->json($familiar);

    }

    public function edit($id)
    {
    	  $familiar = Familiares::find($id);

    }


    public function update($id, Request $request)
    {
    	$familiar = Familiares::find($id);
    	$familiar->fill($request->all());
        $familiar->save();

        return response()->json([$familiar]);
    }


    public function destroy()
    {
    	try{

    		$familiar = Familiares::find($id);
    		if (!$familiar) {
    			# code...
    			return response()->json(['id no encontrado']);
    		}

    		$familiar->delete();
    		return response()->json(['familiar elimanado']);

    	}catch (\Exception $e){
            Log::critical("Hubieron algunos problemas: {$e->getCode()},{$e->getLine()},{$e->getMessage()} ");
            return response('Algo salio mal',500);
        }
    }


    public function getFamiliaresEmpleados($id_empleado){
        $familiares = Familiares::where('id_empleado',$id_empleado)->get();

        return $familiares;
    }
}
