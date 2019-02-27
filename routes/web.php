<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboardAdmin');
});

Route::get('dashboardPrueba', 'DashboardPruebaController@index')->name('dashboardPrueba');



// Route::get('/dashboard/admin', function () {
//     return view('dashboardAdmin');
// });

// Route::get('/dashboard/create', function () {
//     return view('create');
// });

Route::get('/dashboard/user', function () {
    return view('index');
});


Auth::routes();

Route::get('/prueba', ['mddleware'=>'auth' , 'DashboardPruebaController@index'])->name('prueba');


// {{ csrf_field() }} colocar debajo del form de login




