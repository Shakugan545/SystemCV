@extends('index')
@section('contenido')
    <br><br>
<form method="post" class="formulario-Editar-ExpNoAcademica" action=" {{route('noacademica.update', $noacademica->id)}} ">
    @method('PUT')
    {{ @csrf_field() }}
   
        <div class="col">
            <div class="card card-body text-center">
                <div class="card-title text-center tarjeta3">
                    <br>
                    <h2>Editar Experiencia no Académica</h2>
                </div>
               <br>
                <div class="form-row">
                    <div class="col">
                        <label for="profesores_codigo">codigo del profesor</label>
                        <input type="text" value=" {{ $noacademica->profesores_codigo }} " class="form-control @error('profesores_codigo') is-invalid
                        @enderror" id="profesores_codigo" name="profesores_codigo"  placeholder="Nombre de la institución">
                         @error('profesores_codigo')
                            <div class="alert-danger">{!!$errors->first('profesores_codigo')!!}</div>
                         @enderror
                    </div>
                    <div class="col">
                        <label for="institucion">Nombre de la institucion</label>
                        <input type="text" value=" {{ $noacademica->institucion }} " class="form-control @error('institucion') is-invalid
                        @enderror" id="institucion" name="institucion"  placeholder="Nombre de la institución">
                         @error('institucion')
                            <div class="alert-danger">{!!$errors->first('institucion')!!}</div>
                         @enderror
                    </div>
                    <div class="col">
                        <label for="act_o_puesto">Actividad o Puesto</label>
                        <input type="text" value=" {{ $noacademica->act_o_puesto }} " class="form-control @error('act_o_puesto') is-invalid
                        @enderror" id="act_o_puesto" name="act_o_puesto"  placeholder="Actividad o Puesto">
                         @error('act_o_puesto')
                            <div class="alert-danger">{!!$errors->first('act_o_puesto')!!}</div>
                         @enderror
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="inicio">Inicio</label>
                        <input type="date" value="{{$noacademica->inicio}}" class="form-control @error('inicio') is-invalid
                        @enderror" id="inicio" name="inicio"  placeholder="Inicio">
                         @error('inicio')
                            <div class="alert-danger">{!!$errors->first('inicio')!!}</div>
                         @enderror
                    </div>
                    <div class="col">
                        <Label for="fin">Fin</Label>
                        <input type="date" value="{{$noacademica->fin}}" class="form-control @error('fin') is-invalid
                        @enderror" id="fin" name="fin"  placeholder="Fin">
                         @error('fin')
                            <div class="alert-danger">{!!$errors->first('fin')!!}</div>
                         @enderror
                    </div>
                </div>
                <br>
                <div class="modal-footer btn-group " role="group">
   
                    <a href="{{route("noacademica.index")}}" type="button" class="btn btn-danger btn-default">regresar</a>  
                    <button type="submit" id="enviarProfesores" class="btn btn-success btn-default"> <i class="fa fa-floppy-o" aria-hidden="true"></i> 
                </div>
            </div>
          
        </div>
       


</form>


@endsection

@section('js')
<script>
    $('.formulario-Editar-ExpNoAcademica').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Editar Experiencia No Academica?',
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
        Actividad o Puesto:
        <br>
        <br>
        Experiencia profesional no académica. Incluye actividades realizadas en la industria, 
        consultoría, como emprendedor o en otras áreas diferentes a la educación superior.
    </p>
@endsection