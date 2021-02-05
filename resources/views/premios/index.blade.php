@extends('index')
@section('contenido')

<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div>
                <a class="btn btn-success" type="button" href="{{route('premios.create')}}"><i class="fa fa-user" aria-hidden="true"> AGREGAR</i></a> 
            </div>
            <br>
            <div class="card strpied-tabled-with-hover">
               
                <div class="card-header  bg-secondary text-center">
                    <h2>Premios, distinciones o reconocimientos </h2>
                </div>

                <div class="card-body table-full-width table-responsive ">
                    <table class="table table-hover  " id="premio">
                        <thead>
                            <th>Código del Docente</th>
                            <th>Premios</th>
                            <th>Acciones</th>
                            
                        </thead>
                        <tbody>
                            
                            @forelse ($premios as $premi)
                            <tr>
                                <td>{{ $premi->profesores_codigo}}</td>
                                <td>{{ $premi->premios}}</td>
                              
                                <td class="btn-group " role="group">
                                    <a href=" {{route('premios.edit',$premi->id)}} "><button class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> </button></a>
                                    @include('premios.delete')
                                    
                                    
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
            'Premio Eliminado',
            'success'
            )
        </script>
    
@endif

@if (session('guardar') == 'guardar')
        <script>
           Swal.fire('Premio Guardado!', '', 'success')
        </script>
@endif
@if (session('editar') == 'editar')
        <script>
           Swal.fire('Editado!', '', 'success')
        </script>
@endif

<script>
    $('.formulario-eliminar-premio').submit(function(e){
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
    $('#premio').DataTable({
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