
<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$profe->codigo}}">
  <i class="fa fa-pencil" aria-hidden="true"></i>
   </button>
   
<!-- Modal -->
<div class="modal fade" id="edit{{$profe->codigo}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Profesor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form  method="post" action="{{route('profesores.update',$profe->codigo)}}" onsubmit="return validarProfesores();">
              @method('PUT')
           {{ @csrf_field() }}
          <div class="row">
              <div class="col">
                  <div class="card card-body text-center">
                      <h5>Información del Docente</h5>
                      <div class="form-row">

                        <div class="col">
                          <label for="codigo">codigo</label>
                        <input type="text"  value="{{$profe->codigo}}" name="codigo" id="codigo1" class="form-control {{!!$errors->first('codigo','has-danger')!!}} " disabled  placeholder="codigo">
                        </div>
                          <div class="col">
                            <label for="nombres">nombres</label>
                          <input type="text" value="{{$profe->nombre}}" name="nombre" id="profeEditNombre" class="form-control  " placeholder="Nombre">
                        </div>
                         
                      </div>

                      <div class="form-row">
                          
                        <div class="col">
                          <label for="ap">Apellido Paterno</label>
                            <input type="text" value="{{$profe->ap}}" name="ap" id="profesEditap" class="form-control" placeholder="Apellido parterno">
                        </div>
                        <div class="col">
                          <label for="am">Apellido Materno</label>
                            <input type="text" value="{{$profe->am}}" name="am" id="profeEditam" class="form-control" placeholder="Apellido Materno">
                        </div>
                      </div>
                      
                      <div class="form-row">
                          <div class="col">
                            <Label for="fecha_nacimiento">Fecha de nacimiento</Label>
                              <input type="text" value="{{$profe->fecha_nacimiento}}" name="fecha_nacimiento" id="profesoresfecha_nacimiento" class="form-control" placeholder="Fecha de nacimiento">
                          </div>
                          <div class="col">
                            <Label for="edad">Edad</Label>
                              <input type="text" value="{{$profe->edad}}" name="edad" id="profeEditEdad" class="form-control" placeholder="Edad">
                          </div>
                      </div>
                      <br>
                      <div class="form-row">
                          <div class="col">
                            <Label for="puesto">Puesto Actual</Label>
                              <input type="text" value="{{$profe->puesto}}" name="puesto" id="profeEditPuesto" class="form-control" placeholder="Puesto Actual">
                          </div>
                          <div class="col">
                            <label for="antiguedad">Antiguedad</label>
                              <input type="text" value="{{$profe->antiguedad}}" name="antiguedad" id="profeEditantigueda" class="form-control" placeholder="Antiguedad">
                          </div>
                      </div>
                  </div>
              </div>
        </div>
        <div class="modal-footer btn-group " role="group">
          
          <button type="button" class="btn btn-danger btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
          <button type="submit" id="editarProfesores" class="btn btn-success btn-default"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
        </div>
        <div>
          <div id="mensajeEdit1" class="alert alert-danger" style="display: none">El nombre es necesario</div>
          <div id="mensajeEdit2" class="alert alert-danger" style="display: none">El apellido es necesario</div>
          <div id="mensajeEdit3" class="alert alert-danger" style="display: none">El apellido es necesario</div>
          <div id="mensajeEdit4" class="alert alert-danger" style="display: none">La fecha de nacimiento es necesaria</div>
          <div id="mensajeEdit5" class="alert alert-danger" style="display: none">La edad es necesaria</div>
          <div id="mensajeEdit6" class="alert alert-danger" style="display: none">El puesto es necesario</div>
          <div id="mensajeEdit7" class="alert alert-danger" style="display: none">La Antiguedad es necesaria</div>
          </div>
      </form>
      </div>
  
    </div>
  </div>
  </div>

