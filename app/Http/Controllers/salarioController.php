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
    			'salario_base'=>$request->input('salario_base'),
    			'salario_ticket'=>$request->input('salario_ticket'),
    			'salario_seguro'=>$request->input('salario_seguro')

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


    }

    public function update(Request $request, $id){


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
