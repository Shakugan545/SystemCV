/*jshint esversion: 6 */
$(document).ready(function(){

$('.btn-del').on('click', function(e){
    e.preventDefault();
    

    Swal.fire({
    title : 'Estas seguro de borrar este profesor?',
    text : 'No podras recuperarlo',
    type : 'warning',
    showCancelButton : true,    //por que el scrip tiene que estar abajo para que funcione 
    confirmButtonColor : '#3085d6',
    cancelButtonColor : '#d33',
    confirmButtonText : 'Borrar',
    }).then((result)=>{
        if (result.value) {
            this.submit();
               /* Swal.fire(
                    'Borrar',
                    'El Libro esta borrado',
                    'success',
                    )*/
        } 
    });
});

});