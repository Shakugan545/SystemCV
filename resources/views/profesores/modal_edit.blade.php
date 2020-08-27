
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
          <form  method="post" action="{{route('profesores.update',$profe->codigo)}}">
              @method('PUT')
           {{ @csrf_field() }}
          <div class="row">
              <div class="col">
                  <div class="card card-body text-center">
                      <h5>Información del Docente</h5>
                      <div class="form-row">
                        
                          <div class="col">
                            <label for="nombres">nombres</label>
                          <input type="text" value="{{$profe->nombre}}" name="nombre" id="nombre" class="form-control " placeholder="Nombre">
                         
                          </div>
                          <div class="col">
                            <label for="ap">Apellido Paterno</label>
                              <input type="text" value="{{$profe->ap}}" name="ap" id="ap" class="form-control" placeholder="Apellido parterno">
                          </div>
                          <div class="col">
                            <label for="am">Apellido Materno</label>
                              <input type="text" value="{{$profe->am}}" name="am" id="am" class="form-control" placeholder="Apellido Materno">
                          </div>
                      </div>
                      <br>
                      <div class="form-row">
                          <div class="col">
                            <Label for="fecha_nacimiento">Fecha de nacimiento</Label>
                              <input type="text" value="{{$profe->fecha_nacimiento}}" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" placeholder="Fecha de nacimiento">
                          </div>
                          <div class="col">
                            <Label for="edad">Edad</Label>
                              <input type="text" value="{{$profe->edad}}" name="edad" id="edad" class="form-control" placeholder="Edad">
                          </div>
                      </div>
                      <br>
                      <div class="form-row">
                          <div class="col">
                            <Label for="puesto">Puesto Actual</Label>
                              <input type="text" value="{{$profe->puesto}}" name="puesto" id="puesto" class="form-control" placeholder="Puesto Actual">
                          </div>
                          <div class="col">
                            <label for="antiguedad">Antiguedad</label>
                              <input type="text" value="{{$profe->antiguedad}}" name="antiguedad" id="antiguedad" class="form-control" placeholder="Antiguedad">
                          </div>
                      </div>
                  </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
  
    </div>
  </div>
  </div>