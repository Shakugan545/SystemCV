
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{ $academi->id }}">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
<!-- Modal -->
<div class="modal fade" id="edit{{ $academi->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-center bg-warning mb-3">
                <h5 class="modal-title" id="exampleModalLabel">Editar Grados Academicos</h5>
               
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('academica.update', $academi->id) }}">
                    @method('PUT')
                    {{ @csrf_field() }}
                                <div class="form-row">
                                    <div class="col">
                                        <label for="profesores_codigo">Codigo Profesor</label>
                                        <input disabled type="text" value="{{ $academi->profesores_codigo }}"
                                            name="profesores_codigo" id="profesores_codigo" class="form-control"
                                            placeholder="Grados académicos">
                                    </div>
                                    <div class="col">
                                        
                                        <label for="nombre_academica">Grados Academicos</label>
                                        <input type="text" value="{{ $academi->nombre_academica }}"
                                            name="nombre_academica" id="nombre_academica" class="form-control"
                                            placeholder="Grados académicos">
                                    </div>

                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="especialidad">Especialidad</label>
                                        <input type="text" value="{{ $academi->especialidad }}" name="especialidad"
                                            id="especialidad" class="form-control" placeholder="Especialidad">
                                    </div>
                                    <div class="col">
                                        <label>Institucion</label>
                                        <input type="text" value="{{ $academi->institucion_A }}" name="institucion_A"
                                            id="institucion_A" class="form-control" placeholder="Institucion">
                                    </div>
                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="nivel">Nivel</label>
                                        <input type="text" value="{{ $academi->nivel }}" name="nivel" id="nivel"
                                            class="form-control" placeholder="Nivel">
                                    </div>
                                    <div class="col">
                                        <label for="cedula">Cedula</label>
                                        <input type="text" value="{{ $academi->cedula }}" name="cedula" id="cedula"
                                            class="form-control" placeholder="Cedula">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="ano_obtenido">Año de obtención</label>
                                        <input type="text" value="{{ $academi->ano_obtenido }}" name="ano_obtenido"
                                            id="ano_obtenido" class="form-control" placeholder="Año de obtención">
                                    </div>
                                    <div class="col">
                                        <label for="pais">Pais</label>
                                        <input type="text" value="{{ $academi->pais }}" name="pais" id="pais"
                                            class="form-control" placeholder="Pais">
                                    </div>
                                </div>
                            
                        
                        <br>
                    
                    <div class="modal-footer btn-group " role="group">
                      <button type="button" class="btn btn-danger btn-default" data-dismiss="modal"> <i class="fa fa-times-circle" aria-hidden="true"></i> </button>
                      <button type="submit" id="" class="btn btn-success btn-default"> <i class="fa fa-floppy-o" aria-hidden="true"></i> </button>
                    </div>
                </form>
                
            </div>

        </div>
    </div>
</div>
