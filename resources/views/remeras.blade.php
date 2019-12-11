@extends('plantilla')
@section('css')
  <link rel="stylesheet" href="/css/home.css">
  <link rel="stylesheet" href="/css/index.css">
  <link rel="stylesheet" href="/css/productos.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
@endsection
@section('principal')
<div id="main">


    <div class="titulo">
      <h1>REMERAS</h1>
    </div>

    <div class="row">
      @foreach ($productos as $producto)
        <div class="col-xs-12 col-md-6 col-lg-4">
             <a @if($producto->cantidadStock > 0) href="/producto/{{$producto['id']}}" @endif><img class="foto zoom"  src="/img/{{$producto['imagen']}}" alt=""></a>
             @if ($producto->cantidadStock == 0)
               <div class="indicador">
                 <h3>SIN STOCK</h3>
               </div>
             @endif
             <div class="deleteProducto">
            <a id="delete" href="#"><i class="fas fa-trash-alt" style="font-size:20px;"></i> </a>


             </div>



             {{-- storage/app/public --}}
             <div class="titulo-ropa">
               <span>{{$producto['nombre']}}</span>
             </div>
             <div class="precio-ropa">
               <span>${{$producto['precio']}}</span>
            </div>
        </div>

      @endforeach



</div>
<div class="paginate">
  {{$productos->links()}}
</div>


</div>
<script src="/js/eliminarProducto.js" type="text/javascript"></script>
<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script>
@endsection
