@extends('index')
@section('contenido')
<br><br>

<form method="post" id="form" class="formulario-Guardar-logros-noacademicos" action=" {{route('logrosnoacademicos.store')}}" >
    {{ @csrf_field() }} 
    
        <div class="col">
            <div class="card card-body text-center">
                <div class="card-title text-center tarjeta3">
                    <br>
                        <h2>Rgistrar Logros no Académicos</h2>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="Codigo">Código Del Profesor</label>
                        <input type="text" value="{{old('profesores_codigo')}}" class="form-control @error('profesores_codigo') is-invalid @enderror" 
                         name="profesores_codigo" id="profesores_codigo" placeholder="Código Del Profesor">
                        @error('profesores_codigo')
                    <div class="alert-danger text-center">{!!$errors->first('profesores_codigo')!!}</div>
                    @enderror
                    </div>

                    <div class="col">
                        <label for="logro">Nombre Del Logro</label>
                        <input type="text" value="{{old('logro')}}" class="form-control @error('logro') is-invalid @enderror" 
                         name="logro" id="logro" placeholder="Logro">
                        @error('logro')
                    <div class="alert-danger text-center">{!!$errors->first('logro')!!}</div>
                    @enderror
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="autores">Autores</label>
                        <input type="text" value="{{old('autores')}}" class="form-control @error('autores') is-invalid @enderror" 
                         name="autores" id="autores" placeholder="Autores">
                        @error('autores')
                    <div class="alert-danger text-center">{!!$errors->first('autores')!!}</div>
                    @enderror
                    </div>

                    <div class="col">
                        <label for="relevancia">Relevancia</label>
                        <input type="text" value="{{old('relevancia')}}" class="form-control @error('relevancia') is-invalid @enderror" 
                         name="relevancia" id="relevancia" placeholder="Relevancia">
                        @error('relevancia')
                    <div class="alert-danger text-center">{!!$errors->first('relevancia')!!}</div>
                    @enderror
                    </div>

                    <div class="col">
                        <label for="lugar">Lugar o Pais</label>
                        <input type="text" value="{{old('lugar')}}" class="form-control @error('lugar') is-invalid @enderror" 
                         name="lugar" id="lugar" placeholder="Lugar o Pais">
                        @error('lugar')
                        <div class="alert-danger text-center">{!!$errors->first('lugar')!!}</div>
                        @enderror
                    </div>
                </div>
            
                <br>
                <div class="modal-footer btn-group " role="group">
   
                    <a href="{{route("logrosnoacademicos.index")}}" type="button" class="btn btn-danger btn-default">regresar</a>  
                    <button type="submit" id="enviar"  class="btn btn-success btn-default"> <i class="fa fa-floppy-o" aria-hidden="true"></i> 
                </div>

            </div>
        </div>
      

      
</form>
@endsection

@section('js')




<script>
    $('.formulario-Guardar-logros-noacademicos').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Estas seguro?',
        text: "Guardar Logros No Academicos",
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
        Relevancia: <br><br>
        certificaciones profesionales, premios o reconocimientos, patentes, etc.
    </p>
@endsection