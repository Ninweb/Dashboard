<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/login','AuthController@login')->name('login');

Route::get('/logout','AuthController@logout')->name('logout');



            // CRUD USUARIOS
            /*Route::resource('usuarios','UsuarioController',['only' => [
                'index', 'store','show' , 'update' , 'destroy'
            ]]);*/
            Route::get('usuarios','UsuarioController@index');
            Route::get('usuarios/{usuario}','UsuarioController@show');
            Route::post('usuarios','UsuarioController@store');
            Route::delete('usuarios/{usuario}','UsuarioController@destroy');
            Route::put('usuarios/{usuario}','UsuarioController@update');
            
            //CRUD EMPLEDO
            /*Route::resource('empleados','EmpleadoController',['only' => [
                'index', 'store','show' , 'update' , 'destroy'
            ]]);*/
            Route::get('empleados','EmpleadoController@index');
            Route::get('empleados/{empleado}','EmpleadoController@show');
            Route::get('usuario/empleados/{empleado}','EmpleadoController@getEmpleado');
            Route::get('empleadoDepartamento/{idDepartamento}','EmpleadoController@getEmpleadoDepartamento');
            Route::post('empleados','EmpleadoController@store');
            Route::delete('empleados/{empleado}','EmpleadoController@destroy');
            Route::put('empleados/{empleado}','EmpleadoController@update');

            //CRUD PERSONAS
            /*Route::resource('personas','PersonaController',['only' => [
                'index', 'store','show' , 'update' , 'destroy'
            ]]);*/
            Route::get('personas','PersonaController@index');
            Route::get('personas/{persona}','PersonaController@show');
            Route::post('personas','PersonaController@store');
            Route::delete('personas/{persona}','PersonaController@destroy');
            Route::put('personas/{persona}','PersonaController@update');


            

            /*Route::resource('departamentos','DepartamentoController',['only' => [
                'index', 'store','show' , 'update' , 'destroy'
            ]]);*/
            
            Route::get('departamentos','DepartamentoController@index');
            Route::get('departamentos/{departamento}','DepartamentoController@show');
            Route::post('departamentos','DepartamentoController@store');
            Route::delete('departamentos/{departamento}','DepartamentoController@destroy');
            Route::put('departamentos/{departamento}','DepartamentoController@update');

            Route::resource('salarios','SalarioController',['only' => [
                'index', 'store','show' , 'update' , 'destroy'
            ]]);

            
                /*
            Route::resource('direcciones','DireccionController',['only' => [
                'index', 'store','show' , 'update' , 'destroy'
            ]]);*/

            Route::get('direcciones','DireccionController@index');
            Route::get('direcciones/{direccion}','DireccionController@show');
            Route::post('direcciones','DireccionController@store');
            Route::delete('direcciones/{direccion}','DireccionController@destroy');
            Route::put('direcciones/{direccion}','DireccionController@update');



            Route::resource('familiares','FamiliarController',['only' => [
                'index', 'store','show' , 'update' , 'destroy'
            ]]);

            Route::resource('referencias','ReferenciaController',['only' => [
                'index', 'store','show' , 'update' , 'destroy'
            ]]);

            

            Route::resource('documentos','DocumentosController',['only' => [
                'index', 'store','show' , 'update' , 'destroy'
            ]]);

            Route::get('empleado/{id_usuario}','EmpleadoController@getEmpleado');


