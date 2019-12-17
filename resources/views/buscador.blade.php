<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <script src='js/main.js'></script>
      <link rel="stylesheet" href="/css/buscador.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title></title>
  </head>
  <body>

     <div class="container">
      <div class="col-8">
        <div class="input-group mb-3">
      <input type="text" class="form-control" id="buscar" placeholder="Busca un producto" aria-label="Recipient's username" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <span class="input-group-text">Buscar</span>
      </div>
    </div>
    <div class="">


   <div id="resultado">

   </div>

    </div>



  </div>
  </div>


  {{-- <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">textsms</i>
            <input type="text" id="autocomplete-input" class="autocomplete">
            <label for="autocomplete-input">Autocomplete</label>
          </div>
        </div>
      </div>
    </div> --}}



  {{-- @extends('plantilla')
  {{-- @section('css')
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="/css/productos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="/fontawesome-free-5.10.1-web/css/all.css">

  @endsection
  @section('principal') --}}

    {{-- <div class="row">
      @foreach ($products as $producto)
        <div class="col-xs-12 col-md-6 col-lg-4">
             <a href="/producto/{{$producto['id']}}"><img class="foto zoom" src="/img/Musculosas/{{$producto['imagen']}}" alt=""></a>
             <div class="titulo-ropa">
               <span>{{$producto['nombre']}}</span>
             </div>
             <div class="precio-ropa">
               <span>{{$producto['precio']}}</span>
            </div>
          </div>

  @endforeach
    </div>
    <div class="paginate">
      {{$productos->links()}}
    </div>

  </div>

@endsection --}}

<script type="text/javascript">
  var buscador=document.getElementById("buscar");

  buscador.onfocus = function(){
    var body= document.querySelector(".container");
    body.style.backgroundColor="transparent";

  }
</script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>




</html>

{{-- @foreach($products as $producto)
{{$producto->nombre}}
@endforeach --}}
