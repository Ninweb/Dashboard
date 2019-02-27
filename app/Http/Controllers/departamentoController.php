<?php

namespace App\Http\Controllers;
use App\Departamentos;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{

    //
    public function index(){

    	$departamentos = Departamentos::all()->toArray();
    	return response()->json($departamentos);
    }

    public function create(){


    }

    public function store(Request $request){


    	 try{
            $departamento = new Departamentos([
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
        $departamento = Departamentos::find($id);
    	return $departamento;
    }


    public function edit($id){

    $departamento = Departamentos::find($id);

    }

  

    public function update($id, Request $request){

        //       
        $departamento = Departamentos::find($id);
        $departamento->fill($request->all());
        $departamento->save();

        return $departamento;
    }

    public function destroy($id){

    	try {

    		$departamento = Departamentos::find($id);

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
