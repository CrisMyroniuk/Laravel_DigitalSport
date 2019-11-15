<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Monoton&display=swap" rel="stylesheet">
    

    @yield("css")


  </head>
  <body>
    <div class="contenedor">
      <header>
      <input type="checkbox" id="menu">
      <label for="menu"><img src="img/menu.svg" alt=""></label>
      <a class="logo" href="index.php"><h1>DIGITAL SPORT></h1></a>

     <nav class="menu">
       <ul>
         <li><a href="remeras.php">Remeras</a></li>
         <li><a href="pantalon.php">Pantalones</a></li>
         <li><a href="zapatillas.php">Zapatillas</a></li>
         <li><a href="buzos.php">Buzos</a></li>
         <li><a href="musculosas.php">Musculosas</a></li>
         <li><a href="accesorios.php">Accesorios</a></li>
         <hr>
         <li><a href="contacto.php">CONTACTO</a></li>
         <li><a href="faqs.php">FAQS</a></li>

         <li><a href="registro.php">REGISTRO</a></li>
         <li><a href="login.php">LOGIN</a></li>


         <li><a href="perfil.php">MI PERFIL</a></li>
         <li><a href="logout.php">CERRAR SESIÓN</a></li>


       </ul>

     </nav>

       <button type="button" name="button"> <a href="login.php"> <img src="img/logearse.svg" alt=""> </a> </button>

      <button type="button" name="button"> <a href="perfil.php"> <img src="img/login.svg" alt=""></a> </button>
      <button type="button" name="button"> <a href="miscompras.php"> <img src="img/carrito.svg" alt=""> </a> </button>




   </header>
    </div>

  <div id="container">
@yield("principal")
  </div>
  <footer>


      <div class="img-logo">
        <a href="index.php"><img src="img/logoBlanco.png" alt=""></a>

      </div>


      <div class="menu-footer">
            <ul>

              <li><i class="fas fa-user-edit"></i> <a href="registro.php">REGISTRO</a></li>
              <li><i class="fas fa-user"></i> <a href="login.php">LOGIN</a></li>

              <li><i class="fas fa-user-edit"></i> <a href="perfil.php">MI PERFIL</a></li>
              <li><i class="fas fa-user"></i> <a href="logout.php">CERRAR SESION</a></li>

              <!--<li><i class="far fa-question-circle"></i> <a href="faqs.php">PREGUNTAS FRECUENTES</a></li>
              <li><i class="far fa-envelope"></i> <a href="contacto.php">CONTACTO</a></li>-->

            </ul>

      </div>

    <div class="copyright">
      <span>Copyright 2019 - DIGITAL SPORT©</span>
    </div>

  </footer>


  </body>
</html>
