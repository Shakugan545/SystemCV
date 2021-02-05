@extends('index')
@section('contenido')
<br><br>

<form method="post" id="form" class="formulario-Guardar-premio" action=" {{route('premios.store')}}" >
    {{ @csrf_field() }} 
    
        <div class="col">
            <div class="card card-body text-center">
                <div class="card-title text-center tarjeta3">
                    <br>
                    <h2>Registrar Premios</h2>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="Codigo">Código Del Profesor</label>
                        <input type="text" value="{{old('profesores_codigo')}}"  class="form-control text-center @error('profesores_codigo') is-invalid @enderror" 
                         name="profesores_codigo" id="profesores_codigo" placeholder="Código Del Profesor">
                        @error('profesores_codigo')
                    <div class="alert-danger text-center">{!!$errors->first('profesores_codigo')!!}</div>
                    @enderror
                    </div>
                </div>
                <br>
                
                <div class="form-row">
                    <div class="col">
                        <label for="Premios">Premios</label>
                       
                         <textarea class="form-control text-center @error('premios') is-invalid @enderror" 
                         name="premios" id="premios" placeholder="Premios">{{old('premios')}}</textarea>
                            @error('premios')
                            <div class="alert-danger text-center">{!!$errors->first('premios')!!}</div>
                            @enderror
                    </div>
                </div>
                <br>
                <div class="modal-footer btn-group " role="group">
   
                    <a href="{{route("premios.index")}}" type="button" class="btn btn-danger btn-default">regresar</a>  
                    <button type="submit" id="enviar"  class="btn btn-success btn-default"> <i class="fa fa-floppy-o" aria-hidden="true"></i> 
                </div>

            </div>
        </div>
      

      
</form>
@endsection


@section('js')
<script>
    $('.formulario-Guardar-premio').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Guardar Premio?',
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
        Premios, distinciones o reconocimientos recibidos: de preferencia relacionados con actividades 
        académicas, o profesionales  relacionadas con el área de ingeniería del PE evaluado. 
    </p>
@endsection