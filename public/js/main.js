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
<<<<<<< HEAD
              var p= document.createElement('p')
          p.innerHTML = producto.nombre
              capturo2.append(p);


=======
              var p = document.createElement('p')
              var a=document.createElement('a')
              // p.innerHTML = producto.nombre
              a.innerHTML=producto.nombre
              a.setAttribute('href','#');
              p.append(a)
              capturo2.append(p);
>>>>>>> 660ba5659c8179da303ace73db19644178971108

                });

          });


});
});
