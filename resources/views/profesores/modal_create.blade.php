<form  method="post"  action="{{route('profesores.store')}}"   >
  {{ @csrf_field() }}
  <div class="col">
         <div class="card card-body text-center ">
          <div class="card-title text-center bg-success" >
            <h2>Registrar Profesores</h2>
          </div>
             <div class="form-row">
               <div class="col">
                   <label for="codigo">Codigo</label>
               <input type="text" name="codigo" id="codigo" value="{{old('codigo')}} " class="form-control @error('codigo') is-invalid @enderror " placeholder="Codigo">
                   @error('codigo')
                   <div class="alert-danger">{!!$errors->first('codigo')!!}</div>
                   @enderror
               </div>
                 <div class="col">
                   <label for="nombres">nombres</label>
                 <input type="text" name="nombre" id="nombre" value=" {{old('nombre')}} " class="form-control @error('nombre') is-invalid @enderror" placeholder="Nombre">
                 @error('nombre')
                 <div class="alert-danger">{!!$errors->first('nombre')!!}</div>
                 @enderror
                 </div>
               </div>
               <br>
               <div class="form-row">
                 <div class="col">
                   <label for="ap">Apellido Paterno</label>
                     <input type="text" name="ap" id="ap" class="form-control @error('ap') is-invalid @enderror" placeholder="Apellido parterno">
                     @error('ap')
                     <div class="alert-danger">Ingresa un apellido paterno</div>
                     @enderror
                 </div>
                 <div class="col">
                   <label for="am">Apellido Materno</label>
                     <input type="text"  name="am" id="am" class="form-control @error('am') is-invalid @enderror" placeholder="Apellido Materno">
                     @error('am')
                 <div class="alert-danger">Ingresa un apellido materno</div>
                 @enderror
                 </div>
               </div>
             <br>
             <div class="form-row">
                 <div class="col">
                   <Label for="fecha_nacimiento">Fecha de nacimiento</Label>
                     <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror" placeholder="Año/mes/dia">
                     @error('fecha_nacimiento')
                    <div class="alert-danger">Ingresa una fecha de nacimiento</div>
                    @enderror
                 </div>
                 <div class="col">
                   <Label for="edad">Edad</Label>
                     <input type="text"  name="edad" id="edad" class="form-control @error('edad') is-invalid @enderror" placeholder="Edad">
                     @error('edad')
                     <div class="alert-danger">Ingresa una edad</div>
                     @enderror
                 </div>
             </div>
             <br>
             <div class="form-row">
                 <div class="col">
                   <Label for="puesto">Puesto Actual</Label>
                     <input type="text"  name="puesto" id="puesto" class="form-control @error('puesto') is-invalid @enderror" placeholder="Puesto Actual">
                     @error('puesto')
                     <div class="alert-danger">Ingresa un puesto</div>
                     @enderror
                 </div>
                 <div class="col">
                   <label for="antiguedad">Antiguedad</label>
                     <input type="text"  name="antiguedad" id="antiguedad" class="form-control @error('antiguedad') is-invalid @enderror" placeholder="Antiguedad">
                     @error('antiguedad')
                     <div class="alert-danger">Ingresa una antiguedad</div>
                     @enderror
                 </div>
             </div>
         </div>


  <div class="modal-footer btn-group " role="group">
    <a href="{{route("profesores.index")}}" type="button" class="btn btn-danger btn-default">regresar</a>  
    <button type="submit" id="enviarProfesores" class="btn btn-success btn-default"> <i class="fa fa-floppy-o" aria-hidden="true"></i> 
  </div>

</div>
</form>

