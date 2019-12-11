window.onload = function () {
  var eliminar = document.querySelectorAll('.delete');
  console.log(eliminar)
  for(boton of eliminar){
    boton.onclick = function (event){
      this.href
      event.preventDefault();
      swal({
    title: "¿Estas seguro que deseas eliminar el producto?",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {

      swal("Producto Eliminado!", {

        icon: "success",
      });

    } else {
      swal.close();
    }
  });
      // var confirmacion = swal("¿Estas seguro que deseas eliminar el producto?","", "info");
      // console.log(confirmacion)
    }
  }

}
