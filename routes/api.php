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
Route::resource('personas','PersonaController',['only' => [
    'index', 'store','show' , 'update' , 'destroy'
]]);

Route::resource('login','Auth\LoginController');
>>>>>>> f9621b165fffae85e09651b06a6cb9aa843160c0
