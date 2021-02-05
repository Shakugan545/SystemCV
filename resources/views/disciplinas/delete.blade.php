<form action="{{route('disciplinas.destroy',$disc->id)}}" class="formulario-eliminar-disciplinas" method="post">
    @method('DELETE')
    {{ @csrf_field() }}
    
    
    <button type="submit" class="btn btn-danger"  ><i class="fa fa-trash" aria-hidden="true"></i></button>
</form>