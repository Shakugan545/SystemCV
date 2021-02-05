@extends('index')
@section('contenido')
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div>
                <a class="btn btn-success" type="button" href="{{route('participaciones.create')}}"><i class="fa fa-user" aria-hidden="true"> AGREGAR </i></a>
            </div>
            <br>
            <div class="card strpied-tabled-with-hover">
               
                <div class="card-header  bg-secondary text-center">
                 <h2>Participación En Organizaciones Profesionales</h2>
                </div>

                <div class="card-body table-full-width table-responsive ">
                    <table class="table table-hover" id="participaciones">
                        <thead>
                            <th>Código del Profesor</th>
                            <th>Organismo</th>
                            <th>Años de Membresia</th>
                            <th>Nivel de Participación</th>
                            <th>Acciones</th>
                            
                        </thead>
                        <tbody>
                            
                            @forelse ($participaciones as $parti)
                            <tr>
                                <td>{{ $parti->profesores_codigo}}</td>
                                <td>{{ $parti->organismo}}</td>
                                <td>{{ $parti->tiempo_membresia}}</td>
                                <td>{{ $parti->lvl_participacion}}</td>
                                
                               
                                <td class="btn-group " role="group">
                                    <a href=" {{route('participaciones.edit',$parti->id)}} "><button class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> </button></a>
                                     @include('participaciones.delete')
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

@if (session('eliminar') == 'ok')
        <script>
            Swal.fire(
            'Eliminado!',
            'La Participación ha sido Eliminado',
            'success'
            )
        </script>
@endif

@if (session('guardar') == 'guardar')
        <script>
           Swal.fire('Participación Guardada!', '', 'success')
        </script>
@endif
@if (session('editar') == 'editar')
        <script>
           Swal.fire('Editado!', '', 'success')
        </script>
@endif
<script>
    $('.formulario-eliminar-participaciones').submit(function(e){
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
<script>
    $('#participaciones').DataTable({
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