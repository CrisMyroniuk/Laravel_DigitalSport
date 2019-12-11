<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Marca;

class BuscadorController extends Controller
{
 public function buscar(Request $request){
   $products = Producto::where('nombre', 'like', '%'. $request->nombre.'%')->get();
  return view('buscador',compact('products'));
 }
}
