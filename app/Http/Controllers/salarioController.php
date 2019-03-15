<?php

namespace App\Http\Controllers;

use DB;
use App\Empleados;
use App\Salarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SalarioController extends Controller
{
    //
    public function index(){

        // $salarios = Salarios::all()->toArray();
        
        $salarios = DB::table('salarios')
    	->join('empleados','empleados.id','=','salarios.id')
    	// ->join('departamentos','departamentos.id','=','empleados.id')
    	// ->select('personas.nombre','empleados.descripcion_cargo','departamentos.nombre_departamento')
    	->get();

    	return response()->json($salarios);

    }

    public function create(){


    }

    public function store(Request $request){
        $idEmpleado = DB::table('Empleados')->latest('id')->first();

    	try{

    		$salario = new Salarios ([
                'id_empleado'=>$idEmpleado->id,
    			'salario_base'=>$request->input('salario_base'),
    			'salario_ticket'=>$request->input('salario_ticket'),
    			'salario_seguro'=>$request->input('salario_seguro'),
                'fecha_inicio'=>$request->input('fecha_inicio'),
                'fecha_fin'=>$request->input('fecha_fin')
    		]);
    		$salario->save();
    		return response()->json(['status'=>'true','gracias'],200);
    	}catch (\Exception $e){
            Log::critical("Hubieron algunos problemas: {$e->getCode()},{$e->getLine()},{$e->getMessage()} ");
            return response('Algo salio mal',500);
        }

    }

    public function show($id){

    	$salario = Salarios::find($id);

    	return $salario;
    }

    public function edit($id){

        $salario = Salarios::find($id);
    }

    public function update(Request $request, $id){

        $salario = Salarios::find($id);
        $salario->fill($request->all());
        $salario->save();

        return $salario;
    }

    public function destroy($id){
 
 		try{

 			$salario = Salarios::find($id);
 			if (!$salario) {
 				# code...
 				return response()->json(['id no existe']);
 			}
 			$salario->delete();
 			return response()->json(['departamento eliminado'],200);

 		}catch (\Exception $e){
            Log::critical("Hubieron algunos problemas: {$e->getCode()},{$e->getLine()},{$e->getMessage()} ");
            return response('Algo salio mal',500);
        }

    }
}
