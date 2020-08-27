<div class="col">
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#store">
  <i class="fa fa-plus" aria-hidden="true"></i>
   </button>
   <p class="text-center">LISTA DE PROFESORES</p>
  </div>  
 
<!-- Modal -->
<div class="modal fade " id="store" tabindex="-1" aria-labelledby="store" aria-hidden="true">
    <div class="modal-dialog modal-lg  ">
      <div class="modal-content ">
        <div class="modal-header ">
          <h5 class="modal-title text-center " id="store">Agregar Profesores</h5>
          
        </div>
        <div class="modal-body ">
          <form  method="post" action="{{route('profesores.store')}}">
              
           {{ @csrf_field() }}
          <div class="row">
              <div class="col">
                  <div class="card card-body text-center ">
                      <h5>Información del Docente</h5>
                      <div class="form-row">
                        
                        
                        <div class="col">
                            <label for="codigo">Codigo</label>
                            <input type="text" name="codigo" id="codigo" class="form-control {{!!$errors->first('codigo','has-danger')!!}} " placeholder="Codigo">
                              
                            
                            @error('codigo')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                         
                        </div>
                          <div class="col">
                            <label for="nombres">nombres</label>
                          <input type="text" name="nombre" id="nombre" class="form-control {{!!$errors->first('nombre','has-danger')!!}} " placeholder="Nombre">
                          @error('nombre')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col">
                            <label for="ap">Apellido Paterno</label>
                              <input type="text" name="ap" id="ap" class="form-control {{!!$errors->first('ap')!!}}" placeholder="Apellido parterno">
                              <span class="form-control-feedback"></span>
                            <small style="color:red" class="hiden">{{!!$errors->first('ap')!!}}</small>
                          </div>
                          <div class="col">
                            <label for="am">Apellido Materno</label>
                              <input type="text"  name="am" id="am" class="form-control {{!!$errors->first('am')!!}}" placeholder="Apellido Materno">
                              <span class="form-control-feedback"></span>
                            <small style="color:red" class="hiden">{{!!$errors->first('am')!!}}</small>
                          </div>
                        </div>
                      <br>
                      <div class="form-row">
                          <div class="col">
                            <Label for="fecha_nacimiento">Fecha de nacimiento</Label>
                              <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control {{!!$errors->first('fecha_nacimiento')!!}}" placeholder="Año/mes/dia">
                              <span class="form-control-feedback"></span>
                            <small style="color:red" class="hiden">{{!!$errors->first('fecha_nacimiento')!!}}</small>
                          </div>
                          <div class="col">
                            <Label for="edad">Edad</Label>
                              <input type="text"  name="edad" id="edad" class="form-control {{!!$errors->first('edad')!!}}" placeholder="Edad">
                              <span class="form-control-feedback"></span>
                            <small style="color:red" class="hiden">{{!!$errors->first('edad')!!}}</small>
                          </div>
                      </div>
                      <br>
                      <div class="form-row">
                          <div class="col">
                            <Label for="puesto">Puesto Actual</Label>
                              <input type="text"  name="puesto" id="puesto " class="form-control {{!!$errors->first('puesto')!!}}" placeholder="Puesto Actual">
                              <span class="form-control-feedback"></span>
                            <small style="color:red" class="hiden">{{!!$errors->first('puesto')!!}}</small>
                          </div>
                          <div class="col">
                            <label for="antiguedad">Antiguedad</label>
                              <input type="text"  name="antiguedad" id="antiguedad" class="form-control {{!!$errors->first('antiguedad')!!}}" placeholder="Antiguedad">
                              <span class="form-control-feedback"></span>
                            <small style="color:red" class="hiden">{{!!$errors->first('antiguedad')!!}}</small>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
        <div class="modal-footer " role="group">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
  
    </div>
  </div>

</div>



<script>
  @if($errors->has('codigo') || $errors->has('nombre') || $errors->has('ap') || $errors->has('am') || $errors->has('fecha_nacimiento')
  || $errors->has('edad') || $errors->has('puesto')  || $errors->has('antiguedad'))
    <script>
    $(function(){
        $('#store').modal({
            show: true
        });
    });
    </script>
@endif
</script>