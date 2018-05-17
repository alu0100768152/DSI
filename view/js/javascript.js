function nif(dni) {
  var numero
  var letr
  var letra
  var expresion_regular_dni
 
  expresion_regular_dni = /^\d{8}[a-zA-Z]$/;
 // onsubmit={ condition ? method_a : method_b }> ESTO DE AQUI

  if(expresion_regular_dni.test (dni) == true){
     numero = dni.substr(0,dni.length-1);
     letr = dni.substr(dni.length-1,1);
     numero = numero % 23;
     letra='TRWAGMYFPDXBNJZSQVHLCKET';
     letra=letra.substring(numero,numero+1);
    if (letra!=letr.toUpperCase()) {
       return false;
       
     }else{
        // document.getElementById("capadni").innerHTML = 'meh';  // Agrego nueva linea antes
        return true;

     }
  }else{
        // document.getElementById("capadni").innerHTML = "<br>" + "Hola don pepito"; // Agrego nueva linea antes
        return false;

   }
}

function Verificar(){

    //Verificar.prototype.verifica_nom = function(){
    this.verifica_nom = function(){
        var compro_nombre= document.getElementById("nombre").value;
        if(compro_nombre==''){
            document.getElementById("capa1").innerHTML = "Inserte nombre";
            return false;    
    
        }
        else{
            document.getElementById("capa1").innerHTML = " ";
            return true;
        }
    }

    
    this.verifica2 = function(){
        document.getElementById("capadni").innerHTML = "<br>" + "Hola don pepito";
    
        var compro_dni = nif(document.getElementById("dni").value);
    
        if (compro_dni == true) {
            document.getElementById("capadni").innerHTML = "";  // Agrego nueva linea antes
            return true;
        }
        else {
            document.getElementById("capadni").innerHTML = "Inserte DNI correctamente";
            return false;
        }      
    }
}

/*Verificar.prototype.ver_nom = function(){
    this.verifica_nom();
}*/


var CV = creaVerificar();
function creaVerificar() {
    return new Verificar();
}





/*function Verifica_nom(){
    var compro_nombre= document.getElementById("nombre").value;
    if(compro_nombre==''){
        document.getElementById("capa1").innerHTML = "Inserte nombre";
        return false;    

    }
    else{
        document.getElementById("capa1").innerHTML = " ";
        return true;
    }
}*/ 
function Verifica_ap(){
    var compro_apellido= document.getElementById("apellido").value;
    if(compro_apellido==''){
       document.getElementById("capa2").innerHTML = "Inserte apellido";
       return false;    

    }
    else{
        document.getElementById("capa2").innerHTML = " ";
        return true;    
    }
}
 function Verifica_usu(){
    var compro_usuario= document.getElementById("nombre_usuario").value;
    if(compro_usuario==''){
       document.getElementById("capa3").innerHTML = "Inserte usuario";
       return false;    
    }
    else{
        document.getElementById("capa3").innerHTML = " ";
        return true;    
    }
}

 function Verifica_email(){
    var compro_email= document.getElementById("email").value;
    if(compro_email==''){
       document.getElementById("capa4").innerHTML = "Inserte email";
       return false;    
    }
    else{
        document.getElementById("capa4").innerHTML = " ";
        return true;    
    }
}
 function Verifica_pass(){
    var compro_password= document.getElementById("password").value;
    if(compro_password==''){
       document.getElementById("capa5").innerHTML = "Inserte password";
       return false;    
    }
    else{
        document.getElementById("capa5").innerHTML = " ";
        return true;    
    }
}

$(document).ready(function(){
  $('.parallax').parallax();
});

$(document).ready(function(){
  $('.carousel').carousel();
});

// Next slide
$('.carousel').carousel('next');

// Previous slide
$('.carousel').carousel('prev');

  $('.carousel.carousel-slider').carousel({fullWidth: true, indicators: true});

autoplay()   
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 4500);
}

$(document).ready(function(){
  // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
  $('.modal').modal();

  $('#modal1').modal('open');

  $('#modal1').modal('close');
});

