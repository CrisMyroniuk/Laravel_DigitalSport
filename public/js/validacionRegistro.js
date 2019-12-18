window.onload = function () {
var boton = document.getElementById('enviar');
var formulario = document.getElementById('formulario');
var elementos = formulario.elements;
console.log(elementos)
boton.onclick=function(event){


  if(elementos[1].value == ""){
  event.preventDefault();
  swal("Error", "El nombre ingresado no puede estar vacio", "info");
  }
  else if (elementos[2].value == "") {
swal("Error", "El apellido ingresado no puede estar vacio", "info");
  }
else if (elementos[3].value == "") {
  swal("Error", "El email ingresado no puede estar vacio", "info");
}
else if (elementos[4].value == "") {
  swal("Error", "La constraseña ingresado no puede estar vacia", "info");

}
else if (elementos[5].value == "") {
  swal("Error", "Confirme Contrasena", "info");
}
else if (elementos[5].value != elementos[4].value) {
swal("Error", "Las contrasenas no coinciden", "info");
}
}
}
