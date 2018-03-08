<template>
    <div> <br>
        <button v-if="!newEntry && showForm" v-on:click="newEntry=true" class="btn btn-danger btn-sm">Registrar entrada a reparación</button>
        <form action="" v-if="newEntry" v-on:submit.prevent="registerEntry()">
            <h4>Entrada a reparación</h4>
            <div class="alert alert-danger" v-if="errors">
                <li v-for="(error, index) in errors">{{ error[0] }}</li>    
            </div>
            <div class="form-group">
                <label for="">Descripción</label>
                <input type="text" class="form-control" v-model="description">
            </div>
            <button class="btn btn-success btn-sm" type="submit">Aceptar</button>
            <button class="btn btn-danger btn-sm" v-on:click="cancelNewEntry()">Cancelar</button>
        </form>
        <p v-if="!showForm">Este dispositivo ha ingresado al área de sistemas para reparación, motivo:
            {{ description }}
        </p>
    </div>
</template>

<script>
    import toastr from 'toastr';
    export default {
        mounted() {
        },
        props:['id'],
        data(){
            return{
                newEntry:false,
                description:'',
                errors:null,
                showForm:true
            }
        },
        methods: {
            registerEntry: function(){
                axios.post('http://localhost:8000/entrydiagnostics', {'device_id':this.id, 'description':this.description}).then(response=>{
                    this.cancelNewEntry();
                    toastr.success('Ingresado a sistemas para reparación');
                    this.showForm = false;
                    console.log(response.data);
                }).catch(errors=>{
                    toastr.danger('Algo salió mal :(');
                });
            },
            cancelNewEntry: function(){
                this.newEntry = false;
                this.errors = null;
            }
        }
    }
</script>
