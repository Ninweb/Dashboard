<?php

namespace App\Http\Controllers;

use DB;
use Validator;
use App\Documentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DocumentoController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
    	

    	try{
    		$this->validate($request, [
	    	'ruta' => 'mimes:pdf', //only allow this type extension file.
			]);


    		 $ruta = time().'.'.$request->ruta->getClientOriginalExtension();
    		 $request->ruta->move(public_path('documentos'), $ruta);

    		 $upload = new Documentos([
               'id_empleado'=>$request->input('id_empleado'),
                'ruta'=>$ruta,
            ]);
    		$upload->save();
    		return response()->json([
                'status'=>'true',
                'Perfecto Gracias'
            ],200);
    	}catch (\Exception $e){
            Log::critical("Hubieron algunos problemas: {$e->getCode()},{$e->getLine()},{$e->getMessage()} ");
            return response('Algo salio mal',500);
        }

        
    }
}
