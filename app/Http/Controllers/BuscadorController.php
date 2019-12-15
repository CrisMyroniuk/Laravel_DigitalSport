<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Marca;

class BuscadorController extends Controller
{
 public function buscar(Request $request){
   $products = Producto::where('nombre', 'like', '%'. $request->producto.'%')->take(5)->get();
  return view('buscador',compact('products'));
 }

 public function filtradoJson(Request $request){
   $products = Producto::where('nombre', 'like', '%'. $request->producto .'%')->take(6)->get();

   return response()->json($products);
 }
}
