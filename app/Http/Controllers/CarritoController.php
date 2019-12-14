<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Producto;
use App\Carrito;
use App\User;

class CarritoController extends Controller
{

  public function agregarProductoCarrito(Request $req){
    $productoAgregado = new Carrito();
    $productoAgregado->user_id=$req['user_id'];
    $productoAgregado->producto_id=$req['producto_id'];
    $productoAgregado->nombre=$req['nombre'];
    $productoAgregado->total=$req['total'];
    $productoAgregado->cantidad=$req['cantidad'];
    $productoAgregado->save();
    return redirect('/carrito');


  }
  public function mostrarProductosCarrito(){

    $productosCarritos=Carrito::where('user_id',4)->get();
    return view('carrito',compact('productosCarritos'));
  }



}
