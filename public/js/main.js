window.addEventListener("load", function(){
  var capturar = document.getElementById("buscar");
    capturar.addEventListener("keyup",function(){


        fetch('http://localhost:8000/api/buscar?producto=' + capturar.value)
          .then(function(resp){
            return resp.json();
          })

          .then(function(datos){
          var capturo2 = document.getElementById("resultado");
          capturo2.innerHTML = ''
            console.log(datos);
            datos.forEach(function (producto){
              var li = document.createElement('li')
              li.innerHTML = producto.nombre
              
              capturo2.append(li)
          });

          });




});
});
