<form action="{{route('academica.destroy',$academi->id)}}" class="formulario-eliminar-academicos" method="post">
    @method('DELETE')
    {{ @csrf_field() }}
    
    <button type="submit" class="btn btn-danger"  ><i class="fa fa-trash" aria-hidden="true"></i></button>
</form>