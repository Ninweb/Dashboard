<?php

namespace App\Http\Controllers;

use App\Salario;
use Illuminate\Http\Request;

class salarioController extends Controller
{
    //
    public function index(){

    	$salarios = Salario::all()->toArray();

    	return response()->json($salarios);

    }

    public function create(){


    }

    public function store(Request $request){

    	try{

    		$salario = new Salario ([
                'id_empleado'=>$request->input('id_empleado'),
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

    	$salario = Salario::find($id);
    	return response()->json($salario);
    }

    public function edit($id){

        $salario = Usuario::find($id);
    }

    public function update(Request $request, $id){

        $salario = Salario::find($id);
        $salario->fill($request->all());
        $salario->save();

        return response()->json([$salario]);
    }

    public function destroy($id){
 
 		try{

 			$salario = Departamento::find($id);
 			if (!$salario) {
 				# code...
 				return response()->json(['id no existe']);
 			}
 			$departamento->delete();
 			return response()->json(['departamento eliminado'],200);

 		}catch (\Exception $e){
            Log::critical("Hubieron algunos problemas: {$e->getCode()},{$e->getLine()},{$e->getMessage()} ");
            return response('Algo salio mal',500);
        }

    }
}