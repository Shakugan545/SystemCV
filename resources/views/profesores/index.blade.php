@extends('dashboard')
@section('contenido')
<br>
<br>
    <form method="post" action="{{ route('profesores.store') }}">

        {{ @csrf_field() }}

        <div class="row">
            <div class="col">
                <div class="card card-body text-center">
                    <h5>Información del Docente</h5>
                    <div class="form-row">
                        <div class="col">
                            <label for="codigo">Codigo</label>
                            <input type="text" name="codigo" id="codigo" class="form-control {{!!$errors->first('codigo','has-danger')!!}}" placeholder="Ingresa el codigo">
                             
                           
                            @error('codigo')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                                                   


                        </div>
                        <div class="col">
                            <label for="nombre">nombres</label>
                            <input type="text" name="nombre" id="nombre" class="form-control " placeholder="Nombre">

                        </div>
                        <div class="col">
                            <label for="ap">Apellido Paterno</label>
                            <input type="text" name="ap" id="ap" class="form-control" placeholder="Apellido parterno">
                        </div>
                        <div class="col">
                            <label for="am">Apellido Materno</label>
                            <input type="text" name="am" id="am" class="form-control" placeholder="Apellido Materno">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <Label for="fecha_nacimiento">Fecha de nacimiento</Label>
                            <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"
                                placeholder="Fecha de nacimiento">
                        </div>
                        <div class="col">
                            <Label for="edad">Edad</Label>
                            <input type="text" name="edad" id="edad" class="form-control" placeholder="Edad">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <Label for="puesto">Puesto Actual</Label>
                            <input type="text" name="puesto" id="puesto" class="form-control" placeholder="Puesto Actual">
                        </div>
                        <div class="col">
                            <label for="antiguedad">Antiguedad</label>
                            <input type="text" name="antiguedad" id="antiguedad" class="form-control"
                                placeholder="Antiguedad">
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <button type="submit" class="btn btn-primary btn-block">SAVE</button>
    </form>
@endsection
