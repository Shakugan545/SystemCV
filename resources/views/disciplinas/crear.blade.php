@extends('index')
@section('contenido')
<br><br>

    <form method="post" class="formulario-Guardar-disciplinas" action=" {{route('disciplinas.store')}} ">
        {{ @csrf_field() }}
        <div class="col">
        <div class="card card-body text-center ">
            <div class="card-title text-center tarjeta3">
                <br>
                <h2>Registrar Disciplinas</h2>
            </div>
        
        <br>
        <div class="form-row">

            <div class="col">
                <label for="profesores_codigo">Código Del Profesor</label>
                <input type="text" name="profesores_codigo" id="profesores_codigo" value="{{old('profesores_codigo')}}"  class="form-control @error('profesores_codigo') is-invalid
                @enderror " placeholder="Código Del Profesor">
                 @error('profesores_codigo')
                    <div class="alert-danger">{!!$errors->first('profesores_codigo')!!}</div>
                 @enderror
            </div>
            <div class="col">
                <label for="institucion">Institución</label>
                <input type="text" name="institucion" id="institucion" value="{{old('institucion')}}" class="form-control @error('institucion') is-invalid
                @enderror " placeholder="Nombre de la institución">
                 @error('institucion')
                    <div class="alert-danger">{!!$errors->first('institucion')!!}</div>
                @enderror
            </div>
           

        </div>
        <br>
        <div class="form-row">
            <div class="col">
                <label for="actividad">Actividades</label>
                <input type="text" name="actividad" id="actividad" value="{{old('actividad')}}" class="form-control @error('actividad') is-invalid
                @enderror " placeholder="cursos, diplomados o módulos de capacitación">
                 @error('actividad')
                    <div class="alert-danger">{!!$errors->first('actividad')!!}</div>
                @enderror
            </div>
            <div class="col">
                <label for="horas">Horas</label>
                <input type="text" name="horas" id="horas" value="{{old('horas')}}" class="form-control @error('horas') is-invalid
                @enderror " placeholder="Horas">
                 @error('horas')
                    <div class="alert-danger">{!!$errors->first('horas')!!}</div>
                @enderror
            </div>

        </div>
        <br>
        <div class="form-row">
           
            <div class="col">
                <label for="ano">Año</label>
                <input type="text" name="ano" id="ano" value="{{old('ano')}}" class="form-control @error('ano') is-invalid
                @enderror " placeholder="año">
                 @error('ano')
                    <div class="alert-danger">{!!$errors->first('ano')!!}</div>
                 @enderror
            </div>
            <div class="col">
                <label for="pais">Pais</label>
                <input type="text" name="pais" id="pais" value="{{old('pais')}}" class="form-control @error('pais') is-invalid
                @enderror " placeholder="Pais">
                 @error('pais')
                    <div class="alert-danger">{!!$errors->first('pais')!!}</div>
                @enderror
            </div>
        </div>
        <br>
        <div class="modal-footer btn-group " role="group">
   
            <a href="{{route("disciplinas.index")}}" type="button" class="btn btn-danger btn-default">regresar</a>  
            <button type="submit" id="" class="btn btn-success btn-default"> <i class="fa fa-floppy-o" aria-hidden="true"></i> 
          </div>
        </div>
    </div>
    </form>


    
@endsection

@section('js')
<script>
    $('.formulario-Guardar-disciplinas').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Guardar Disciplinas?',
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
        Institución: <br>
        Nombre de la Institución o Lugar donde se tomó la Disciplina
    </p>
    <br>
    <p class=" text-justify ">Actividades: <br> 
        Ingrese el nombre de los cursos, diplomados o módulos de capacitación en su disciplina realizados en los últimos cinco años. 
    </p>
   
  

@endsection