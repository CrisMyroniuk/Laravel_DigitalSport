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


              var p = document.createElement('p')
              var a=document.createElement('a')
              var i = document.createElement('img')
              // p.innerHTML = producto.nombre
              a.innerHTML=producto.nombre
              a.setAttribute('href','/producto/'+ producto.id);
              
              i.setAttribute('src','/img/'+producto.imagen);
              i.width = 45;
              i.height = 45;
              p.append(a)
              p.append(i)
              capturo2.append(p);
              a.style.color = "black";




                });

          });


});
});
