@extends('dashboard')
@section('contenido')

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header  bg-secondary">

                                @include('profesores.modal_create') <!-- INCLUIMOS Modal Store -->
                                
                        </div>
                        

                        <div class="card-body table-full-width table-responsive ">
                            <table class="table table-hover  ">
                                <thead>
                                    <th>codigo</th>
                                    <th>nombre</th>
                                    <th>Paterno</th>
                                    <th>Materno</th>
                                    <th>fecha de nacimiento</th>
                                    <th>edad</th>
                                    <th>puesto</th>
                                    <th>Antiguedad</th>
                                    <th>acciones</th>
                                </thead>
                                <tbody>
                                   
                                    @forelse ($profesores as $profe)
                                    <tr class="table-secondary">
                                        <td>{{ $profe->codigo}}</td>
                                        <td>{{ $profe->nombre}}</td>
                                        <td>{{ $profe->ap}}</td>
                                        <td>{{ $profe->am}}</td>
                                        <td>{{ $profe->fecha_nacimiento}}</td>
                                        <td>{{ $profe->edad}}</td>
                                        <td>{{ $profe->puesto}}</td>
                                        <td>{{ $profe->antiguedad}}</td>
                                        <td>
                                            @include('profesores.modal_edit') <!-- INCLUIMOS LA Modal edit -->
                                            @include('profesores.delete') <!-- INCLUIMOS Delete -->
                                        </td>
                                    </tr>
                                    @empty
                                        <div class="alert alert-warning text-center" role="alert">
                                        <h5>No hay informacion en la BASE DE DATOS</h5>
                                       </div>

                                @endforelse


                                </tbody>
                                
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- ******************************************************************************************************* -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header  bg-secondary">
                            <div class="rol">
                                @include('academica.modal_create') <!-- INCLUIMOS Modal Store -->
                            </div>
                            <div class="rol">
                              <h4 class="card-title text-white text-center">Grados Academicos</h4>  
                            </div>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover  table-striped ">
                                <thead>
                                    <th>Codigo Profesor</th>
                                    <th>nombre</th>
                                    <th>Especialidad</th>
                                    <th>Institucion</th>
                                    <th>Nivel</th>
                                    <th>Cedula</th>
                                    <th>Año obtenido</th>
                                    <th>Pais</th>
                                    <th>acciones</th>
                                </thead>
                                <tbody>
                                    
                                    @forelse ($academica as $academi)
                                    <tr >
                                    <td>{{ $academi->profesores_codigo}}</td>
                                    <td>{{ $academi->nombre_academica}}</td>
                                    <td>{{ $academi->especialidad}}</td>
                                    <td>{{ $academi->institucion_A}}</td>
                                    <td>{{ $academi->nivel}}</td>
                                    <td>{{ $academi->cedula}}</td>
                                    <td>{{ $academi->ano_obtenido}}</td>
                                    <td>{{ $academi->pais}}</td>
                                    <td>
                                        @include('academica.modal_edit') <!-- INCLUIMOS LA Modal edit -->
                                        @include('academica.delete') <!-- INCLUIMOS LA Modal edit -->
                                    </td>
                                    
                                </tr>
                                    @empty
                                    <div class="alert alert-warning text-center" role="alert">
                                        <h5>NO HAY INFORMACION EN LA  BASE DE DATOS</h5>
                                       </div>
                                       
                                    
                                        
                                    @endforelse
                                 


                                </tbody>
                                
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        
        
      
@endsection
