<template>
    <div class="dire">
        <div class="header">
            <div class="titulo">
                <v-icon class="icon" scale="1.2"  name="columns"></v-icon>
                <span>Dashboard</span>
                <p>Página inicial do sistema, veja aqui as principais informações</p>
            </div>
            <span class="notif">
                <v-icon class="icon" scale="1.1"  name="bell"></v-icon>
                <small>39</small>
            </span>
        </div>
        <div class="page-user">
            <div class="img">
                <img src="storage/img/m.jpg" alt="">
                <div class="info">
                    <h1>Seja Bem Vindo, Moser!</h1>
                    <span class="notifi"><v-icon class="icon" scale="1"  name="bell"/> Você tem <span>39</span> novas notificações</span>
                    <div class="botoes">
                        <router-link to="/" class="btn m-dados"><v-icon class="icon" scale="1"  name="user-circle"/> Minha conta</router-link>
                        <router-link to="/" class="btn m-op-dia"><v-icon class="icon" scale="1"  name="clipboard-list"/> Operações do dia</router-link>
                    </div>
                </div>
            </div>
        </div>
        <div class="ad-consulta">
            <span @click="handleModal()"><v-icon class="icon"   name="user-injured"/> Fazer Consulta</span>
            <router-link to="/"><v-icon class="icon marc"   name="user-clock"/> Marcar Consulta</router-link>
        </div>
        <cabecario :icon="'chart-bar'" :ver="false" :nome="'Estatísticas importantes'" :descricao="'Mostra alguns dados importantes para a recepção'"/>
        <div class="page-opcoes">
            <ul>
                <li @click="handleDia" >Dia</li>
                <li @click="handleSemana">Semana</li>
                <li @click="handleMes">Mês</li>
                <li @click="handleAno">Ano</li>
                <div  :class="dia===true ? 'animacao s-dia' :
                semana===true ? 'animacao s-semana' : mes===true ?
                'animacao s-mes' : ano===true && 'animacao s-ano'"></div>
            </ul>
        </div>
        <div class="page-estatisticas">
            <div class="esta-">
                <div class="cab">
                    <p>Pacientes Atendidos</p>
                    <span><v-icon class="icon" scale="1.06"  name="user-injured"/></span>
                </div>
                <div class="value">
                    <p>60</p>
                    <div class="see">
                        <router-link to="/">Ver mais</router-link><!--
                        <span>100.000.00 <small>kzs</small></span> -->
                    </div>
                </div>

            </div>
            <div class="esta-">
                    <div class="cab">
                    <p>Medicos de Serviço</p>
                    <span><v-icon class="icon" scale="1.06"  name="user-md"/></span>
                </div>
                <div class="value">
                    <p>60</p>
                    <div class="see">
                        <router-link to="/">Ver mais</router-link>
                        <div class="img">
                            <router-link to="/"><img src="/storage/img/m.jpg" alt=""> <span>Moser José</span></router-link>
                            <router-link to="/"><img src="/storage/img/l.png" alt=""> <span>Mateus Adão</span></router-link>
                            <router-link to="/"><img src="/storage/img/h.png" alt=""> <span>Paulo Antunes</span></router-link>
                            <router-link to="/"><img src="/storage/img/mu.jpg" alt=""> <span>Maria Conceição</span></router-link>
                            <router-link to="/"><img src="/storage/img/mu.jpg" alt=""> <span>Pedro Marcos</span></router-link>
                        </div>
                    </div>

                </div>
            </div>
            <div class="esta-">
                    <div class="cab">
                    <p>Consultas Marcadas</p>
                    <span><v-icon class="icon" scale="1.18"  name="user-clock"/></span>
                </div>
                <div class="value">
                    <p>5</p>
                    <router-link to="/">Ver mais</router-link>

                </div>
            </div>
            <div class="esta-">
                    <div class="cab">
                    <p>Stock Baixo</p>
                    <span><v-icon class="icon" scale="1.06"  name="level-down-alt"/></span>
                </div>
                <div class="value">
                    <p>60</p>
                    <router-link to="/">Ver mais</router-link>
                </div>
            </div>
        </div>
        <cabecario :icon="'user-injured'" :ver="false" :nome="'Lista dos pacientes a serem atendidos'" :descricao="'Mostra os locais onde os pacientes estão a ser atendidos na clínica'"/>
        <paciente-trafego/>

        <div  class="modal" @click="handleClick" v-show="modal===true">
            <div class="corpo">
                <div class="titulo">
                    <h1><v-icon class="icon" scale="1.2"  name="user-injured"></v-icon> Realizar Consulta</h1>
                    <span title="Fechar" @click="handleFechar()">+</span>
                </div>
                <div class="conteudo">
                    <div class="searc">
                        <form action="">
                            <div class="flex">
                                <div class="flex-input">
                                    <v-icon class="icon" scale="1.2"  name="search"/>
                                    <input  @keyup="texto" type="text" name="paciente" id="paciente" placeholder="Introduza o nome ou o telefone"/>
                                </div>
                                <router-link class="add" to="/"><v-icon class="icon" scale="1.2"  name="user-injured"></v-icon> Novo Paciente</router-link>
                            </div>
                        </form>
                        <div class="results" v-show="eliminarT===true">
                            <ul>
                                <li><span><img src="storage/img/homem.jpg"/>Mateus de Oliveira dos Santos</span> <small class="telefone" title="Número de Telefone"><v-icon class="icon" scale=".9"  name="mobile-alt"></v-icon> 923000000</small> </li>
                                <li><span><img src="storage/img/homem.jpg"/>Moser Jose</span> <small class="telefone"><v-icon class="icon" scale=".9"  name="mobile-alt"></v-icon> 923000000</small></li>
                                <li><span><img src="storage/img/mulher.jpg"/>Maria de Jesus António</span> <small class="telefone"><v-icon class="icon" scale=".9"  name="mobile-alt"></v-icon> 923000000</small></li>
                            </ul>
                        </div>
                        <div class="flex">
                            <div class="flex-input">
                                <v-icon class="icon" scale="1.2"  name="user-injured"/>
                                <input  @keyup="texto" type="text" name="paciente" id="paciente" placeholder="Nome do Paciente"/>
                            </div>
                             <div class="flex-input">
                                <v-icon class="icon" scale="1.2"  name="search"/>
                                <input  @keyup="texto" type="text" name="paciente" id="paciente" placeholder="Introduza o nome ou o telefone"/>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-input">
                                <v-icon class="icon" scale="1.2"  name="user-injured"/>
                                <input  @keyup="texto" type="text" name="paciente" id="paciente" placeholder="Nome do Paciente"/>
                            </div>
                             <div class="flex-input">
                                <v-icon class="icon" scale="1.2"  name="search"/>
                                <input  @keyup="texto" type="text" name="paciente" id="paciente" placeholder="Introduza o nome ou o telefone"/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import ConfItem from '../Configuracoes';
    import Cabecario from '../Cabecario.vue';
    import PacienteTransito from '../admin/PacienteTrafego'
    import PacienteTrafego from '../admin/PacienteTrafego.vue';
    import InputElement from '../Input.vue'
    import EliminarTexto from '../EliminarTexto.vue'
    export default {
        components:{
            ConfItem,
            Cabecario,
            PacienteTransito,
            PacienteTrafego,
            InputElement,
            EliminarTexto
        },
        data(){
            return {
                hideCon:false,
                modal:true,
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
            hideConf(){
                this.hideCon=!this.hideCon;
            },
            handleModal(){
                this.modal=true;
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
               console.log(input.value)
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
