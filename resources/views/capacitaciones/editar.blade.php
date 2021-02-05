@extends('index')
@section('contenido')

<br><br>
    
<form method="post" class="formulario-Editar-capacitaciones" action=" {{route('capacitaciones.update',$capacitaciones->id)}} ">
    @method('PUT')
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
                                <input type="text" name="profesores_codigo" id="profesores_codigo" value=" {{$capacitaciones->profesores_codigo}} " class="form-control @error('profesores_codigo') 
                                @enderror" placeholder="Profesor Codigo">
                                @error('profesores_codigo')
                                <div class="alert-danger">{!!$errors->first('profesores_codigo')!!}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="codigo">Tipo de capacitación</label>
                                <input type="text" name="tipo_capacitacion" id="tipo_capacitacion" value=" {{$capacitaciones->tipo_capacitacion}} " class="form-control @error('tipo_capacitacion') 
                                @enderror " placeholder="Tipo de capacitación">
                                 @error('tipo_capacitacion')
                                <div class="alert-danger">{!!$errors->first('tipo_capacitacion')!!}</div>
                                @enderror
                            </div>
                            
                           
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="codigo">Institución</label>
                                <input type="text" name="institucion_C" id="institucion_C" value=" {{$capacitaciones->institucion_C}} " class="form-control @error('institucion_C') 
                                @enderror " placeholder="Institucion">
                                 @error('institucion_C')
                                <div class="alert-danger">{!!$errors->first('institucion_C')!!}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="codigo">Horas</label>
                                <input type="text" name="horas" id="horas" value=" {{$capacitaciones->horas}} " class="form-control @error('horas') 
                                @enderror " placeholder="Horas">
                                 @error('horas')
                                <div class="alert-danger">{!!$errors->first('horas')!!}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                           
                            <div class="col">
                                <label for="codigo">Año de obtención</label>
                                <input type="text" name="ano_obtenido_capacitacion" id="pais_capacitacion" value=" {{$capacitaciones->ano_obtenido_capacitacion}} " class="form-control @error('ano_obtenido_capacitacion') 
                                @enderror " placeholder="Año de obtención">
                                 @error('ano_obtenido_capacitacion')
                                <div class="alert-danger">{!!$errors->first('ano_obtenido_capacitacion')!!}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="codigo">Pais</label>
                                <input type="text" name="pais_capacitacion" id="pais_capacitacion" value=" {{$capacitaciones->pais_capacitacion}} " class="form-control @error('pais_capacitacion') 
                                @enderror " placeholder="Pais">
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
    $('.formulario-Editar-capacitaciones').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Editar Capacitación?',
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
   <p class=" text-justify ">Nombre del Curso: <br> 
    Ingrese el nombre de los cursos, diplomados o módulos de capacitación o actualización docente realizados en los últimos cinco años
   </p>
   <br>
   <p class=" text-justify ">
       Institución: <br>
       Nombre de la Institución o Lugar donde se tomó la capacitación
   </p>

@endsection

