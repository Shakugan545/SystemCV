@extends('index')
@section('contenido')
<br><br>

<form method="post" id="form" class="formulario-Guardar-Aportaciones" action=" {{route('aportaciones.store')}}" >
    {{ @csrf_field() }} 
    
        <div class="col">
            <div class="card card-body text-center">
                <div  class="card-title text-center tarjeta3">
                    <br>
                            <h2> Registrar Aportaciones</h2>
                </div>
                    <br>
                <div class="form-row">
                    <div class="col ">
                        <label for="Codigo">Código del Profesor</label>
                        <input type="" value="{{old('profesores_codigo')}}"  class="form-control text-center @error('profesores_codigo') is-invalid @enderror" 
                         name="profesores_codigo" id="profesores_codigo" placeholder="Código del Profesor">
                        @error('profesores_codigo')
                    <div class="alert-danger text-center">{!!$errors->first('profesores_codigo')!!}</div>
                    @enderror
                    </div>
                </div>
                <br>
                
                <div class="form-row">
                    <div class="col">
                        <label for="Aportaciones">Aportaciones</label>
                        <textarea   class="form-control text-center @error('aportaciones') is-invalid @enderror" 
                        name="aportaciones" id="aportaciones" placeholder="Aportaciones">{{old('aportaciones')}}</textarea>
                            @error('aportaciones')
                            <div class="alert-danger text-center">{!!$errors->first('aportaciones')!!}</div>
                            @enderror
                    </div>
                </div>
                <br>
                <div class="modal-footer btn-group " role="group">
   
                    <a href="{{route("aportaciones.index")}}" type="button" class="btn btn-danger btn-default">regresar</a>  
                    <button type="submit" id="enviar"  class="btn btn-success btn-default"> <i class="fa fa-floppy-o" aria-hidden="true"></i> 
                </div>

            </div>
        </div>
      

      
</form>
@endsection

@section('js')
<script>
    $('.formulario-Guardar-Aportaciones').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Guardar Aportaciones?',
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
        Describir, en máximo 200 palabras, la participación del profesor en actividades relevantes del PE,
        tales como: diseño el PE, diseño de asignatura(s) del PE, análisis de indicadores del PE,
        participación en cuerpos colegiados del PE, participación en grupos de mejora continua del PE,
        en actividades extracurriculares relacionadas con el PE, etc. 
    </p>
@endsection