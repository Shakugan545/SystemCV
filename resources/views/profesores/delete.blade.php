<form action="{{route('profesores.destroy',$profe->codigo)}}" class="formulario-eliminar" method="post">
    @method('DELETE')
    {{ @csrf_field() }}
    
    <button type="submit" class="btn btn-danger btn-del"  ><i class="fa fa-trash" aria-hidden="true"></i></button>
    
</form>