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
        <h1>Producto Nuevo</h1>
      </div>
      <form class="" action="/nuevoProducto" method="post">
        {{csrf_field()}}
        <div class="form-group">
          <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" placeholder="Nombre Producto">
        </div>
        <div class="form-group">
          <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3" placeholder="Descripcion"></textarea>
        </div>
        <div class="form-group">
          <input type="number" class="form-control" id="exampleFormControlInput1" name="precio" placeholder="Precio">
        </div>
        <div class="form-group">
          <input type="number" class="form-control" id="exampleFormControlInput1" name="cantidadStock" placeholder="Cantidad en Stock">
        </div>
        <div class="form-group">
          <select class="custom-select" name='marca_id'>
            <option selected>Seleccione una Marca</option>
           @foreach ($marcas as $marca)
                <option value="{{$marca->id}}" @if($marca->id == old('marca_id')) selected @endif>{{$marca->nombre}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <select class="custom-select"  name='categoria_id'>
            <option selected>Seleccione una Categoria</option>
            @foreach ($categorias as $cat)
                <option value="{{$cat->id}}" @if($cat->id == old('categoria_id')) selected @endif>{{$cat->nombre}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFileLang" lang="es">
            <label class="custom-file-label" for="customFileLang">Seleccionar Imagen</label>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-lg">Cargar Producto</button>
        </div>
      </form>


    </div>
  </div>




@endsection
