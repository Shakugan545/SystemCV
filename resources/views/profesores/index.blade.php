@extends('index')

@section('css')

    
@endsection
@section('contenido')
 
<br>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div>
                    <a class="btn btn-success" type="button" href="{{route('profesores.create')}}"><i class="fa fa-user" aria-hidden="true"> AGREGAR </i> </a> 
                    
                    </div>
                    <br>
                    <div class="card strpied-tabled-with-hover">
                       
                        <div class="card-header  bg-secondary">
                       <h2 class="text-center">Profesores</h2>
                        </div>

                        <div class="card-body  ">
                            <table class="table table-hover " id="profesores">
                                <thead>
                                    <th>Código del Profesor</th>
                                    <th>Nombre</th>
                                    <th>Paterno</th>
                                    <th>Materno</th>
                                    <th>Fecha de Nacimiento</th>
                                    <th>Edad</th>
                                    <th>Puesto</th>
                                    <th>Antigüedad</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                    
                                    @forelse ($profesores as $profe)
                                    <tr>
                                        <td>{{ $profe->codigo}}</td>
                                        <td>{{ $profe->nombre}}</td>
                                        <td>{{ $profe->ap}}</td>
                                        <td>{{ $profe->am}}</td>
                                        <td>{{ $profe->fecha_nacimiento}}</td>
                                        <td>{{ $profe->edad}}</td>
                                        <td>{{ $profe->puesto}}</td>
                                        <td>{{ $profe->antiguedad}}</td>
                                        <td class="btn-group " role="group">
                                            <a href="{{route('profesores.edit',$profe->codigo)}}"><button class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button> </a>
                                           
                                            @include('profesores.delete') <!-- INCLUIMOS Delete -->
                                        </td>
                                        
                                    </tr>
                                    @empty
                                        <div class="alert alert-warning text-center" role="alert">
                                        <h5>NO HAY REGISTROS EN LA BASE DE DATOS</h5>
                                       </div>

                                @endforelse


                                </tbody>
                                
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- ******************************************************************************************************* -->
            
        </div>
 
@endsection

@section('js')


<script>
    $('.formulario-eliminar').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Estás seguro?',
        text: "Ya no podras modificar esto",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar!'
        }).then((result) => {
        if (result.isConfirmed) {
            this.submit();
        }
        })
    })
</script>

@if (session('eliminar') == 'ok')
        <script>
            Swal.fire('Eliminado!','El Profesor ha sido Eliminado','success')
        </script>
@endif
@if (session('guardar') == 'guardar')
        <script>
           Swal.fire('Profesor Guardado!', '', 'success')
        </script>
@endif
@if (session('editar') == 'editar')
        <script>
           Swal.fire('Profesor Editado!', '', 'success')
        </script>
@endif

<script>
    $('#profesores').DataTable({
        reponsive: true,
        autoWidth: false,
        "language": {
            "lengthMenu": "Mostrar "+ 
                `<select class="custom-select custom-select-sm form-control form-control-sm">
                <option value='10'>10</option>
                <option value='25'>25</option>
                <option value='50'>50</option>
                <option value='100'>100</option>
                <option value='-1'>All</option>
                </select>
                `
            +" registros por página",
            "zeroRecords": "No encontrado - Lo siento",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate": {
             "next": "Siguiente",
             "previous": "Anterior"
            }
        }
    });
</script>
@endsection