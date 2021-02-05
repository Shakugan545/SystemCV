<form action="{{route('gestion.destroy',$gest->id)}}" class="formulario-eliminar-gestion-academica" method="post">
    @method('DELETE')
    {{ @csrf_field() }}
    
    
    <button type="submit" class="btn btn-danger"  ><i class="fa fa-trash" aria-hidden="true"></i></button>
</form>