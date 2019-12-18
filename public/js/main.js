window.addEventListener("load", function(){


  var capturar = document.getElementById("buscar");
    capturar.addEventListener("keyup",function(){

var capturo2 = document.getElementById("resultado");
        if(this.value.length >= 3){


    fetch('http://digitalsport.dhalumnos/api/buscar?producto=' + capturar.value)
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
              i.style.width = '45px';
              i.height = '45px';
              p.append(a)
              p.append(i)
              capturo2.append(p);
              a.style.color = "black";
              i.style.display = 'block'
              p.style.border= '1px solid black';
              p.style.margin = '20px';
              p.style.padding = '10px';
              p.style.width = '80%' ;
              capturo2.style.width = '100%';





                });

          });
}
else {
  capturo2.innerHTML = ''
}
});

});
