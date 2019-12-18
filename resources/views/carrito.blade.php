@extends('plantilla')
@section('css')

  <link rel="stylesheet" href="/css/index.css">
  <link rel="stylesheet" href="/css/carrito.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>DIGITAL SPORT</title>
@endsection
@section('principal')
  <div style="height:90vh;" class="principal">


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
        <td>{{$producto['talle']}}</td>
        <td>{{$producto['cantidad']}}</td>
        <td>{{$producto['total']*$producto['cantidad']}}</td>
        <td> <a href="/eliminarProductoCarrito/{{$producto['id']}}"> <i class="fas fa-trash-alt"></i> </a></td>
        @php


  $incrementador++;

        @endphp



    </tr>
    @endforeach
  </tbody>
</table>

  <div class="row">
    <div class="col-lg-3 offset-6 col">
      <form  class="confirmarCompra" action="" method="post">
        <h2>Resumen</h2>
        <div class="form-group">
          @php
            $total=0;
          @endphp
          @foreach ($productosCarritos as $producto)
              <div class="">

                <p>{{$producto['nombre']}}</p>
                <p>{{"  "}}</p>
                <p style="color:rgb(0, 123, 255);">${{$producto['total']*$producto['cantidad']}}</p>
              </div>

              @php

        $total+=($producto['total']*$producto['cantidad']);
              @endphp
          @endforeach
          <label style="color:white;" for="">TOTAL</label>
          <input type="text" name="total-Pedido" value="${{$total}}" disabled>
        </div>
        @if ($total==0)
          <button type="submit" class="btn btn-primary" disabled>Finalizar Compra</button>
        @else
          <button type="submit" class="btn btn-primary">Finalizar Compra</button>
        @endif


      </form>
    </div>

  </div>




    </div>
  </div>





</div>










@endsection
