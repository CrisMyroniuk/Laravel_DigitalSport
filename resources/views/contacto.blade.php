@extends('plantilla')
@section('css')
  <link rel="stylesheet" href="css/contacto.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection
@section('principal')
  <div class="container">
  <h1>CONTACTO</h1>


  <div class="formulario">
    <form class="" action="">
      <p>
        <label for="motivo">Motivo</label>
        <select class="motivo" name="motivo">
          <option value="">Devolución</option>
          <option value="">Problema de envio</option>
          <option value="">Problema de pago</option>
          <option value="">Cambio</option>
          <option value="">Otro</option>
        </select>

      </p>
      <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="" required>
      </p>

      <p>
        <label for="nombre">Apellido</label>
        <input type="text" name="nombre" value="" required>
      </p>

      <p>
          <label for="email">Email</label>
          <input type="email" name="email" value="" required>
      </p>
      <p>
        <label for="telefono">Telefono</label>
        <input type="number" name="telefono" value="" required>
      </p>

      <p>
        <label for="mensaje">Cuentanos más</label>
      </p>
      <p>
        <input class="mensaje" type="text-area" name="mensaje" value="">
      </p>
      <button type="submit" class="btn btn-primary">Enviar</button>


    </form>
  </div>
  </div>
@endsection
