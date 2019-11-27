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
    $productos=Producto::all();
    return view('modificarProducto',compact('productos'));
    
  }
  public function newProducto()
  {
      $marcas = Marca::all();
      $categorias = Categoria::all();
      return view('productoNuevo', compact('marcas', 'categorias'));
  }



  public function agregarProducto(Request $req){
    $imagen = '';
    //si mandé una imagen la guardo
    if ($req->file('imagen')) {
        $imagen = $req->file('imagen')->store('public');
        $imagen = basename($imagen);
    }
    $productoNuevo = new Producto();
    $productoNuevo->nombre=$req['nombre'];
  $productoNuevo->descripcion=$req['descripcion'];
    $productoNuevo->precio=$req['precio'];
    $productoNuevo->cantidadStock=$req['cantidadStock'];
    $productoNuevo->marca_id=$req['marca_id'];

    $productoNuevo->categoria_id=$req['categoria_id'];
    $productoNuevo->imagen = $imagen;
    $productoNuevo->save();

    return redirect('/');
  }

}
