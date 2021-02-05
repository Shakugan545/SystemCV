$(document).ready(function(){
    $("$bEnviar").click(function(){
        var codigo = $("#profesores_codigo").val();
        var descripcion = $("#descripcion").val();

        if (codigo == "") {
            $("#mensaje1").fadeIn();
            return false;
        }
    });
});