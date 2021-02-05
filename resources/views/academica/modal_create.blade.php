
<!-- Button trigger modal -->
<button type="button" class="btn btn-success " data-toggle="modal" data-target="#storeAcademica">
  <i class="fa fa-plus" aria-hidden="true"></i>
   </button>
<!-- Modal -->
<div class="modal fade" id="storeAcademica" tabindex="-1" aria-labelledby="storeAcademica" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content ">
        <div class="modal-header text-center bg-success mb-3" style="">
          <h5 class="modal-title text-center" id="storeAcademica">Agregar Grados Academicos</h5>
          
        </div>
        <div class="modal-body">
          <form  method="post" action="{{route('academica.store')}}">
           {{ @csrf_field() }}
           
                <div class="form-row">
                  <div class="col">
                    <label for="profesores_codigo">Codigo Profesor</label>
                    <input type="text" name="profesores_codigo" id="profesores_codigo" class="form-control"
                        placeholder="Codigo Del Profesor">
                </div>
                    <div class="col">
                        <label for="nombre_academica">Grados Academicos</label>
                        <input type="text" name="nombre_academica" id="nombre_academica" class="form-control"
                            placeholder="Grados académicos">
                    </div>
                   
                </div>
                <br>
                <div class="form-row">
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
              
            
                <br>
        <div class="modal-footer btn-group " role="group">
          <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-times-circle" aria-hidden="true"></i> </button>
          <button type="submit" class="btn btn-success"> <i class="fa fa-floppy-o" aria-hidden="true"></i> </button>
        </div>
      </form>
      </div>
  
    </div>
  </div>
  </div>