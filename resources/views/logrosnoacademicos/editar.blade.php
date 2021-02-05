@extends('index')
@section('contenido')
<br><br>
<form method="post" class="formulario-Editar-Lnoacademicos" action=" {{route('logrosnoacademicos.update',$Noacademicos->id)}} ">
    @method('PUT')
    {{ @csrf_field() }} 
   
        <div class="col">
            <div class="card card-body text-center">
                <div class="card-title text-center tarjeta3">
                    <br>
                    <h2>Editar Logros no Académicos</h2>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="Codigo">Código Del Profesor</label>
                        <input type="text" class="form-control @error('profesores_codigo') is-invalid @enderror" value="{{$Noacademicos->profesores_codigo}}" 
                        name="profesores_codigo" id="profesores_codigo" placeholder="Código">
                        @error('profesores_codigo')
                        <div class="alert-danger">{!!$errors->first('profesores_codigo')!!}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="logro">Nombre Del Logro</label>
                        <input type="text" class="form-control @error('logro') is-invalid @enderror" value="{{$Noacademicos->logro}}" 
                        name="logro" id="logro" placeholder="Código">
                        @error('logro')
                        <div class="alert-danger">{!!$errors->first('logro')!!}</div>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="autores">Autores</label>
                        <input type="text" class="form-control @error('autores') is-invalid @enderror" value="{{$Noacademicos->autores}}" 
                        name="autores" id="autores" placeholder="Código">
                        @error('autores')
                        <div class="alert-danger">{!!$errors->first('autores')!!}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="relevancia">Relevancia</label>
                        <input type="text" class="form-control @error('relevancia') is-invalid @enderror" value="{{$Noacademicos->relevancia}}" 
                        name="relevancia" id="relevancia" placeholder="Código">
                        @error('relevancia')
                        <div class="alert-danger">{!!$errors->first('relevancia')!!}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="lugar">Nombre Del Lugar o Pais</label>
                        <input type="text" class="form-control @error('lugar') is-invalid @enderror" value="{{$Noacademicos->lugar}}" 
                        name="lugar" id="lugar" placeholder="Código">
                        @error('lugar')
                        <div class="alert-danger">{!!$errors->first('lugar')!!}</div>
                        @enderror
                    </div>

                </div>
                <br>
                <div class="modal-footer btn-group " role="group">
   
                    <a href="{{route("logrosnoacademicos.index")}}" type="button" class="btn btn-danger btn-default">regresar</a>  
                    <button type="submit" id="" class="btn btn-success btn-default"> <i class="fa fa-floppy-o" aria-hidden="true"></i> 
                </div>

            </div>
        </div>
        

</form>
    
@endsection

@section('js')
<script>
    $('.formulario-Editar-Lnoacademicos').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Editar Logros No Academicos?',
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
        Relevancia: <br><br>
        certificaciones profesionales, premios o reconocimientos, patentes, etc.
    </p>
@endsection