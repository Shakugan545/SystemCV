<template>
    <div class="col-md-12">
                    
                    <div class = "fila">
                                    <div class = "col-md-12">
                                        <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#ModalProfesores" data-backdrop="false"> Agregar </a>
                    </div>
                    </div>
                        <div class="card-body table-full-width table-responsive ">
                            <table class="table table-hover  table-striped ">
                                <thead>
                                    <th>codigo del Profesor</th>
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
                                    <tr v-for="profe in profesores" v-bind:key="profe.codigo">
                                        <td>{{profe.codigo}} </td>
                                        <td>{{profe.nombre}}</td>
                                        <td>{{profe.ap}}</td>
                                        <td>{{profe.am}}</td>
                                        <td>{{profe.fecha_nacimiento}}</td>
                                        <td>{{profe.edad}}</td>
                                        <td>{{profe.puesto}}</td>
                                        <td>{{profe.antiguedad}}</td>
                                        <td>
                                           
                                            
                                           <!-- @include('profesores.modal_edit')  INCLUIMOS LA Modal edit -->
                                           <!-- @include('profesores.delete')  INCLUIMOS Delete -->
                                        </td>
                                    </tr>
                                 


                                </tbody>
                                
                            </table>
                            
                        </div>
    </div>
                
</template>

<script>
export default {
     props:[
            'codigo',
            'nombre',
            'ap',
            'am',
            'fecha_nacimiento',
            'edad',
            'puesto',
            'antiguedad'
        ],
    beforeMount(){
        this.getProfesores();
        this.enviarDatos();
    },

    data:function(){
        return {
           
            profesores:[],
            
        }
    },
    methods:{
    async getProfesores(){
            try {
                var urlProfesores = '/api/profesores';
                axios.get(urlProfesores).then(response=>{
                    this.profesores = response.data;
                })
                
            } catch (ex) {
                console.log(ex);
            }
        },
    
   
    }
  
}
</script>