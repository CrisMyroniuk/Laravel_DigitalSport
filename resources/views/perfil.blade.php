@extends('plantilla')
@section('css')

  <link rel="stylesheet" href="/css/index.css">
  <link rel="stylesheet" href="/css/perfil.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>DIGITAL SPORT</title>
@endsection
@section('principal')
  <div id="container">

    <h1>Bienvenido {{Auth::user()->name}}</h1>
    <div class="row">
    <div id="nav" class="col-xs-12 col-md-2 col-lg-2">
        <div>
            <ul>
              <li><a href="#datosper">Datos Personales</a></li>
              <li><a href="#direcciones">Direcciones</a></li>
              <li><a href="#pedidos">Pedidos</a></li>
              <li><a href="#favoritos">Favoritos</a></li>
           </ul>
           <div class="modificar-Datos">
             <button id="modificar" type="button" class="btn btn-primary btn-lg btn-block"><i class="fas fa-edit"></i> <span>MODIFICAR DATOS</span></button>

           </div>
       </div>
     </div>

    <div id="main" class="col-xs-12 col-md-9 col-lg-9">
           <div id="datosper">
              <h3>Datos personales</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </div>
           <div id="direcciones">
             <h3>Direcciones</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </div>
           <div id="pedidos">
             <h3>Pedidos</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </div>
           <div id="favoritos">
             <h3>Favoritos</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </div>

      </div>
    </div>

@endsection
