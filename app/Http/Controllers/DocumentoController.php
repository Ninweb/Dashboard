<?php

namespace App\Http\Controllers;

use DB;
use Validator;
use App\Documentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DocumentosController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
    	
        // $idEmpleado = DB::table('Empleados')->latest('id')->first();

    	// try{
            $exploded = explode(',', $request->doc);
            $decoded = base64_decode($exploded[1]);

            // $this->validate($request, [
	    	// 'document' => 'mimes:pdf', //only allow this type extension file.
            // ]);
            
            if(str_contains($exploded[0], 'jpeg')) {
                $extension = 'jpg';
            } else {
                $extension = 'png';
            }

            $document = str_random().'.'.$extension;
            $path = public_path().'/'.$document;

            file_put_contents($path, $decoded);
            

            // $document = time().'.'.$request->document->getClientOriginalExtension();
            // $request->document->move(public_path('documentos'), $document);

            $upload = new Documentos([
                // 'id_empleado'=>$idEmpleado,
                'nombre1'=>$request->input('nombre1'),
                'nombre'=>$request->input('nombre'),
                'document'=>$document,
            ]);
    		$upload->save();
    		return response()->json([
                'status'=>'true',
                'Perfecto Gracias'
            ],200);
    	// }catch (\Exception $e){
        //     Log::critical("Hubieron algunos problemas: {$e->getCode()},{$e->getLine()},{$e->getMessage()} ");
        //     return response('Algo salio mal',500);
        // }

        
    }
}
