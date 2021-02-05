<form action="{{route('logrosnoacademicos.destroy',$noacad->id)}}" class="formulario-eliminar-logros-noacademicos" method="post">
    @method('DELETE')
    {{ @csrf_field() }}
    
    <button type="submit" class="btn btn-danger "  ><i class="fa fa-trash" aria-hidden="true"></i></button>
</form>