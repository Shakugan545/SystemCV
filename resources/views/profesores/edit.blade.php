@extends('dashboard')
@section('contenido')

<form  method="post" action="{{route('profesores.update',$profesores->codigo)}}">
    @method('PUT')
    {{ @csrf_field() }}
    
    <div class="row">
        <div class="col">
            <div class="card card-body text-center">
                <h5>Información del Docente</h5>
                <div class="form-row">
                  
                    <div class="col">
                      <label for="validationServer01">nombres</label>
                    <input type="text" value="{{$profesores->nombre}}" name="nombre" id="nombre" class="form-control " placeholder="Nombre">
                   
                    </div>
                    <div class="col">
                      <label for="ap">Apellido Paterno</label>
                        <input type="text" value="{{$profesores->ap}}" name="ap" id="ap" class="form-control" placeholder="Apellido parterno">
                    </div>
                    <div class="col">
                      <label for="am">Apellido Materno</label>
                        <input type="text" value="{{$profesores->am}}" name="am" id="am" class="form-control" placeholder="Apellido Materno">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                      <Label for="fecha_nacimiento">Fecha de nacimiento</Label>
                        <input type="text" value="{{$profesores->fecha_nacimiento}}" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" placeholder="Fecha de nacimiento">
                    </div>
                    <div class="col">
                      <Label for="edad">Edad</Label>
                        <input type="text" value="{{$profesores->edad}}" name="edad" id="edad" class="form-control" placeholder="Edad">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                      <Label for="puesto">Puesto Actual</Label>
                        <input type="text" value="{{$profesores->puesto}}" name="puesto" id="puesto" class="form-control" placeholder="Puesto Actual">
                    </div>
                    <div class="col">
                      <label for="antiguedad">Antiguedad</label>
                        <input type="text" value="{{$profesores->antiguedad}}" name="antiguedad" id="antiguedad" class="form-control" placeholder="Antiguedad">
                    </div>
                </div>
            </div>
        </div>
        <!--********************************************************************************** -->
        <div class="col">
            <div class="card card-body text-center">
                <h5>Grados academicos</h5>
                <div class="form-row">
                    <div class="col">
                        <label for="nombre_academica">Grados Academicos</label>
                        <input type="text"     name="nombre_academica" id="nombre_academica" class="form-control" placeholder="Grados académicos">
                    </div>
                    <div class="col">
                        <label for="especialidad">Especialidad</label>
                        <input type="text"  name="especialidad" id="especialidad" class="form-control" placeholder="Especialidad">
                    </div>
                    <div class="col">
                        <label>Institucion</label>
                        <input type="text"   name="institucion_A" id="institucion_A" class="form-control" placeholder="Institucion">
                    </div>
                </div>
                <br>

                <div class="form-row">
                    <div class="col">
                        <label for="nivel">Nivel</label>
                        <input type="text"   name="nivel" id="nivel" class="form-control" placeholder="Nivel">
                    </div>
                    <div class="col">
                        <label for="cedula">Cedula</label>
                        <input type="text"   name="cedula" id="cedula" class="form-control" placeholder="Cedula">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="ano_obtenido">Año de obtención</label>
                        <input type="text"   name="ano_obtenido" id="ano_obtenido" class="form-control" placeholder="Año de obtención">
                    </div>
                    <div class="col">
                        <label for="pais">Pais</label>
                        <input type="text"   name="pais" id="pais" class="form-control" placeholder="Pais">
                    </div>
                </div>
                  <!-- ************************FORMULARIO MODAL***************************************************** -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Agregars más Grados Academicos
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Grados Academicos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="nombre_academica">Grados Academicos</label>
                                            <input type="text"  name="nombre_academica" id="nombre_academica" class="form-control"
                                                placeholder="Grados académicos">
                                        </div>
                                        <div class="col">
                                            <label for="especialidad">Especialidad</label>
                                            <input type="text"  name="especialidad" id="especialidad" class="form-control"
                                                placeholder="Especialidad">
                                        </div>
                                        <div class="col">
                                            <label>Institucion</label>
                                            <input type="text"  name="institucion_A" id="institucion_A" class="form-control"
                                                placeholder="Institucion">
                                        </div>
                                    </div>
                                    <br>
                
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="nivel">Nivel</label>
                                            <input type="text"  name="nivel" id="nivel" class="form-control" placeholder="Nivel">
                                        </div>
                                        <div class="col">
                                            <label for="cedula">Cedula</label>
                                            <input type="text"   name="cedula" id="cedula" class="form-control" placeholder="Cedula">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="ano_obtenido">Año de obtención</label>
                                            <input type="text"  name="ano_obtenido" id="ano_obtenido" class="form-control"
                                                placeholder="Año de obtención">
                                        </div>
                                        <div class="col">
                                            <label for="pais">Pais</label>
                                            <input type="text"  name="pais" id="pais" class="form-control" placeholder="Pais">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>


    <!--********************************************************************************** -->


    <div class="row">
        <div class="col">
            <div class="card card-body text-center">
                <h5>Capacitaciones</h5>
                <div class="form-row">
                    <div class="col">
                        <input type="text"   name="tipo_capacitacion" id="tipo_capacitacion"  class="form-control" placeholder="Tipo de capacitación">
                    </div>
                    <div class="col">
                        <input type="text"  name="institucion_C" id="institucion_C" class="form-control" placeholder="Institucion">
                    </div>
                    <div class="col">
                        <input type="text"   name="horas" id="horas" class="form-control" placeholder="Horas">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <input type="text"   name="ano_obtenido_capacitacion" id="ano_obtenido_capacitacion" class="form-control" placeholder="Año de obtención">
                    </div>
                    <div class="col">
                        <input type="text"   name="pais_capacitacion" id="pais_capacitacion" class="form-control" placeholder="Pais">
                    </div>
                </div>
            </div>
        </div>
        <!--********************************************************************************** -->
        <div class="col">
            <div class="card card-body text-center">
                <h5>Disciplinas</h5>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre de la institución">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Actividad">
                    </div>

                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Horas">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Pais">
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <!--********************************************************************************** -->
    <div class="row">
        <div class="col">
            <div class="card card-body text-center">
                <h5>Gestión Académica</h5>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre de la institución">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Puesto">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Inicio">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Fin">
                    </div>
                </div>

            </div>
        </div>
        <!--********************************************************************************** -->
        <div class="col">
            <div class="card card-body text-center">
                <h5>Productos</h5>
                <div class="form-row">
                    <div class="col">
                        <label for="descripcion">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción">
                    </div>
                    <div class="col">
                        <label for="Fecha">Fecha</label>
                        <input type="text" class="form-control" name="fecha" id="fecha" placeholder="Fecha">
                    </div>
                </div>

                <br>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card card-body text-center">
                <h5>Experiencia no Académica</h5>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre de la institución">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Actividad o Puesto">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Inicio">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Fin">
                    </div>
                </div>

            </div>
        </div>
        <!--********************************************************************************** -->
        <div class="col">
            <div class="card card-body text-center">
                <h5>Ingenieriles</h5>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre del Organismo">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Experiencia">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="años">
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card card-body text-center">
                <h5>Logros no Académicos</h5>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Descripción">
                    </div>
                </div>
                <br>

            </div>
        </div>
        <!--********************************************************************************** -->
        <div class="col">
            <div class="card card-body text-center">
                <h5>Participaciones</h5>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre del organismo o institución">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Membresia">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Membresia Activa">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nivel de participación">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Aportaciones">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Premios">
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">SAVE</button>
    
  </form>
@endsection
