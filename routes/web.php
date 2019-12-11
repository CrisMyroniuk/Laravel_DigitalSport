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
Route::get('/producto/{id}','ProductoController@productoSeleccionado');
Route::get('/pantalones','ProductoController@pantalon');
Route::get('/musculosas','ProductoController@musculosa');
Route::get('/buzos','ProductoController@buzo');
Route::get('/accesorios','ProductoController@accesorio');
Route::get('/zapatillas','ProductoController@zapatilla');
// Route::get('/producto','ProductoController@productoSeleccionado');
Route::get('/nuevoProducto','ProductoController@nuevoProducto')->middleware('is_admin');
Route::post('/nuevoProducto','ProductoController@agregarProducto')->middleware('is_admin');
Route::get('/nuevoProducto', 'ProductoController@newProducto')->middleware('is_admin');

Route::get('/modificarProducto','ProductoController@modificarProducto') ->middleware('is_admin');
Route::get('/contacto','ContactoController@contacto');
Route::get('/perfil','HomeController@perfil');
Route::get('/carrito','HomeController@carrito');
Route::get('/faqs',function(){
  return view('faqs');
});
Route::get('/buscador','BuscadorController@buscar')->name('buscador');
Route::get('/eliminar/{id}','ProductoController@eliminarProducto');
Route::post('/eliminar/{id}','ProductoController@eliminarProducto');


Auth::routes();
