<?php

namespace App\Http\Controllers;



class DashboardPruebaController extends Controller
{
    protected $empleados;
    protected $personas;
    protected $referencias;
    protected  $familiares;

    public function __construct()
    {
        $this->empleados = new EmpleadoController();
        $this->personas = new PersonaController();
        $this->referencias = new ReferenciaController();
        $this->familiares = new FamiliarController();
    }

    public function index(){
        $empleado = $this->empleados->getEmpleado(auth()->user()->id);
        $persona = $this->personas->show($empleado[0]['id_persona']);
        $persona = array($persona);
        $referencias = $this->referencias->getReferenciasEmpleado($empleado[0]['id']);
        $familiares = $this->familiares->getFamiliaresEmpleados($empleado[0]['id']);




        return view('dashboardPrueba')
            ->with('empleado',$empleado)
            ->with('persona',$persona)
            ->with('referencias',$referencias)
            ->with('familiares',$familiares);
    }
}
