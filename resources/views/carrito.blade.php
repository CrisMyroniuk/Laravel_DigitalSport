@extends('plantilla')
@section('css')

  <link rel="stylesheet" href="/css/index.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>DIGITAL SPORT</title>
@endsection
@section('principal')
  <div class="lista-productos">
    <div style="border:2px solid black;display:inline" class="">
      <p style="display:inline-block">ID</p>
      <p style="display:inline-block">Producto</p>
      <p style="display:inline-block">Cantidad</p>
      <p style="display:inline-block">Total</p>
    </div>
    @foreach ($productosCarritos as $producto)

      <div class="">
        <p style="display:inline-block">{{$producto['id']}}</p>
        <p style="display:inline-block">{{$producto['nombre']}}</p>
        <p style="display:inline-block">{{$producto['cantidad']}}</p>
        <p style="display:inline-block">{{$producto['total']}}</p>
      </div>


    @endforeach

    </div>
  </div>
















@endsection
