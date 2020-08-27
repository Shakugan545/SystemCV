
<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$academi->id}}">
    Editar
   </button>
   
<!-- Modal -->
<div class="modal fade" id="edit{{$academi->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Profesor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form  method="post" action="{{route('academica.update',$academi->id)}}">
              @method('PUT')
           {{ @csrf_field() }}
          <div class="row">
            <div class="col">
                <div class="card card-body text-center">
                    <h5>Grados academicos</h5>
                    <div class="form-row">
                      <div class="col">
                        <label for="profesores_codigo">Codigo Profesor</label>
                      <input type="text" value="{{$academi->profesores_codigo}}" name="profesores_codigo" id="profesores_codigo" class="form-control"
                            placeholder="Grados académicos">
                    </div>
                        <div class="col">
                            <label for="nombre_academica">Grados Academicos</label>
                            <input type="text" value="{{$academi->nombre_academica}}" name="nombre_academica" id="nombre_academica" class="form-control"
                                placeholder="Grados académicos">
                        </div>
                        <div class="col">
                            <label for="especialidad">Especialidad</label>
                            <input type="text" value="{{$academi->especialidad}}" name="especialidad" id="especialidad" class="form-control"
                                placeholder="Especialidad">
                        </div>
                        <div class="col">
                            <label>Institucion</label>
                            <input type="text" value="{{$academi->institucion_A}}" name="institucion_A" id="institucion_A" class="form-control"
                                placeholder="Institucion">
                        </div>
                    </div>
                    <br>
    
                    <div class="form-row">
                        <div class="col">
                            <label for="nivel">Nivel</label>
                            <input type="text" value="{{$academi->nivel}}" name="nivel" id="nivel" class="form-control" placeholder="Nivel">
                        </div>
                        <div class="col">
                            <label for="cedula">Cedula</label>
                            <input type="text" value="{{$academi->cedula}}" name="cedula" id="cedula" class="form-control" placeholder="Cedula">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <label for="ano_obtenido">Año de obtención</label>
                            <input type="text" value="{{$academi->ano_obtenido}}" name="ano_obtenido" id="ano_obtenido" class="form-control"
                                placeholder="Año de obtención">
                        </div>
                        <div class="col">
                            <label for="pais">Pais</label>
                            <input type="text" value="{{$academi->pais}}" name="pais" id="pais" class="form-control" placeholder="Pais">
                        </div>
                    </div>
                  </div>
                </div>
                    <br>
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