<template>
    <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header  bg-secondary">
                            <!-- Boton que activa el modal-->
                                 <div class = "fila">
                                    <div class = "col-md-12">
                                        <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#ModalProfesores" data-backdrop="false"> Agregar </a>
                                    </div>
                                    </div>
                             <!--Aqui termina el boton que inicia el modal -->
                            <div class="rol">
                               <h4 class="card-title text-white text-center">Profesores Registrados</h4> 
                               
                         <!--Inicio del modal -->
                        <div class="modal fade" id="ModalProfesores" tabindex="-1" role="dialog" aria-label="EtiquetProfesores" aria-hidden="true" >
                        <div class="modal-dialog  modal-lg" role="document" >
                            <div class="modal-content">
                                <form  @submit.prevent="agregar()" method="post" v-bind:action="'/api/profesores'" > 

                                    <div class="modal-header">
                                        <h5 class="modal-title">Agregar Profesores</h5>
                                        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
                                         <i class="material-icons">X</i>
                                        </button>
                                     </div>

                                     <div class="modal-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card card-body text-center ">
                                                    <h5>Información del Docente</h5>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <label for="codigo">Codigo</label>
                                                            <input type="text" v-model="datos.codigo" name="codigo" id="codigo" class="form-control  " placeholder="Codigo">
                                                        </div>
                                                        <div class="col">
                                                            
                                                            <label for="nombres">nombres</label>
                                                        <input type="text" v-model="datos.nombre" name="nombre" id="nombre" class="form-control  " placeholder="Nombre">
                                                        </div>

                                                        </div>
                                                        <div class="form-row">
                                                        <div class="col">
                                                            <label for="ap">Apellido Paterno</label>
                                                            <input type="text" v-model="datos.ap" name="ap" id="ap" class="form-control " placeholder="Apellido parterno">
                                                            
                                                        </div>
                                                        <div class="col">
                                                            <label for="am">Apellido Materno</label>
                                                            <input type="text" v-model="datos.am"  name="am" id="am" class="form-control " placeholder="Apellido Materno">
                                                        </div>
                                                        </div>
                                                    <br>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <Label for="fecha_nacimiento">Fecha de nacimiento</Label>
                                                            <input type="text" v-model="datos.fecha_nacimiento" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control " placeholder="Año/mes/dia">
                                                        </div>
                                                        <div class="col">
                                                            <Label for="edad">Edad</Label>
                                                            <input type="text" v-model="datos.edad"  name="edad" id="edad" class="form-control " placeholder="Edad">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <Label for="puesto">Puesto Actual</Label>
                                                            <input type="text" v-model="datos.puesto"  name="puesto" id="puesto " class="form-control " placeholder="Puesto Actual">
                                                            <span class="form-control-feedback"></span>
                                                        </div>
                                                        <div class="col">
                                                            <label for="antiguedad">Antiguedad</label>
                                                            <input type="text" v-model="datos.antiguedad"  name="antiguedad" id="antiguedad" class="form-control " placeholder="Antiguedad">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-link" data-dismiss="modal"  >Cerrar</button>
                                        <button type="submit" class="btn btn-primary btn-link">Save changes</button>
                                    </div>
                                </form>
                            
                           
                            </div>
                        </div>
                        </div>
                     <!-- Final del Modal -->
                            </div>
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
        
    },

    data:function(){
        return {
            datos:[],
            datos:{
                codigo : '',
                nombre : '',
                ap     : '',
                am     : '',
                fecha_nacimiento : '',
                edad : '',
                puesto : '',
                antiguedad : '',
            },
            profesores:[],
            errores: [],
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
    
    async agregar(){
            
                var postProfesores ='/api/profesores';
                const params ={
                    codigo : this.datos.codigo,
                    nombre : this.datos.nombre,
                    ap : this.datos.ap,
                    am : this.datos.am,
                    fecha_nacimiento : this.datos.fecha_nacimiento,
                    edad : this.datos.edad,
                    puesto : this.datos.puesto,
                    antiguedad : this.datos.antiguedad,

                }
                     this.datos.codigo = '',
                     this.datos.nombre= '',
                     this.datos.ap= '',
                     this.datos.am= '',
                     this.datos.fecha_nacimiento= '',
                     this.datos.edad= '',
                     this.datos.puesto= '',
                     this.datos.antiguedad= '',

                axio.post(this.postProfesores,params).then(response=>{
                            this.datos.push(res.data);
                        
                })
        }
    }
  
}
</script>