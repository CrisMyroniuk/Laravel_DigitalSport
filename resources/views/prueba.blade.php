@extends('plantilla')
@section('css')


  <link rel="stylesheet" href="fontawesome-free-5.10.1-web/css/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
@endsection
@section('principal')
  <div id="main">

      
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="img-producto">
              <img src="{{$producto['imagen']}}" alt="">
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-5">
            {{-- @foreach ($productos as $producto) --}}
              <h1>{{$producto['nombre']}}</h1>
              <h3>{{$producto['precio']}}</h3>
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

              <div class="carrito">
                <button id="carrito" style="padding:10px!important;" type="submit" class="btn btn-primary btn-lg btn-block">AGREGAR AL CARRITO <i class="fas fa-cart-plus"></i></button>
              </div>

            {{-- @endforeach --}}

          </div>
        </div>







  </div>
@endsection
