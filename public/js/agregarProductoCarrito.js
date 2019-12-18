var buttonAgregarCarrito=document.getElementById('carrito');


buttonAgregarCarrito.onclick=function(event){
  var cantidad = document.querySelector(".cantidad");
  var talle = document.querySelector (".talle")


  if(cantidad.value == 0){
    event.preventDefault();
    swal("Cantidad invalida!", "Seleccione una cantidad mayor a 0", "info");
  }
  else {
    if(talle.value == ""){
      event.preventDefault();
      swal("Talle invalido!", "Seleccione un talle", "info");
    }
    else{
      swal("Producto Agregado!", "Has agregado un producto al carrito", "success");
    }
  }



}
