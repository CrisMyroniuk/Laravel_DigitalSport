var buttonAgregarCarrito=document.getElementById('carrito');

buttonAgregarCarrito.onclick=function(event){
  var cantidad = document.querySelector(".cantidad");



  if(cantidad.value == 0){
    event.preventDefault();
    swal("Cantidad invalida!", "Seleccione una cantidad mayor a 0", "info");
  }
  else{
    swal("Producto Agregado!", "Has agregado un producto al carrito", "success");
  }


}
