<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>


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
      <label for="menu"><img src="/img/menu.svg" alt=""></label>
      <a class="logo" href="index.php"><h1>DIGITAL SPORT ></h1></a>

     <nav class="menu">
       <ul>
         <li><a href="remeras">Remeras</a></li>
         <li><a href="pantalon">Pantalones</a></li>
         <li><a href="zapatillas">Zapatillas</a></li>
         <li><a href="buzos">Buzos</a></li>
         <li><a href="musculosas">Musculosas</a></li>
         <li><a href="accesorios">Accesorios</a></li>
         <hr>
         <li><a href="contacto">CONTACTO</a></li>
         <li><a href="faqs">FAQS</a></li>
         @if((Auth::user())==false)
         <li><a href="register">REGISTRO</a></li>
         <li><a href="login">LOGIN</a></li>
         @endif
         @if(Auth::user())
         <li><a href="perfil">MI PERFIL</a></li>
         <li><a href="logout">CERRAR SESIÓN</a></li>
        @endif
        @if(Auth::user() && Auth::user()->admin)

          <li><a href="/nuevoProducto">NUEVO PRODUCTO</a></li>
          <li><a href="/modificarProducto">MODIFICAR PRODUCTO</a></li>


       @endif

       </ul>

     </nav>

       <button type="button" name="button"> <a href="login"> <img src="img/logearse.svg" alt=""> </a> </button>
  @if(Auth::user())
      <button type="button" name="button"> <a href="/perfil"> <img src="img/login.svg" alt=""></a> </button>
      <button type="button" name="button"> <a href="miscompras"> <img src="img/carrito.svg" alt=""> </a> </button>
  @endif









   </header>
    </div>


@yield("principal")

  <footer>


      <div class="img-logo">
        <a href="index.php"><img src="img/logoBlanco.png" alt=""></a>

      </div>


      <div class="menu-footer">
            <ul>
              @if(Auth::user()==false)
              <li><i class="fas fa-user-edit"></i> <a href="register">REGISTRO</a></li>
              <li><i class="fas fa-user"></i> <a href="login">LOGIN</a></li>
              @endif
              @if(Auth::user())
              <li><ion-icon style="color:white;font-size:25px" name="person"></ion-icon> <a href="/perfil">MI PERFIL</a></li>
              <li><i class="fas fa-user"></i> <a href="">CERRAR SESION</a></li>
              @endif
              <li><i class="far fa-question-circle"></i> <a href="faqs.php">PREGUNTAS FRECUENTES</a></li>
              <li><i class="far fa-envelope"></i> <a href="/contacto">CONTACTO</a></li>

            </ul>

      </div>

    <div class="copyright">
      <span>Copyright 2019 - DIGITAL SPORT©</span>
    </div>

  </footer>
  <script  src = "https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js" > </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
