<?php

namespace App\Http\Controllers;

use DB;
use App\Referencias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ReferenciaController extends Controller
{
    //

    public function index()
    {
    	 $referencias = Personas::all()->toArray();

        return response()->json($referencias);
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        // $idPersona = DB::table('Personas')->latest('id')->first();
        // $idEmpleado = DB::table('Empleados')->latest('id')->first();
    	try
    	{

    		$referencias = new Referencias([

    			'id_persona'=>$request->input('id_persona'),
                'id_empleado'=>$request->input('id_empleado'),
                // 'id_persona'=>$idPersona,
                // 'id_empleado'=>$idEmpleado,
                'relacion'=>$request->input('relacion'),
                'tiempo_conocido'=>$request->input('tiempo_conocido'),
                'telefono'=>$request->input('telefono')
               
    		]);
    		$referencias->save();
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
    	$referencias = Referencias::find($id);

    	return $referencias;
    }

    public function edit($id)
    {

    	$empleado = Empleados::find($id);

    }


    public function update($id, Request $request)
    {
    	$referencia = Referencias::find($id);
    	$referencia->fill($request->all());
    	$referencia->save();

    	return $referencia;

    }

    public function destroy($id)
    {
    	try
    	{
    		$referencia = Referencias::find($id);
    		if (!($referencia)) {
    			# code...
    			return response()->json(['ids no encontrado']);
    		}
    		$referencia->delete();
    		
    		return response()->json(['referencia elimanada']);

    	}catch (\Exception $e){
            Log::critical("Hubieron algunos problemas: {$e->getCode()},{$e->getLine()},{$e->getMessage()} ");
            return response('Algo salio mal',500);
        }    
    }


    public function getReferenciasEmpleado($id_empleado){
        $referencias = Referencias::where('id_empleado',$id_empleado)->get();

        return $referencias;
    }
}
