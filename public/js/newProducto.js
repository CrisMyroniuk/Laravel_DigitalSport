
var formNewProducto=document.querySelector('.formNewProducto');
var elementos=formNewProducto.elements;
var inputNombreProducto=document.querySelector('input[name=nombre]');

formNewProducto.onsubmit = function(event){
    if(elementos[1].value==""||elementos[2].value==""||elementos[3].value==""||elementos[4].value=="")
     {
       event.preventDefault();
       swal("Revisa los campos!", "Faltan datos por completar", "warning");
       console.log(elementos);
     }

     else{
      swal("Producto Agregado!", "Has agregado un nuevo producto", "success");
}
}
