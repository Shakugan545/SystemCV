<form action="{{route('premios.destroy',$premi->id)}}" class="formulario-eliminar-premio" method="post">
    @method('DELETE')
    {{ @csrf_field() }}
    
    <button type="submit" class="btn btn-danger"  ><i class="fa fa-trash" aria-hidden="true"></i></button>
</form>