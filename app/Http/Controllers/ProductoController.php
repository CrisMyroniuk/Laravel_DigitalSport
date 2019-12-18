<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Marca;


class ProductoController extends Controller
{
  public function remera(){
    $productos=Producto::where('categoria_id',1)->paginate(6);

      return view('remeras',compact('productos'));



  }
  public function pantalon(){
    $productos=Producto::where('categoria_id',6)->paginate(6);

      return view('pantalones',compact('productos'));

  }
  public function musculosa(){
      $productos=Producto::where('categoria_id',5)->paginate(6);
    return view('musculosas',compact('productos'));
  }
  public function buzo(){
      $productos=Producto::where('categoria_id',2)->paginate(6);
    return view('buzos',compact('productos'));
  }
  public function accesorio(){
      $productos=Producto::where('categoria_id',4)->paginate(6);
    return view('accesorios',compact('productos'));
  }
  public function zapatilla(){
      $productos=Producto::where('categoria_id',3)->paginate(6);
    return view('zapatillas',compact('productos'));
  }

  // public function productoSeleccionado(){
  //   return view('producto');
  // }
  public function productoSeleccionado($id){

    $producto = Producto::find($id);

    return view('producto',compact('producto'));

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
        $imagen = $req->file('imagen')->store('public/img');
        
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

    return redirect('/nuevoProducto');
  }
  public function eliminarProducto($id){

       //busco el producto por el id
       $product = Producto::find( $id );
       //elimino el producto
       $product->delete();
       return redirect('/remeras');

  }



}
