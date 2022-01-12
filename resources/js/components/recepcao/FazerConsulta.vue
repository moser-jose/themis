<template>
    <div class="dire">
        <div class="header volt">
            <div class="voltar">
                <router-link to="/recepcao"><v-icon class="icon" scale="1.2"  name="caret-left"></v-icon> Voltar</router-link>
            </div>
            <div class="titulo">
                <v-icon class="icon" scale="1.2"  name="user-injured"></v-icon>
                <span>Realizar Consulta</span>
                <p>Página para realizar consultas aos pacientes</p>
            </div>
        </div>

        <cabecario :icon="'user-injured'" :ver="false" :nome="'Lista dos pacientes a serem atendidos'" :descricao="'Mostra os locais onde os pacientes estão a ser atendidos na clínica'"/>
        <div class="fazer-con">
            
        </div>


    </div>
</template>

<script>
     import Cabecario from '../Cabecario.vue';
    export default {
        components:{
            Cabecario
        },
        data(){
            return {
            }
        },
        methods:{

        }
    }
</script>

<style>

</style>
