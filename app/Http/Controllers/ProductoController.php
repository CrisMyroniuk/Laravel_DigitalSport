<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

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

}
