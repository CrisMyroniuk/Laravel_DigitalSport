@extends('plantilla')
@section('css')

  <link rel="stylesheet" href="/css/index.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>DIGITAL SPORT</title>
@endsection
@section('principal')
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Producto</th>
      <th scope="col">Talle</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @php
      $incrementador=1;
      $total=0;
    @endphp
      @foreach ($productosCarritos as $producto)
    <tr>
      {{-- <th scope="row">1</th> --}}


        <th scope="row">{{$incrementador}}</th>
        <td>{{$producto['nombre']}}</td>
        <td>Talle</td>
        <td>{{$producto['cantidad']}}</td>
        <td>{{$producto['total']*$producto['cantidad']}}</td>
        <td> <button style="background-color:white;border:0px;" type="submit" name="button"><i class="fas fa-trash-alt"></i></button> </td>
        @php
  $incrementador++;
  $total+=($producto['total']*$producto['cantidad']);
        @endphp



    </tr>
    @endforeach
  </tbody>
</table>
  <input type="text" name="total-Pedido" value="${{$total}}">




    </div>
  </div>
















@endsection
