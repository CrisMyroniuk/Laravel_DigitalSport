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
}
