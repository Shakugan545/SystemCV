<form action="{{route('academica.destroy',$academi->id)}}" method="post">
    @method('DELETE')
    {{ @csrf_field() }}
    <input type="submit" class="btn btn-danger" value="eliminar">
</form>