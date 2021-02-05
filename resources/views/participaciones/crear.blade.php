@extends('index')
@section('contenido')
    <br><br>
    <form method="post" class="formulario-Guardar-participaciones" action=" {{route('participaciones.store')}} ">
    {{ @csrf_field() }} 
    <div class="col">
        <div class="card card-body text-center ">
            <div class="card-title text-center tarjeta3">
                <br>
                <h2>Registrar Participaciones</h2>
            </div>
            
            <br>
            <div class="form-row">
                <div class="col">
                    <label for="codigo">Código del Profesor</label>
                    <input type="text" class="form-control @error('profesores_codigo') is-invalid
                        @enderror" name="profesores_codigo" id="profesores_codigo" value="{{old('profesores_codigo')}}" placeholder="Código del Profesor">
                        @error('profesores_codigo')
                            <div class="alert-danger">{!!$errors->first('profesores_codigo')!!}</div>
                         @enderror
                </div>
                <div class="col">
                    <label for="organismo">Nombre</label>
                    <input type="text" class="form-control @error('organismo') is-invalid
                        @enderror" name="organismo" id="organismo" value="{{old('organismo')}}" placeholder="Nombre del organismo o institución">
                        @error('organismo')
                            <div class="alert-danger">{!!$errors->first('organismo')!!}</div>
                         @enderror
                </div>
                
               
            </div>
            <br>
            <div class="form-row">

                <div class="col">
                    <label for="Membresia">Años de Membresia</label>
                    <input type="text" class="form-control @error('tiempo_membresia') is-invalid
                        @enderror" name="tiempo_membresia" id="tiempo_membresia" value="{{old('tiempo_membresia')}}" placeholder="Tiempo de Membresia">
                        @error('tiempo_membresia')
                            <div class="alert-danger">{!!$errors->first('tiempo_membresia')!!}</div>
                         @enderror
                </div>
               
                <div class="col">
                    <label for="lvl_participacion">Participación</label>
                    <input type="text" class="form-control @error('lvl_participacion') is-invalid
                        @enderror" name="lvl_participacion" id="lvl_participacion" value="{{old('lvl_participacion')}}" placeholder="Nivel de Participación">
                        @error('lvl_participacion')
                            <div class="alert-danger">{!!$errors->first('lvl_participacion')!!}</div>
                         @enderror
                </div>
               
            </div>
            <br>
            <div class="modal-footer btn-group " role="group">
   
                <a href="{{route("participaciones.index")}}" type="button" class="btn btn-danger btn-default">regresar</a>  
                <button type="submit" id="" class="btn btn-success btn-default"> <i class="fa fa-floppy-o" aria-hidden="true"></i> 
            </div>
        </div>
        
    </div>
    

</form>


@endsection

@section('js')
<script>
    $('.formulario-Guardar-participaciones').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Guardar La Participación?',
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
        Membresía: <br>
        Membresía vigente en colegios, cámaras, asociaciones científicas o 
        algún otro tipo de organismo profesional. <br><br>

        Nivel de Participación: <br>
        miembro, socio, directivo, integrante o coordinador de algún equipo o comisión, etc.
    </p>
@endsection