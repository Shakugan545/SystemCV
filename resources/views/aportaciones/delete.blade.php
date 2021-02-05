<form action="{{route('aportaciones.destroy',$aport->id)}}" class="formulario-eliminar-aportaciones"  method="post">
    @method('DELETE')
    {{ @csrf_field() }}
    
    <button type="submit" class="btn btn-danger "  ><i class="fa fa-trash" aria-hidden="true"></i></button>
</form>