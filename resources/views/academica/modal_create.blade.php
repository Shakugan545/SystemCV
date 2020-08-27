
<!-- Button trigger modal -->
<button type="button" class="btn btn-success " data-toggle="modal" data-target="#storeAcademica">
    Nuevo
   </button>
<!-- Modal -->
<div class="modal fade" id="storeAcademica" tabindex="-1" aria-labelledby="storeAcademica" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title " id="storeAcademica">Agregar Grados Academicos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form  method="post" action="{{route('academica.store')}}">
              
           {{ @csrf_field() }}
           <div class="col">
            <div class="card card-body text-center">
                <h5>Grados academicos</h5>
                <div class="form-row">
                  <div class="col">
                    <label for="profesores_codigo">Codigo Profesor</label>
                    <input type="text" name="profesores_codigo" id="profesores_codigo" class="form-control"
                        placeholder="Grados académicos">
                </div>
                    <div class="col">
                        <label for="nombre_academica">Grados Academicos</label>
                        <input type="text" name="nombre_academica" id="nombre_academica" class="form-control"
                            placeholder="Grados académicos">
                    </div>
                    <div class="col">
                        <label for="especialidad">Especialidad</label>
                        <input type="text" name="especialidad" id="especialidad" class="form-control"
                            placeholder="Especialidad">
                    </div>
                    <div class="col">
                        <label>Institucion</label>
                        <input type="text" name="institucion_A" id="institucion_A" class="form-control"
                            placeholder="Institucion">
                    </div>
                </div>
                <br>

                <div class="form-row">
                    <div class="col">
                        <label for="nivel">Nivel</label>
                        <input type="text" name="nivel" id="nivel" class="form-control" placeholder="Nivel">
                    </div>
                    <div class="col">
                        <label for="cedula">Cedula</label>
                        <input type="text" name="cedula" id="cedula" class="form-control" placeholder="Cedula">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="ano_obtenido">Año de obtención</label>
                        <input type="text" name="ano_obtenido" id="ano_obtenido" class="form-control"
                            placeholder="Año de obtención">
                    </div>
                    <div class="col">
                        <label for="pais">Pais</label>
                        <input type="text" name="pais" id="pais" class="form-control" placeholder="Pais">
                    </div>
                </div>
              </div>
            </div>
                <br>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
  
    </div>
  </div>
  </div>