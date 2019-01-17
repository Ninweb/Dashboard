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







Route::resource('personas','PersonaController',['only' => [
    'index', 'store','show' , 'update' , 'destroy'
]]);

<<<<<<< HEAD


=======
<<<<<<< HEAD
Route::resource('direcciones','DireccionController',['only' => [
    'index', 'store','show' , 'update' , 'destroy'
]]);

Route::resource('familiares','FamiliarController',['only' => [
    'index', 'store','show' , 'update' , 'destroy'
]]);

Route::resource('empleados','EmpleadoController',['only' => [
    'index', 'store','show' , 'update' , 'destroy'
]]);

=======
Route::resource('login','Auth\LoginController');
>>>>>>> f9621b165fffae85e09651b06a6cb9aa843160c0
>>>>>>> 40271dfe0cc4916bc13cfdd4feb733474526961b
>>>>>>> 865a073359ab0d2d9fd66d1626ad15934828c01c
