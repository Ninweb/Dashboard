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
            Route::get('usuarios','UsuarioController@index');
            Route::post('usuarios','UsuarioController@store');
            Route::delete('usuarios/{usuario}','UsuarioController@destroy');
            Route::put('usuarios/{usuario}','UsuarioController@update');

            /*Route::resource('usuarios','UsuarioController',['only' => [
                'index', 'store','show' , 'update' , 'destroy'
            ]]);*/

            Route::resource('departamentos','DepartamentoController',['only' => [
                'index', 'store','show' , 'update' , 'destroy'
            ]]);


Route::resource('documentos','DocumentoController',['only' => [
    'index', 'store','show' , 'update' , 'destroy'
]]);




Route::get('generate-pdf', 'PdfGenerateController@pdfview')->name('generate-pdf');


            Route::resource('salarios','SalarioController',['only' => [
                'index', 'store','show' , 'update' , 'destroy'
            ]]);

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

            Route::resource('documentos','DocumentosController',['only' => [
                'index', 'store','show' , 'update' , 'destroy'
            ]]);

            Route::get('empleado/{id_usuario}','EmpleadoController@getEmpleado');



