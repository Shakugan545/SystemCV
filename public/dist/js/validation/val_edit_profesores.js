
//editar 
$(document).ready(function(){
	$("#editarProfesores").click(function(){
         
          var nombre = $('#profeEditNombre').val();
          var ap = $('#profesEditap').val();
          var am = $('#profeEditam').val();
          var fecha_nacimiento = $('#profesoresfecha_nacimiento').val();
          var edad = $('#profeEditEdad').val();
          var puesto = $('#profeEditPuesto').val();
          var antiguedad = $('#profeEditantigueda').val();
          

		 if (nombre == "" ) {
		 	$("#mensajeEdit1").fadeIn();
		 	$("#profeEditNombre").focus();
		 	document.getElementById("profeEditNombre").value = "";
		 	document.getElementById("profeEditNombre").style.borderColor  = "red";
		 	return false;
         }
         else{
            $("#mensajeEdit1").fadeOut();
            document.getElementById("profeEditNombre").style.borderColor = '#1F9713';
        }
        if (ap == "" ) {
            $("#mensajeEdit2").fadeIn();
            $("#profesEditap").focus();
            document.getElementById("profesEditap").value = "";
            document.getElementById("profesEditap").style.borderColor  = "red";
            return false;
        }
        else{
           $("#mensajeEdit2").fadeOut();
           document.getElementById("profesEditap").style.borderColor = '#1F9713';
       }
       if (am == "" ) {
            $("#mensajeEdit3").fadeIn();
            $("#profeEditam").focus();
            document.getElementById("profeEditam").value = "";
            document.getElementById("profeEditam").style.borderColor  = "red";
            return false;
        }
        else{
           $("#mensajeEdit3").fadeOut();
           document.getElementById("profeEditam").style.borderColor = '#1F9713';
       }

       if (fecha_nacimiento == "" ) {
        $("#mensajeEdit4").fadeIn();
        $("#profesoresfecha_nacimiento").focus();
        document.getElementById("profesoresfecha_nacimiento").value = "";
        document.getElementById("profesoresfecha_nacimiento").style.borderColor  = "red";
        return false;
        }
        else{
       $("#mensajeEdit4").fadeOut();
       document.getElementById("profesoresfecha_nacimiento").style.borderColor = '#1F9713';
            }

        if (edad == "" ) {
            $("#mensajeEdit5").fadeIn();
            $("#profeEditEdad").focus();
            document.getElementById("profeEditEdad").value = "";
            document.getElementById("profeEditEdad").style.borderColor  = "red";
            return false;
            }
             else{
            $("#mensajeEdit5").fadeOut();
            document.getElementById("profeEditEdad").style.borderColor = '#1F9713';
                 }

        if (puesto == "" ) {
             $("#mensajeEdit6").fadeIn();
             $("#profeEditPuesto").focus();
             document.getElementById("profeEditPuesto").value = "";
             document.getElementById("profeEditPuesto").style.borderColor  = "red";
             return false;
                }
            else{
            $("#mensajeEdit6").fadeOut();
            document.getElementById("profeEditPuesto").style.borderColor = '#1F9713';
             }
         if (antiguedad == "" ) {
            $("#mensajeEdit7").fadeIn();
            $("#profeEditantigueda").focus();
            document.getElementById("profeEditantigueda").value = "";
            document.getElementById("profeEditantigueda").style.borderColor  = "red";
            return false;
               }
           else{
           $("#mensajeEdit7").fadeOut();
           document.getElementById("profeEditantigueda").style.borderColor = '#1F9713';
           }
        
       
    });
    
});

