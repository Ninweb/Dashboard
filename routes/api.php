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

Route::resource('usuarios','UsuarioController',['only' => [
    'index', 'store','show' , 'update' , 'destroy'
]]);

Route::resource('departamentos','DepartamentoController',['only' => [
    'index', 'store','show' , 'update' , 'destroy'
]]);


Route::resource('salarios','SalarioController',['only' => [
    'index', 'store','show' , 'update' , 'destroy'
]]);

<<<<<<< HEAD


Route::post('login', 'LoginController@login');

=======
>>>>>>> 2496c0a9740cd8324300852a6ce7e93e79c52414
Route::resource('personas','PersonaController',['only' => [
    'index', 'store','show' , 'update' , 'destroy'
]]);

Route::resource('direcciones','DireccionController',['only' => [
    'index', 'store','show' , 'update' , 'destroy'
]]);

Route::resource('familiares','FamiliarController',['only' => [
    'index', 'store','show' , 'update' , 'destroy'
]]);

Route::resource('referencias','ReferenciaController',['only' => [
    'index', 'store','show' , 'update' , 'destroy'
]]);

Route::resource('empleados','EmpleadoController',['only' => [
    'index', 'store','show' , 'update' , 'destroy'
]]);

Route::resource('login','Auth\LoginController');
<<<<<<< HEAD

Route::resource('prueba','pruebaUploadController');


=======
>>>>>>> 2496c0a9740cd8324300852a6ce7e93e79c52414
