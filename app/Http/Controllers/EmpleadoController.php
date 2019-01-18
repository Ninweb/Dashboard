<?php

namespace App\Http\Controllers;

use DB;
use App\Empleados;
use App\Personas;
use App\Direcciones;
use App\Usuarios;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EmpleadoController extends Controller
{
     
    protected $persona;

    public function  __contruc(PersonaController $persona){
    	$this->persona = $persona;

    }

    public function index()
    {
    	
    	$empleados = DB::table('empleados')
    	->join('personas','personas.id','=','empleados.id')
    	->join('departamentos','departamentos.id','=','empleados.id')
    	->select('personas.nombre','empleados.descripcion_cargo','departamentos.nombre_departamento')
    	->get();

    
        return response()->json($empleados);
        
    }

    public function create()
    {

    }


    public function store(Request $request)
    {
    	
    	try{
            $empleado = new Empleados([

            	'id_persona'=>$request->input('id_persona'),
                'id_usuario'=>$request->input('id_usuario'),
                'id_departamento'=>$request->input('id_departamento'),
                'descripcion_cargo'=>$request->input('descripcion_cargo'),
                'fecha_ingreso'=>$request->input('fecha_ingreso'),
                'fecha_retirado'=>$request->input('fecha_retirado'),
                'estado_empleado'=>$request->input('estado_empleado'),
                'descripcion_transporte_ida'=>$request->input('descripcion_transporte_ida'),
                'descripcion_transporte_vuelta'=>$request->input('descripcion_transporte_vuelta'),
                'numero_habitacion'=>$request->input('numero_habitacion'),
                'numero_celular'=>$request->input('numero_celular'),
                'tipo_sangre'=>$request->input('tipo_sangre'),
                'profesion'=>$request->input('profesion'),
                'estado_civil'=>$request->input('estado_civil'),
                'educacion'=>$request->input('educacion')
                
            ]);
            $empleado->save();
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

    	$empleado = Empleados::find($id);

        return response()->json($empleado);

    }

    public function edit($id)
    {
    	  $empleado = Empleados::find($id);

    }


    public function update($id, Request $request)
    {
    	$empleado = Empleados::find($id);
    	$empleado->fill($request->all());
        $empleado->save();

        return response()->json([$empleado]);

        
    }


    public function destroy($id)
    {
    		
    	try
    	{
    		$empleado = Empleados::find($id);
    		if (!$empleado) {
    			# code...
    			return response()->json(['ids no encontrado']);
    		}

    		$id_persona = $empleado->id_persona;
    		$id_usuario = $empleado->id_usuario; 

    		$persona = Personas::where('id',$id_persona)->delete();

    		$delete = Empleados::where('id',$empleado)->delete();

    		$usuario = Usuarios::where('id',$id_usuario)->delete();

    		
       
    		return response()->json(['empleado elimanado']);

    	}catch (\Exception $e){
            Log::critical("Hubieron algunos problemas: {$e->getCode()},{$e->getLine()},{$e->getMessage()} ");
            return response('Algo salio mal',500);
        }

    }

}
