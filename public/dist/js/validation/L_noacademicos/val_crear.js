

const form = document.getElementById('form');
const codigo = document.getElementById('profesores_codigo');
const descripcion = document.getElementById('descripcion');

form.addEventListener('submit', e => {
    e.preventDefault();
    checkInputs();
});

function checkInputs(){
    const codigoValue = codigo.value.trim();
    const descripcionValue = descripcion.value.trim();

    if(codigoValue === ''){
        console.log('holas');
        setErrorFor(codigoValue, 'El codigo es Obligatorio');
    }else{
        
    }
     
}


function setErrorFor(input){
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}