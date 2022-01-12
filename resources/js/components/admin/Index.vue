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
            <router-link to="/"><v-icon class="icon"   name="user-injured"/> Fazer Consulta</router-link>
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
    </div>

</template>

<script>
    import ConfItem from '../Configuracoes';
    import Cabecario from '../Cabecario.vue';
    import PacienteTransito from '../admin/PacienteTrafego'
import PacienteTrafego from './PacienteTrafego.vue';
    export default {
        components:{
            ConfItem,
            Cabecario,
            PacienteTransito,
                PacienteTrafego
        },
        data(){
            return {
                hideCon:false,
                dia:true,
                semana:false,
                mes:false,
                ano:false,
                menu:false,
            }
        },
        methods:{
            hideConf(){
                this.hideCon=!this.hideCon;
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
