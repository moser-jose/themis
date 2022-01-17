<template>
   <div class="esquerda">
            <div class="logo">
                <div class="logo-s">
                    <img src="storage/img/logo.svg">
                    <span>Themis</span>
                </div>

                <div class="menu-line" >
                    <span id="bar1"></span>
                    <span id="bar2"></span>
                </div>

            </div>
            <div class="user">
                <img src="storage/img/m.jpg" alt="">
                <h3>Moser José</h3>
                <span class="privi">Administrador</span>
                <div class="operacoes">
                    <span>
                        <v-icon @click="hideConf()" class="icon" scale="1.2"  name="cog"/>
                        <conf-item v-if="hideCon===true"/>
                    </span>
                    <span><v-icon class="icon" scale="1.2"  name="sign-out-alt"/></span>
                </div>
            </div>
            <div class="menus">
                <ul>
                    <li><router-link to="/home"><v-icon class="icon" scale="1"  name="columns"></v-icon><small>Dashboard</small></router-link></li>
                    <li><router-link to="/recepcao"><v-icon class="icon" scale="1"  name="hospital-user"></v-icon><small>Recepção</small></router-link> <span class="caxa-type">Aberto</span></li>
                    <li><span><v-icon class="icon" scale="1"  name="id-card"></v-icon><small>Pacientes</small></span> <v-icon class=" arrow" scale="1"  name="caret-down"/></li>
                    <li><span><v-icon class="icon" scale="1"  name="user-injured"></v-icon><small>Consultas</small></span><v-icon class=" arrow" scale="1"  name="caret-down"/></li>
                    <li><span><v-icon class="icon" scale="1"  name="vials"></v-icon><small>Laboratório</small></span><v-icon class=" arrow" scale="1"  name="caret-down"/></li>
                    <li><span><v-icon class="icon" scale="1"  name="user-md"></v-icon><small>Médicos</small></span><v-icon class=" arrow" scale="1"  name="caret-down"/></li>

                </ul>
            </div>
    </div>
</template>

<script>
import ConfItem from '../Configuracoes.vue';
export default {
    components:{
        ConfItem
    },

    data(){
        return {
            hideCon:false,
        }
    },
    methods:{
        hideConf(){
            this.hideCon=!this.hideCon;
        },
    }
}
</script>

<style>

</style>
