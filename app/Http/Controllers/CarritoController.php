<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Producto;
use App\Carrito;
use App\User;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{

  public function agregarProductoCarrito(Request $req){
    $productoAgregado = new Carrito();
    $productoAgregado->user_id=$req['user_id'];
    $productoAgregado->producto_id=$req['producto_id'];
    $productoAgregado->nombre=$req['nombre'];
    $productoAgregado->total=$req['total'];
    $productoAgregado->cantidad=$req['cantidad'];
    $productoAgregado->talle=$req['talle'];
    $productoAgregado->save();
    return redirect('/carrito');


  }
  public function mostrarProductosCarrito(){

      $productosCarritos=Carrito::where('user_id',Auth::user()->id)->get();
      return view('carrito',compact('productosCarritos'));


  }
  public function eliminarProducto($id){

       //busco el producto por el id
       $product = Carrito::find( $id );
       //elimino el producto
       $product->delete();
       return redirect('/carrito');

  }
  public function contadorProductosCarrito(){
    $cantidadProductos=Carrito::where('user_id',Auth::user()->id)->count();
    return view('contadorProductosCarrito',compact('cantidadProductos'));
  }



}
