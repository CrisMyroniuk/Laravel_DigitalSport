var selectProducto = document.querySelector('select');

selectProducto.addEventListener("change",function(){
  var inputName=document.getElementById('name')
  console.log(this.options[this.selectedIndex].value);
  console.log(this.options[this.selectedIndex].innerText);
  
})
//var seleccionado = selectProducto.selectedIndex;
