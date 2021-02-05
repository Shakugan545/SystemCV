var profesores_codigo = document.getElementById("profesores_codigo").value;
var descripcion = document.getElementById("descripcion").value;


function crear(){
    
    console.log('error');

    if(profesores_codigo == "" ){
        
        //document.getElementById("profesores_codigo").value = "";
        document.getElementById("profesores_codigo").style.borderColor  = "red";
        
    }
    else{
        
        document.getElementById("profesores_codigo").style.borderColor = '#1F9713';
    }

     if(descripcion == ""){

       
        document.getElementById("descripcion").style.borderColor  = "red";
        return false;
    }
    else{
        
        document.getElementById("descripcion").style.borderColor = '#1F9713';
    }    
    
      
    
   return true;
}