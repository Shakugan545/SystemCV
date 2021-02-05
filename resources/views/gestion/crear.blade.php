@extends('index')
@section('contenido')
<br><br>

    <form  method="post" class="formulario-Guardar-gestion" action=" {{route('gestion.store')}} ">
        {{ @csrf_field() }}
        <div class="col">
        <div class="card card-body text-center ">
            
            <div class="card-title text-center tarjeta3">
                <br>
                <h2>Gestión Académica</h2>
            </div>
        <br>
        <div class="form-row">
            <div class="col">
                <label for="profesores_codigo">Código del Profesor</label>
                <input type="text" name="profesores_codigo" id="profesores_codigo"  value="{{old('profesores_codigo')}}"  class="form-control @error('profesores_codigo') is-invalid
                @enderror" placeholder="Código del profesor">
                @error('profesores_codigo')
                    <div class="alert-danger">{!!$errors->first('profesores_codigo')!!}</div>
                @enderror
            </div>
            <div class="col">
                <label for="institucion">Institución</label>
                <input type="text" name="institucion" id="institucion"  value="{{old('institucion')}}"  class="form-control @error('institucion') is-invalid
                @enderror" placeholder="Nombre de la institución">
                @error('institucion')
                    <div class="alert-danger">{!!$errors->first('institucion')!!}</div>
                @enderror
            </div>
            <div class="col">
                <label for="puesto">Puesto</label>
                <input type="text" name="puesto" id="puesto"  value="{{old('puesto')}}"  class="form-control @error('puesto') is-invalid
                @enderror" placeholder="Puesto">
                @error('puesto')
                    <div class="alert-danger">{!!$errors->first('puesto')!!}</div>
                @enderror
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col">
                <label for="inicio">Inicio</label>
                <input type="date" name="inicio" id="inicio"  value="{{old('inicio')}}"  class="form-control @error('inicio') is-invalid
                @enderror" placeholder="Inicio">
                @error('inicio')
                    <div class="alert-danger">{!!$errors->first('inicio')!!}</div>
                @enderror
            </div>
            <div class="col">
                <label for="fin">Fin</label>
                <input type="date" name="fin" id="fin"  value="{{old('fin')}}"  class="form-control @error('fin') is-invalid
                @enderror" placeholder="Fin">
                @error('fin')
                    <div class="alert-danger">{!!$errors->first('fin')!!}</div>
                @enderror
            </div>
        </div>
        <br>
        <div class="modal-footer btn-group " role="group">
   
            <a href="{{route("gestion.index")}}" type="button" class="btn btn-danger btn-default">regresar</a>  
            <button type="submit" id="" class="btn btn-success btn-default"> <i class="fa fa-floppy-o" aria-hidden="true"></i> 
          </div>
        </div>
    </div>
    </form>


@endsection

@section('js')
<script>
    $('.formulario-Guardar-gestion').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Guardar Gestión Académica?',
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
        Ingrese la relación de actividades de gestión académica realizada. 
        Se consideran en esta actividad: puestos directivos, de coordinación o 
        supervisión académica o técnica. 
        <br><br> 
        Agregar lugar donde se desempeñó el profesor y el 
        período de la vigencia.
    </p>
@endsection