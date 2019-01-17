<?php

namespace App\Http\Controllers;
use App\Departamento;
use Illuminate\Http\Request;

class departamentoController extends Controller
{
    //
    public function index(){

    	$departamentos = Departamento::all()->toArray();
    	return response()->json($departamentos);
    }

    public function create(){


    }

    public function store(Request $request){


    	 try{
            $departamento = new Departamento([
                'nombre_departamento'=>$request->input('nombre_departamento')
            ]);
            $departamento->save();
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
        //
        $departamento = Departamento::find($id);
    	return response()->json($departamento);
    }


    public function edit($id){

    $departamento = Departamento::find($id);

    }

  

    public function update($id, Request $request){

        //       
        $departamento = Departamento::find($id);
        $departamento->fill($request->all());
        $departamento->save();

        return response()->json([$departamento]);
    }

    public function destroy($id){

    	try {

    		$departamento = Departamento::find($id);

    		if (!$departamento){

    			return response()->json(['el id no existe'],404);
    		}
    		$departamento->delete();
    		return response()->json(['departamento eliminado'],200);
    	}catch (\Exception $e){
            Log::critical("Hubieron algunos problemas: {$e->getCode()},{$e->getLine()},{$e->getMessage()} ");
            return response('Algo salio mal',500);
        }
    }
}
