@extends('index')
@section('contenido')
<br>
<br>

<form  method="post" class="formulario-Editar-profesores" action="{{route('profesores.update',$profesores->codigo)}}"  >
  @method('PUT')
{{ @csrf_field() }}

  <div class="col">
      <div class="card card-body text-center">
        <div class="card-title text-center tarjeta3" >
          <br>
          <h2>Editar Docente</h2>
        </div>
        <br>
        <br>
          <div class="form-row">

            <div class="col">
              <label for="codigo">codigo</label>
            <input type="text"  value="{{$profesores->codigo}}" name="codigo" id="codigo1" class="form-control @error('codigo') is-invalid @enderror "   placeholder="codigo">
            @error('codigo')
            <div class="alert-danger">{!!$errors->first('codigo')!!}</div>
            @enderror
            </div>
              <div class="col">
                <label for="nombres">nombres</label>
              <input type="text" value="{{$profesores->nombre}}" name="nombre" id="profeEditNombre" class="form-control @error('nombre') is-invalid @enderror  " placeholder="Nombre">
               @error('nombre')
                     <div class="alert-danger">{!!$errors->first('nombre')!!}</div>
                     @enderror

            </div>
             
          </div>
          <br>
          <div class="form-row">
              
            <div class="col">
              <label for="ap">Apellido Paterno</label>
                <input type="text" value="{{$profesores->ap}}" name="ap" id="profesEditap" class="form-control @error('ap') is-invalid @enderror" placeholder="Apellido parterno">
                 @error('ap')
                     <div class="alert-danger">{!!$errors->first('ap')!!}</div>
                   @enderror
            </div>
            <div class="col">
              <label for="am">Apellido Materno</label>
                <input type="text" value="{{$profesores->am}}" name="am" id="profeEditam" class="form-control @error('am') is-invalid @enderror" placeholder="Apellido Materno">
                 @error('am')
                     <div class="alert-danger">{!!$errors->first('am')!!}</div>
                     @enderror
            </div>
          </div>
          <br>
          <div class="form-row">
              <div class="col">
                <Label for="fecha_nacimiento">Fecha de nacimiento</Label>
                  <input type="date" value="{{$profesores->fecha_nacimiento}}" name="fecha_nacimiento" id="profesoresfecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror" placeholder="Fecha de nacimiento">
                   @error('fecha_nacimiento')
                     <div class="alert-danger">{!!$errors->first('fecha_nacimiento')!!}</div>
                     @enderror
              </div>
              <div class="col">
                <Label for="edad">Edad</Label>
                  <input type="text" value="{{$profesores->edad}}" name="edad" id="profeEditEdad" class="form-control @error('edad') is-invalid @enderror" placeholder="Edad">
                   @error('edad')
                     <div class="alert-danger">{!!$errors->first('edad')!!}</div>
                     @enderror
              </div>
          </div>
          <br>
          <div class="form-row">
              <div class="col">
                <Label for="puesto">Puesto Actual</Label>
                  <input type="text" value="{{$profesores->puesto}}" name="puesto" id="profeEditPuesto " class="form-control @error('puesto') is-invalid @enderror" placeholder="Puesto Actual">
                   @error('puesto')
                     <div class="alert-danger">{!!$errors->first('puesto')!!}</div>
                     @enderror
              </div>
              <div class="col">
                <label for="antiguedad">Antigüedad</label>
                  <input type="text" value="{{$profesores->antiguedad}}" name="antiguedad" id="profeEditantigueda" class="form-control @error('antiguedad') is-invalid @enderror" placeholder="Antigüedad">
                   @error('antiguedad')
                     <div class="alert-danger">{!!$errors->first('antiguedad')!!}</div>
                     @enderror
              </div>
          </div>
          <br>
          <div class="modal-footer btn-group " role="group">

  
            <a href="{{route("profesores.index")}}" type="button" class="btn btn-danger btn-default">regresar</a>  
          <button type="submit" id="editarProfesores" class="btn btn-success btn-default"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
          </div>
      </div>
  



</div>
</form>

  @endsection

  @section('js')
<script>
    $('.formulario-Editar-profesores').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Editar Profesor?',
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
@endsection