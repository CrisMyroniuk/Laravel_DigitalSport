var selectProducto = document.querySelector('select');

var formulario=document.querySelector('.formulario');
var elementos=formulario.elements;

selectProducto.addEventListener("change",function(){
  var inputName=document.getElementById('name')

  console.log(this.options[this.selectedIndex].value);
  elementos[1].value=this.options[this.selectedIndex].innerText;
  
  //console.log(this.options[this.selectedIndex].innerText);

})
//var seleccionado = selectProducto.selectedIndex;
