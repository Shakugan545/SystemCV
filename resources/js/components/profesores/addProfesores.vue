<template>
                         <!--Inicio del modal -->
                        <div class="modal fade" id="addProfesores" tabindex="-1" role="dialog" aria-label="EtiquetProfesores" aria-hidden="true" >
                        <div class="modal-dialog  modal-lg" role="document" >
                            <div class="modal-content">
                                <form  @submit.prevent="enviarDatos" method="post" > 

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
                                                            <input type="text" v-model="datos.codigo" name="codigo" id="codigo" class="form-control" placeholder="Codigo"
                                                             >
                                                            
                                                            
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
                                        <button type="button" class="btn btn-danger " data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary ">Save changes</button>
                                    </div>
                                </form>
                            
                           
                            </div>
                        </div>
                </div>
                     <!-- Final del Modal -->
           
    
</template>

<script>
 import axios from 'axios';
export default {
     props:[ //se agregan los nombre de la base de datos
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
       
    },

    data:function(){
        return {
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

    async enviarDatos(){
            try{
                var postProfesores = 'http://127.0.0.1:8000/api/profesores';
                axios.post(postProfesores,this.datos).then(response=>{ //Sin this.
                        if(response.status == 200){
                            console.log(response.data);
                            window.location.href = 'profesores'; //No retornamod cuando se guarde la información
                            //this.$emit('profesores',1);
                        }
                }).catch(error =>{
                    console.log(error)
                    
                    this.errores = error.response.data.errors;
                })

            }catch (e){
                console.log(e);
            }
        },

     
    }
    
  
}
</script>