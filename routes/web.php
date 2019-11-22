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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/remeras','ProductoController@remera');
Route::get('/pantalones','ProductoController@pantalon');
Route::get('/musculosas','ProductoController@musculosa');
Route::get('/buzos','ProductoController@buzo');
Route::get('/accesorios','ProductoController@accesorio');
Route::get('/zapatillas','ProductoController@zapatilla');
Route::get('/producto','ProductoController@productoSeleccionado');
