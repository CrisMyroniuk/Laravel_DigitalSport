@extends('plantilla')
@section('css')

  <link rel="stylesheet" href="/css/producto.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/index.css">
  <link rel="stylesheet" href="/fontawesome-free-5.10.1-web/css/all.css">

@endsection
@section('principal')

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-7">
          <div class="img-producto">
            <img src="/storage/img/{{$producto['imagen']}}" alt="">

          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-5">
          {{-- @foreach ($productos as $producto) --}}
            <h1>{{$producto['nombre']}}</h1>
            <h3>${{$producto['precio']}}</h3>
            <p class="descripcion">{{$producto['descripcion']}}</p>
            <form class="" action="producto.php" method="post">
              <p class="cantidad">
                <label for="cantidad">Cantidad</label>
                <input class="cantidad" type="number" name="cantidad" value="" min="1" max="9">
              </p>
              <p class="borde">
                <label for="talle">Talle</label>

                <select class="talle" name="">
                  <option value="">S</option>
                  <option value="">M</option>
                  <option value="">L</option>

                </select>
              </p>

            </form>
            @if (Auth::user() == true)


              <div class="carrito">
              <button id="carrito" style="padding:10px!important;" type="submit" class="btn btn-primary btn-lg btn-block" @if($producto->cantidadStock == 0) disabled @endif>AGREGAR AL CARRITO <i class="fas fa-cart-plus"></i></button>

            </div>
            @else
              <div class="carrito">
              <button id="carrito" style="padding:10px!important;" type="submit" class="btn btn-primary btn-lg btn-block" disabled >AGREGAR AL CARRITO <i class="fas fa-cart-plus"></i></button>

            </div>
            @endif

        </div>
      </div>



    </div>

  </div>

  <script src="/js/agregarProductoCarrito.js" type="text/javascript"></script>
  <script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script>

@endsection
