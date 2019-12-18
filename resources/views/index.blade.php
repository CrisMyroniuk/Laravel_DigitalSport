@extends('plantilla')
@section("css")
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Monoton&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/index.css">
<link rel="stylesheet" href="/css/home.css">
@endsection
@section("principal")
  <div id="content">

    <div id="section">
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div  class="carousel-item active" data-interval="10000">
            <img class="banner" src="/img/Portada1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="2000">
            <img class="banner" src="/img/Portada2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img class="banner" src="/img/Portada3.jpg" class="d-block w-100" alt="">


          </div>
        </div>
      <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

    <div id="main">
      <h1 style="display:inline">PRODUCTOS</h1>
      @if(Auth::user() && Auth::user()->admin)

          <a href="/nuevoProducto"><ion-icon style='font-size:35px' name="add-circle"></ion-icon></a>
          <a href="/modificarProducto"><ion-icon style='font-size:35px' name="settings"></ion-icon></a>


     @endif
      <div class="row">

        <div class="col-xs-12 col-md-6 col-lg-4">
        <a href="/remeras"><img class="foto zoom" src="img/imgInicio/Remeras.JPG" alt=""></a>
        <a href="/remeras">
          <div class="indicador">
            <h3>Remeras</h3>
          </div>
        </a>

        </div>
        <div class="col-xs-12 col-md-6 col-lg-4">
          <a href="/pantalones"><img class="foto zoom" src="img/imgInicio/Pantalon.jpg" alt=""></a>
          <a href="/pantalones">
            <div class="indicador">
              <h3>Shorts</h3>
            </div>
          </a>

        </div>
        <div class="col-xs-12 col-md-6 col-lg-4">
           <a href="/buzos"><img class="foto zoom" src="img/imgInicio/Campera.JPG" alt=""></a>
           <a href="/buzos">
             <div class="indicador">
               <h3>Buzos</h3>
             </div>
           </a>

        </div>
        <!--<div class="dividor cols-xs-12 col-lg-12">

        </div>-->
        <div class="col-xs-12 col-md-6 col-lg-4">

           <a href="/musculosas"><img class="foto zoom" src="img/imgInicio/Musculosa.JPG" alt=""></a>
           <a href="/musculosas">
             <div class="indicador">
               <h3>Musculosas</h3>
             </div>
           </a>

        </div>
        <div class="col-xs-12 col-md-6 col-lg-4">
           <a href="/zapatillas"><img class="foto zoom" src="img/imgInicio/Zapatillas.jpg" alt=""></a>
           <a href="/zapatillas">
             <div class="indicador">
               <h3>Zapatillas</h3>
             </div>
           </a>

        </div>
        <div class="col-xs-12 col-md-6 col-lg-4">

           <a href="/accesorios"><img class="foto zoom" src="img/imgInicio/Accesorios.JPG" alt=""></a>
           <a href="/accesorios">
             <div class="indicador">
               <h3>Accesorios</h3>
             </div>
           </a>



        </div>

        </div>

      </div>
    </div>
    <!-- Modal -->
<div class="modal fade in" id="myModal" role="dialog" style="display: block; padding-right: 16px;"><div class="modal-dialog"><!-- Modal content-->
    <div class="modal-content"><div class="modal-header"><h4 class="modal-title">Querés conocer nuestras promociones
exclusivas ?</h4><button class="close" data-dismiss="modal" type="button">×</button></div><div class="modal-body"><input style="width:100%;" type="email" name="" value="" placeholder="Ingresa tu email">
</div><div class="modal-footer"><button class="btn btn-default" data-dismiss="modal" type="button">No gracias, soy millonario</button><button class="btn btn-default" data-dismiss="modal" type="button">Enviar</button>
      </div></div></div></div><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
 $(function(){
  $("#myModal").modal();
 });
</script>
@endsection
