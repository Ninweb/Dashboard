@extends('layouts.app')

@section('content')
    <?php

        $empleado = $empleado[0];
        $persona = $persona[0];
        // $referencias , utilizar foreach
        //$familiares , utilizar foreach
        $departamento = \App\Departamentos::where('id',$empleado['id_departamento'])->get();
        $departamento = $departamento[0];
        $salario = \App\Salarios::where('id',$empleado['id'])->get();
        $salario = $salario[0];

    ?>



    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Bienvenido: {{$persona['nombre'].' '.$persona['apellido']}} </h1>
                <h3> tu información personal: </h3>
                <h4> Sexo: {{$persona['sexo'] }}</h4>
                <h4> Fecha de nacimiento : {{$persona['fecha_nacimiento']}}</h4>
                <h4> cedula: {{ $persona['cedula'] }}</h4>
                <h4> profesion: {{ $persona['profesion'] }}</h4>
                <h3> Información como Empleado</h3>
                <h4> Departamento: {{ $departamento['nombre_departamento'] }}</h4>
                <h4> Cargo: {{$empleado['descripcion_cargo']}}</h4>
                <h4> Fecha Ingreso: {{$empleado['fecha_ingreso']}}</h4>
                <h4> Estado: {{$empleado['estado_empleado']}}</h4>
                <h4> Transporte ida: {{$empleado['descripcion_transporte_ida']}}</h4>
                <h4> Transporte vuelta : {{$empleado['descripcion_transporte_vuelta']}}</h4>
                <h4> numero de habitacion: {{$empleado['numero_habitacion']}}</h4>
                <h4> numero celular: {{$empleado['numero_celular']}}</h4>
                <h4> tipo de sangre: {{$empleado['tipo_sangre']}}</h4>
                <h4> profesion: {{$empleado['profesion']}}</h4>
                <h4> estado_civil: {{$empleado['estado_civil']}}</h4>
                <h4> educacion: {{$empleado['educacion']}}</h4>
                <h4> Sueldo: {{$salario['salario_base']}}</h4>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Referencias Personales</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido </th>
                            <th scope="col">numero de telefono</th>
                            <th scope="col">Relacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($referencias as $referencia)
                            <?php
                            $id_persona = $referencia['id_persona'];
                            $personaReferencia = \App\Personas::where('id',$id_persona)->get();
                            ?>
                            <tr>
                                <th scope="row">{{$personaReferencia[0]['nombre']}}</th>
                                <td>{{$personaReferencia[0]['apellido']}}</td>
                                <td>{{$referencia['telefono']}}</td>
                                <td>{{$referencia['relacion']}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>



            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Referencias Familiares</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Nombre familiar</th>
                        <th scope="col">Apellido Familiar</th>
                        <th scope="col">numero de telefono</th>
                        <th scope="col">Parentezco</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($familiares as $familiar)
                            <?php
                                $id_persona = $familiar['id_persona'];
                                $personaFamiliar = \App\Personas::where('id',$id_persona)->get();
                            ?>
                            <tr>
                                <th scope="row">{{$personaFamiliar[0]['nombre']}}</th>
                                <td>{{$personaFamiliar[0]['apellido']}}</td>
                                <td>{{$familiar['telefono']}}</td>
                                <td>{{$familiar['parentezco']}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection