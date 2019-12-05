
var formNewProducto=document.querySelector('.formNewProducto');
var inputNombreProducto=document.querySelector('[name=nombre]');

formNewProducto.onsubmit = function(event){
   if(inputNombreProducto.value=="")
    {
      swal("Revisa los campos!", "Faltan datos por completar", "warning");
      console.log(inputNombreProducto.value);
    }

console.log(inputNombreProducto.value);
      swal("Producto Agregado!", "Has agregado un nuevo producto", "success");

}
