

$(document).ready(function(){
    
	$("#enviarProfesores").click(function(){
        var codigo = $('#codigo').val();
          var nombre = $('#nombre').val();
          var ap = $('#ap').val();
          var am = $('#am').val();
          var fecha_nacimiento = $('#fecha_nacimiento').val();
          var edad = $('#edad').val();
          var puesto = $('#puesto').val();
          var antiguedad = $('#antiguedad').val();
		
		if (codigo == "")
		 {
		 	$("#mensaje1").fadeIn();
		 	$("#codigo").focus();
             
		 	document.getElementById("codigo").value = "";
             document.getElementById("codigo").style.borderColor  = "red";
             
             
		 	return false;
		 }else{
		 	$("#mensaje1").fadeOut();
		 	document.getElementById("codigo").style.borderColor = '#1F9713';
		 }

		 if (nombre == "" ) {
		 	$("#mensaje2").fadeIn();
		 	$("#nombre").focus();
		 	document.getElementById("nombre").value = "";
		 	document.getElementById("nombre").style.borderColor  = "red";
		 	return false;
         }
         else{
            $("#mensaje2").fadeOut();
            document.getElementById("nombre").style.borderColor = '#1F9713';
        }
        if (ap == "" ) {
            $("#mensaje3").fadeIn();
            $("#ap").focus();
            document.getElementById("ap").value = "";
            document.getElementById("ap").style.borderColor  = "red";
            return false;
        }
        else{
           $("#mensaje3").fadeOut();
           document.getElementById("ap").style.borderColor = '#1F9713';
       }
       if (am == "" ) {
            $("#mensaje4").fadeIn();
            $("#am").focus();
            document.getElementById("am").value = "";
            document.getElementById("am").style.borderColor  = "red";
            return false;
        }
        else{
           $("#mensaje4").fadeOut();
           document.getElementById("am").style.borderColor = '#1F9713';
       }

       if (fecha_nacimiento == "" ) {
        $("#mensaje5").fadeIn();
        $("#fecha_nacimiento").focus();
        document.getElementById("fecha_nacimiento").value = "";
        document.getElementById("fecha_nacimiento").style.borderColor  = "red";
        return false;
        }
        else{
       $("#mensaje5").fadeOut();
       document.getElementById("fecha_nacimiento").style.borderColor = '#1F9713';
            }

        if (edad == "" ) {
            $("#mensaje6").fadeIn();
            $("#edad").focus();
            document.getElementById("edad").value = "";
            document.getElementById("edad").style.borderColor  = "red";
            return false;
            }
             else{
            $("#mensaje6").fadeOut();
            document.getElementById("edad").style.borderColor = '#1F9713';
                 }

        if (puesto == "" ) {
             $("#mensaje7").fadeIn();
             $("#puesto").focus();
             document.getElementById("puesto").value = "";
             document.getElementById("puesto").style.borderColor  = "red";
             return false;
                }
            else{
            $("#mensaje7").fadeOut();
            document.getElementById("puesto").style.borderColor = '#1F9713';
             }
         if (antiguedad == "" ) {
            $("#mensaje8").fadeIn();
            $("#antiguedad").focus();
            document.getElementById("antiguedad").value = "";
            document.getElementById("antiguedad").style.borderColor  = "red";
            return false;
               }
           else{
           $("#mensaje8").fadeOut();
           document.getElementById("antiguedad").style.borderColor = '#1F9713';
           }
        
       
    });
    
});

