@extends('index')
@section('contenido')

<br> <br>
    
<form method="post" class="formulario-Guardar-capacitaciones" action=" {{route('capacitaciones.store')}} ">
            {{ @csrf_field() }}
            <div class="col">
            <div class="card card-body text-center ">
                <div class="card-title text-center tarjeta3">
                    <br>
                        <h2>Capacitaciones</h2>
                </div>
                <br>
                        
                        <div class="form-row">

                            <div class="col">
                                <label for="codigo">Código Del Profesor</label>
                                <input type="text" name="profesores_codigo" id="profesores_codigo" value="{{old('profesores_codigo')}}" class="form-control @error('profesores_codigo') is-invalid
                                @enderror" placeholder="Código Del Profesor">
                                @error('profesores_codigo')
                                <div class="alert-danger">{!!$errors->first('profesores_codigo')!!}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="capacitacion">Nombre del curso</label>
                                <input type="text" name="tipo_capacitacion" id="tipo_capacitacion" value="{{old('tipo_capacitacion')}}" class="form-control @error('tipo_capacitacion') is-invalid
                                @enderror " placeholder="cursos, diplomados o módulos de capacitación">
                                @error('tipo_capacitacion')
                                <div class="alert-danger">{!!$errors->first('tipo_capacitacion')!!}</div>
                                @enderror
                            </div>
                           
                           
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="Institución">Institución</label>
                                <input type="text" name="institucion_C" id="institucion_C" value="{{old('institucion_C')}}" class="form-control @error('institucion_C') is-invalid
                                @enderror" placeholder="Institución">
                                @error('institucion_C')
                                <div class="alert-danger">{!!$errors->first('institucion_C')!!}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="Horas">Horas</label>
                                <input type="text" name="horas" id="horas" value="{{old('horas')}}" class="form-control @error('horas') is-invalid
                                @enderror" placeholder="Horas">
                                @error('horas')
                                <div class="alert-danger">{!!$errors->first('horas')!!}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                           
                            <div class="col">
                                <label for="ano">Año de obtención</label>
                                <input type="text" name="ano_obtenido_capacitacion"   id="ano_obtenido_capacitacion" value="{{old('ano_obtenido_capacitacion')}}" class="form-control @error('ano_obtenido_capacitacion') is-invalid
                                @enderror" placeholder="Año de obtención">
                                @error('ano_obtenido_capacitacion')
                                <div class="alert-danger">{!!$errors->first('ano_obtenido_capacitacion')!!}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="Pais">Pais</label>
                                <input type="text" name="pais_capacitacion" id="pais_capacitacion" value="{{old('pais_capacitacion')}}" class="form-control @error('pais_capacitacion') is-invalid
                                @enderror" placeholder="Pais">
                                @error('pais_capacitacion')
                                <div class="alert-danger">{!!$errors->first('pais_capacitacion')!!}</div>
                                @enderror
                            </div>
                        </div>
                    <br>

                        <div class="modal-footer btn-group " role="group">
   
                            <a href="{{route("capacitaciones.index")}}" type="button" class="btn btn-danger btn-default">regresar</a>  
                            <button type="submit" id="" class="btn btn-success btn-default"> <i class="fa fa-floppy-o" aria-hidden="true"></i> 
                          </div>
            
                        </div>
                    </div>
        </form>



@endsection

@section('js')
<script>
    $('.formulario-Guardar-capacitaciones').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Guardar Capacitación?',
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
   <p class=" text-justify ">Nombre del Curso: <br> 
    Ingrese el nombre de los cursos, diplomados o módulos de capacitación o actualización docente realizados en los últimos cinco años
   </p>
   <br>
   <p class=" text-justify ">
       Institución: <br>
       Nombre de la Institución o Lugar donde se tomó la capacitación
   </p>

@endsection