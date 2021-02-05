@extends('index')
@section('contenido')
    <br><br>

    <form method="post" class="formulario-Guardar-ingenieril" action=" {{route('ingenieriles.store')}} ">
        {{ @csrf_field() }}
        
     <div class="col">
        <div class="card card-body text-center">
            <div class="card-title text-center tarjeta3">
                <br>
                        <h2> Registrar Ingenieriles</h2>
            </div>
            
                
                <br>
                    <div class="form-row">
                        <div class="col">
                            <label for="profesores_codigo">Código del Profesor</label>
                            <input type="text" class="form-control @error('profesores_codigo') is-invalid
                        @enderror" name="profesores_codigo"  id="profesores_codigo" value="{{old('profesores_codigo')}}" placeholder="Código del Profesor">
                        @error('profesores_codigo')
                            <div class="alert-danger">{!!$errors->first('profesores_codigo')!!}</div>
                         @enderror
                        </div>
                        <div class="col">
                            <label for="organismo">Nombre del Organismo</label>
                            <input type="text" class="form-control @error('organismo') is-invalid
                        @enderror" name="organismo"  id="organismo" value="{{old('organismo')}}" placeholder="Nombre del Organismo">
                        @error('organismo')
                            <div class="alert-danger">{!!$errors->first('organismo')!!}</div>
                         @enderror
                        </div>
                        
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="Experiencia">Nivel de Experiencia</label>
                                <input type="text" class="form-control @error('experiencia') is-invalid
                        @enderror" name="experiencia"  id="experiencia" value="{{old('experiencia')}}" placeholder="Nivel de Experiencia ">
                        @error('experiencia')
                            <div class="alert-danger">{!!$errors->first('experiencia')!!}</div>
                         @enderror
                            </div>
                            <div class="col">
                                <label for="años">Años</label>
                                <input type="text" class="form-control @error('anos') is-invalid
                        @enderror" name="anos"  id="anos" value="{{old('anos')}}" placeholder="Periodo de duración en años">
                        @error('anos')
                            <div class="alert-danger">{!!$errors->first('anos')!!}</div>
                         @enderror
                            </div>
                        </div>
                        <br>
                        <div class="modal-footer btn-group " role="group">
   
                            <a href="{{route("ingenieriles.index")}}" type="button" class="btn btn-danger btn-default">regresar</a>  
                            <button type="submit" id="" class="btn btn-success btn-default"> <i class="fa fa-floppy-o" aria-hidden="true"></i> 
                        </div>
            
                    </div>
         </div>
        
    </form>
@endsection


@section('js')
<script>
    $('.formulario-Guardar-ingenieril').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Guardar Ingenieril?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Guardar!'
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
     
     Se refiere a actividades de diseño de ingeniería desarrolladas,
     dentro o fuera de la institución, en las que se evidencia que se participó en actividades de diseño.
     <br>
     <br>
     Organimos: <br>
     Organismo o institución donde se realizó la actividad de diseño.
     <br>
     <br>
     Nivel de Experiencia:
     <br>
      (responsable, asistente, analista, auxiliar, etc.).
    </p>
@endsection