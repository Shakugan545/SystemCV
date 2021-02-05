function valProfe(){

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