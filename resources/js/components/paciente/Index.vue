<template>
    <div class="home" >
        <esquerda/>
        <div class="direita">
            <div class="dire">
                <voltar :icon="'columns'" :ver="false" :nome="'Dashboard'" :descricao="'Página do paciente, veja aqui as principais informações'"/>


                <div class="ad-consulta">
                    <span @click="handleModal()"><v-icon class="icon"   name="user-injured"/> Marcar Consulta</span>
                    <span ><v-icon class="icon marc"   name="user-clock"/> Agendar Consulta</span>
                    <span class="exa" @click="handleModal()"><v-icon class="icon"   name="vial"/> Realizar Exames</span>
                </div>


                <cabecario :icon="'user-injured'" :ver="false" :nome="'Dados pessoais do paciente'" :descricao="'Todas as informações relevantes do paciente'"/>


                <cabecario :icon="'user-injured'" :ver="false" :nome="'Lista dos pacientes a serem atendidos'" :descricao="'Mostra os locais onde os pacientes estão a ser atendidos na clínica'"/>
                <paciente-trafego/>

                <div  class="modal" @click="handleClick" v-show="modal===true">
                    <div class="corpo">
                        <div class="titulo">
                            <h1><v-icon class="icon" scale="1.2"  name="user-injured"></v-icon> Marcar Consulta (22/01/2022 - 12:30)</h1>
                            <span title="Fechar" @click="handleFechar()">+</span>
                        </div>
                        <div class="conteudo">
                            <div class="searc">
                                <form action="">
                                    <div class="flex">
                                        <div class="flex-input">
                                            <v-icon class="icon" scale="1.2"  name="search"/>
                                            <input  @keyup="texto" type="text" name="paciente" id="paciente" placeholder="Introduza o nome, nº BI ou o telefone"/>
                                        </div>
                                        <router-link class="add" to="/"><v-icon class="icon" scale="1.2"  name="user-injured"></v-icon> Novo Paciente</router-link>
                                    </div>
                                    <div class="results" v-show="eliminarT===true">
                                        <ul>
                                            <li><span><img src="storage/img/homem.jpg"/>Mateus de Oliveira dos Santos</span> <small class="telefone" title="Número de Telefone"><v-icon class="icon" scale=".9"  name="mobile-alt"></v-icon> 923000000</small> </li>
                                            <li><span><img src="storage/img/homem.jpg"/>Moser Jose</span> <small class="telefone"><v-icon class="icon" scale=".9"  name="mobile-alt"></v-icon> 923000000</small></li>
                                            <li><span><img src="storage/img/mulher.jpg"/>Maria de Jesus António</span> <small class="telefone"><v-icon class="icon" scale=".9"  name="mobile-alt"></v-icon> 923000000</small></li>
                                        </ul>
                                    </div>
                                    <paciente-dados-skeleton/>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import Esquerda from '../admin/Esquerda.vue'
    import Cabecario from '../Cabecario.vue';
    import PacienteTransito from '../admin/PacienteTrafego'
    import PacienteTrafego from '../admin/PacienteTrafego.vue';
    import InputElement from '../Input.vue'
    import EliminarTexto from '../EliminarTexto.vue';
    import PacienteDados from '../recepcao/PacienteDados.vue'
    import PacienteDadosSkeleton from '../recepcao/PacienteDadosSkeleton.vue';
    import Voltar from '../CabecarioVoltar.vue';
    export default {
        components:{
            Cabecario,
            PacienteTransito,
            PacienteTrafego,
            InputElement,
            EliminarTexto,
            PacienteDados,
            PacienteDadosSkeleton,
            Esquerda,
            Voltar
        },
        data(){
            return {
                hideCon:false,
                modal:false,
                dia:true,
                semana:false,
                mes:false,
                ano:false,
                menu:false,
                eliminarT:false
            }
        },
        methods:{
            texto(){
                const input= document.getElementById("paciente");
                if(input.value!==""){
                    this.eliminarT=true;
                }
                else{
                    this.eliminarT=false;
                }
            },
            handleModal(){
                this.modal=true;
                console.log(this.modal);
            },
            handleFechar(){
                this.modal=false;
            },
            handleClick({target, currentTarget}){
                 if(target===currentTarget){
                     this.modal=false
                 }
            },
            handleValue(){
               const input= document.getElementById("paciente");
            },
            handleCancelar(){
                this.modal=false;
            },
            handleDia(){
                this.dia=true;
                this.semana=false;
                this.mes=false;
                this.ano=false;
            },
            handleSemana(){
                this.dia=false;
                this.semana=true;
                this.mes=false;
                this.ano=false;
            },
            handleMes(){
                this.dia=false;
                this.semana=false;
                this.mes=true;
                this.ano=false;
            },
            handleAno(){
                this.dia=false;
                this.semana=false;
                this.mes=false;
                this.ano=true;
            },
            handleMenu(){
                this.menu=!this.menu;
                console.log(this.menu)
            }
        }
    }
</script>

<style lang="sass">

</style>
