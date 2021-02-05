@extends('index')
@section('contenido')
<br><br>
    
        <form method="post" class="formulario-Editar-productos" action=" {{route('productos.update',$productos->id)}} ">
            @method('PUT')
            {{ @csrf_field() }}
            <div class="col">
            <div class="card card-body text-center">
                <div class="card-title text-center tarjeta3">
                    <br>
                    <h2>Editar Productos</h2>
                </div>
        <br>
        <div class="form-row">
            <div class="col">
                <label for="profesores_codigo">Código Del Profesor</label>
                <input type="text" class="form-control text-center @error('profesores_codigo') is-invalid
                @enderror" name="profesores_codigo" id="profesores_codigo" value=" {{$productos->profesores_codigo}} "
                    placeholder="Código Del Profesor">
                    @error('profesores_codigo')
                    <div class="alert-danger">{!!$errors->first('profesores_codigo')!!}</div>
                   @enderror
            </div>
           
            <div class="col">
                <label for="Fecha">Fecha</label>
                <input type="date" class="form-control text-center @error('fecha') is-invalid
                @enderror" name="fecha" id="fecha" value="{{$productos->fecha}}" placeholder="Fecha">
                @error('fecha')
                    <div class="alert-danger">{!!$errors->first('fecha')!!}</div>
                @enderror
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col">
                <label for="descripcion">Descripción</label>
                
                
                <textarea class="form-control text-center @error('descripcion_productos') is-invalid @enderror" 
                 name="descripcion_productos" id="descripcion_productos"  placeholder="Descripción Del Producto" 
                >{{$productos->descripcion_productos}}</textarea>
                @error('descripcion_productos')
                    <div class="alert-danger">{!!$errors->first('descripcion_productos')!!}</div>
                @enderror
            </div>
        </div>
        <br>
        <div class="modal-footer btn-group " role="group">
   
            <a href="{{route("productos.index")}}" type="button" class="btn btn-danger btn-default">regresar</a>  
            <button type="submit" id="" class="btn btn-success btn-default"> <i class="fa fa-floppy-o" aria-hidden="true"></i> 
          </div>
        </div>
    </div>
        </form>
        
    

@endsection

@section('js')
<script>
    $('.formulario-Editar-productos').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Editar Producto?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Editar!'
        }).then((result) => {
        if (result.isConfirmed) {
            this.submit();   
        }
        })  
    })
</script>
@endsection

@section('info')
    <p class=" text-justify ">
        Productos académicos relevantes en los últimos cinco (5) años, relacionados con el PE.
        <br> <br>

        descripción: <br>
        Ingresa la descripción de los productos académicos realizados, iniciando de la fecha más reciente a la más antigua.

    </p>
@endsection

