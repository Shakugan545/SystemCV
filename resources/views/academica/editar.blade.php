@extends('index')
@section('contenido')

<br>

<form method="post" class="formulario-Editar-academica" action="{{ route('academica.update', $academica->id) }}">
    @method('PUT')
    {{ @csrf_field() }}
    <div  class="col">
    <div class="card card-body text-center ">

        <div class="card-title text-center tarjeta3">
            <br>
            <h2>Editar Información Académica</h2>
        </div>
            <br>
                <div class="form-row">
                    <div class="col">
                        <label for="profesores_codigo">Código Del Profesor</label>
                        <input  type="text" value="{{ $academica->profesores_codigo }}"
                            name="profesores_codigo" id="profesores_codigo" class="form-control @error('profesores_codigo') is-invalid @enderror"
                            placeholder="Grados académicos">
                            @error('profesores_codigo')
                            <div class="alert-danger">{!!$errors->first('profesores_codigo')!!}</div>
                            @enderror
                    </div>
                    <div class="col">
                        
                        <label for="nombre_academica">Grados Académicos</label>
                        <input type="text" value="{{ $academica->nombre_academica }}"
                            name="nombre_academica" id="nombre_academica" class="form-control @error('nombre_academica') is-invalid @enderror"
                            placeholder="Grados académicos">
                            @error('nombre_academica')
                            <div class="alert-danger">{!!$errors->first('nombre_academica')!!}</div>
                            @enderror
                    </div>

                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="especialidad">Especialidad</label>
                        <input type="text" value="{{ $academica->especialidad }}" name="especialidad"
                            id="especialidad" class="form-control @error('especialidad') is-invalid @enderror" placeholder="Especialidad">
                            @error('especialidad')
                            <div class="alert-danger">{!!$errors->first('especialidad')!!}</div>
                            @enderror
                    </div>
                    <div class="col">
                        <label for="institucion">Institución</label>
                        <input type="text" value="{{ $academica->institucion_A }}" name="institucion_A"
                            id="institucion_A" class="form-control @error('institucion_A') is-invalid @enderror" placeholder="Institucion">
                            @error('institucion_A')
                            <div class="alert-danger">{!!$errors->first('institucion_A')!!}</div>
                            @enderror
                    </div>
                </div>
                <br>

                <div class="form-row">
                    <div class="col">
                        <label for="cedula">Cédula</label>
                        <input type="text" value="{{ $academica->cedula }}" name="cedula" id="cedula"
                            class="form-control @error('cedula') is-invalid @enderror" placeholder="Cedula">
                            @error('cedula')
                            <div class="alert-danger">{!!$errors->first('cedula')!!}</div>
                            @enderror
                    </div>
                    <div class="col">
                        <label for="ano_obtenido">Año de obtención</label>
                        <input type="text" value="{{ $academica->ano_obtenido }}" name="ano_obtenido"
                            id="ano_obtenido" class="form-control @error('ano_obtenido') is-invalid @enderror" placeholder="Año de obtención">
                            @error('ano_obtenido')
                            <div class="alert-danger">{!!$errors->first('ano_obtenido')!!}</div>
                            @enderror
                    </div>
                    <div class="col">
                        <label for="pais">Pais</label>
                        <input type="text" value="{{ $academica->pais }}" name="pais" id="pais"
                            class="form-control @error('pais') is-invalid @enderror" placeholder="Pais">
                            @error('pais')
                            <div class="alert-danger">{!!$errors->first('pais')!!}</div>
                            @enderror
                    </div>
                </div>
              
            
        
        <br>
    
    <div class="modal-footer btn-group " role="group">
        
        <a href="{{route("academica.index")}}" type="button" class="btn btn-danger btn-default">regresar</a> 
      <button type="submit" id="" class="btn btn-success btn-default"> <i class="fa fa-floppy-o" aria-hidden="true"></i> </button>
    </div>
</div>
</div>
</form>

@endsection


@section('js')
<script>
    $('.formulario-Editar-academica').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Editar Academica?',
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
   <p class=" text-justify ">Puesto actual del profesor: <br> 
    <ul>
      <li>Profesor</li>
      <li>Coordinación</li>
      <li>Apoyo</li>
      <li>Dirección</li>
      <li>Reponsable de Areas</li>
      <li>Responsable de Departamentos</li>
      <li>ETC........</li>
    </ul>
   </p>
   <br>
   <p class=" text-justify ">Antigüedad: <br> 
    <ul>
      <li>Años Trabajados de Docente</li>
    </ul>
   </p>
   <br>
   <p class=" text-justify ">Cédula: <br> 
    <ul>
        Si no cuenta con esta, señalar ND. Si está en trámite poner EP.
    </ul>
   </p>
@endsection