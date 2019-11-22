@extends('plantilla')
@section('css')
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/productos.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
@endsection
@section('principal')
<div id="main">
  <h1>CALZADO</h1>
  <div class="row">

  <div class="col-xs-12 col-md-6 col-lg-4">
  <a href="producto.php"><img class="foto zoom" src="img/Zapatillas/Zapatilla1.jpg" alt=""></a>
  <div class="titulo-ropa">
    <span>Zapatillas Nike Running</span>
  </div>
  <div class="precio-ropa">
    <span>$5500</span>
  </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-4">
    <a href="producto.php"><img class="foto zoom" src="img/Zapatillas/Zapatilla2.jpg" alt=""></a>
    <div class="titulo-ropa">
      <span>Zapatilla UnderArmour Training</span>
    </div>
    <div class="precio-ropa">
      <span>$4500</span>
   </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-4">
    <a href="producto.php"><img class="foto zoom" src="img/Zapatillas/Zapatilla1.jpg" alt=""></a>
    <div class="titulo-ropa">
      <span>Zapatillas Nike Running</span>
    </div>
    <div class="precio-ropa">
      <span>$5500</span>
   </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-4">
     <a href="producto.php"><img class="foto zoom" src="img/Zapatillas/Zapatilla2.jpg" alt=""></a>
     <div class="titulo-ropa">
       <span>Zapatilla UnderArmour Training</span>
     </div>
     <div class="precio-ropa">
       <span>$4500</span>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-4">
     <a href="producto.php"><img class="foto zoom" src="img/Zapatillas/Zapatilla1.jpg" alt=""></a>
     <div class="titulo-ropa">
       <span>Zapatillas Nike Running</span>
     </div>
     <div class="precio-ropa">
       <span>$5500</span>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-4">
  <a href="producto.php"><img class="foto zoom" src="img/Zapatillas/Zapatilla2.jpg" alt=""></a>
  <div class="titulo-ropa">
    <span>Zapatilla UnderArmour Training</span>
  </div>
  <div class="precio-ropa">
    <span>$4500</span>
  </div>
  </div>

  </div>

</div>
@endsection
