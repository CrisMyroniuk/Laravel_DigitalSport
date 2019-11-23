<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Marca;

class ProductoController extends Controller
{
  public function remera(){
    return view('remeras');
  }
  public function pantalon(){
    return view('pantalones');
  }
  public function musculosa(){
    return view('musculosas');
  }
  public function buzo(){
    return view('buzos');
  }
  public function accesorio(){
    return view('accesorios');
  }
  public function zapatilla(){
    return view('zapatillas');
  }
  public function productoSeleccionado(){
    return view('producto');
  }
  public function nuevoProducto(){
    return view('productoNuevo');
  }
  public function modificarProducto(){
    return view('modificarProducto');
  }
  public function newMarca()
  {
      $marcas = Marca::all();
      return view('productoNuevo', compact('marcas'));
  }
  public function newCategoria()
  {
      $categoria = Categoria::all();
      return view('productoNuevo', compact('categoria'));
  }
  public function agregarProducto(Request $req){
    $imagen = '';
    //si mandé una imagen la guardo
    if ($req->file('imagen')) {
        $imagen = $req->file('imagen')->store('public');
        $imagen = basename($imagen);
    }
    $productoNuevo = new Producto();
    $peliculaNueva->nombre=$req['nombre'];
    $peliculaNueva->descripcion=$req['descripcion'];
    $peliculaNueva->precio=$req['precio'];
    $peliculaNueva->cantidadStock=$req['cantidadStock'];
    $peliculaNueva->marca_id=$req['marca_id'];
    $peliculaNueva->categoria_id=$req['categoria_id'];
    $movie->imagen = $imagen;
    $peliculaNueva->save();


  }

}
