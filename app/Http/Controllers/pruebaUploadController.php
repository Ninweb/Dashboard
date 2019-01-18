<?php

namespace App\Http\Controllers;

use DB;
use App\Documentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class pruebaUploadController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
       $file = $request->file('ruta');
 
       $nombre = $file->getClientOriginalName();
 
       \Storage::disk('local')->put($nombre,  \File::get($file));

            $upload = new Documentos([
               'id_empleado'=>$request->input('id_empleado'),
                'ruta'=>$file,
            ]);
            $upload->save();
            return response()->json([
                'status'=>'true',
                'Perfecto Gracias'
            ],200);
        
    }
}
