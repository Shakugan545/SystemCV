function validarProfesores(){

    var codigo = document.getElementById("codigo").value;
   
    

    if (codigo == "" ) {
        $("#mensaje1").fadeIn();
        $("#codigo").focus();
        document.getElementById("codigo").value = "";
        document.getElementById("codigo").style.borderColor  = "red";
        return false;
    }
    else{
       $("#mensaje1").fadeOut();
       document.getElementById("codigo").style.borderColor = '#1F9713';
   }



}

/*
if (nombre == null || nombre.length == 0 || !/^[a-zA-Z- \u00c0-\u024f]*$/i.test(nombre)) {
		
    document.getElementById("profeEditNombre").focus();
    document.getElementById("profeEditNombre").value = "";
    document.getElementById("profeEditNombre").style.borderColor = '#EA2027';
    document.getElementById("profeEditNombre").style.color = '#ff4d4d';
    Swal.fire({
        //width: se le puede poner anchura, 
        //position: 'top-end' tambien se puede poner la posicion donde lo quiera
        //timer:3000, tiempo en lo que tarda en desaparecer el mensaje 
        //allowEscapeKey:true,
        confirmButtonColor: '#4b6584', // cambia el color del boton 
        type:'warning',
        title:'Debes ingresar el nombre',
        allowEscapeKey: false,       
           allowEnterKey: false, 	//Impide que el usuario quite la alerta mediante, ESQ, ENTER Y MOUSE clic
           allowOutsideClick: false,   
    });
    return false;
}*/