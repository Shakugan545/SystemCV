<form action="{{route('participaciones.destroy',$parti->id)}}" class="formulario-eliminar-participaciones" method="post">
    @method('DELETE')
    {{ @csrf_field() }}
    
    
    <button type="submit" class="btn btn-danger"  ><i class="fa fa-trash" aria-hidden="true"></i></button>
</form>