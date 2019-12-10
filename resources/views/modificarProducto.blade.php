@extends('plantilla')
@section('css')
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="/css/nuevoProducto.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
@endsection
@section('principal')
  <div class="separador">

  </div>
  <div class="row" style="margin-right:0px">
    <div class="main col-lg-6 col-md-8 col-xs-12 offset-md-2 offset-lg-3  ">
      <div class="titulo">
        <h1>Modificar Producto</h1>
      </div>
      <form class="formulario" action="/modificarProducto" method="post">
        <div class="form-group">
          <select class="custom-select">
            <option selected>Seleccione el producto a modificar</option>
            @foreach ($productos as $producto)
                 <option value="{{$producto->id}}" @if($producto->id == old('marca_id')) selected @endif>{{$producto->nombre}}</option>
             @endforeach
          </select>
        </div>
        <div class="form-group">
          <input value="" type="text" class="form-control" id="name" name="nombre" placeholder="Nombre Producto">
        </div>
        <div class="form-group">
          <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3" placeholder="Descripcion"></textarea>
        </div>
        <div class="form-group">
          <input type="number" class="form-control" id="exampleFormControlInput1" name="precio" placeholder="Precio">
        </div>
        <div class="form-group">
          <input type="number" class="form-control" id="exampleFormControlInput1" name="stock" placeholder="Cantidad en Stock">
        </div>
        <div class="form-group">

          <select class="custom-select">
            <option selected>Seleccione una Marca</option>
            <option value=""></option>
          </select>
        </div>
        <div class="form-group" >
          <select class="custom-select">
            <option selected>Seleccione una Categoria</option>
            <option value=""></option>
          </select>
        </div>
        <div class="form-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFileLang" lang="es" >
            <label class="custom-file-label" for="customFileLang" >Seleccionar Imagen</label>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-lg ">Modificar Producto</button>
        </div>

      </form>


    </div>
  </div>
<script src="/js/modificarProducto.js" type="text/javascript">

</script>



@endsection
