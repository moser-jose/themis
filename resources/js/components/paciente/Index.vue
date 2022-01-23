<template>
    <div class="home" >
        <esquerda/>
        <div class="direita">
            <div class="dire">
                <form class="cab" method="POST">
                        <cabecario :icon="'columns'" :cabe="true" :voltar="true" :ver="false" :nome="'Dashboard'" :descricao="'Página do paciente, veja aqui as principais informações'"/>
                        <div class="pesq">
                            <small><v-icon class="icon" scale="1.1"  name="search"/></small>
                            <input type="text" name="" id="" placeholder="Actividades do paciente">
                            <!-- <button type="submit" class="btn">Pesquisar</button> -->
                            <small><v-icon class="icon" scale="1.1"  name="filter"/></small>
                        </div>
                </form>

                <div class="ad-consulta">
                    <span @click="handleModal()"><v-icon class="icon"   name="user-injured"/> Marcar Consulta</span>
                    <span ><v-icon class="icon marc"   name="user-clock"/> Agendar Consulta</span>
                    <span class="exa" @click="handleModal()"><v-icon class="icon"   name="vial"/> Realizar Exames</span>
                </div>


                <cabecario :voltar="false" :icon="'user-injured'" :ver="false" :nome="'Dados pessoais do paciente'" :descricao="'Todas as informações pessoais relevantes do paciente'"/>

                <div class="dados-pessoais">
                    <div class="img">
                        <img src="storage/img/m.jpg" alt="">
                    </div>
                    <div class="dados">
                         <div class="fle-d">
                            <div class="dad">
                                <label for="">Nome Completo</label>
                                <span><small><v-icon class="icon" scale="1"  name="user"/></small> Moser Zeferino Vicente José</span>
                            </div>
                            <div class="dad">
                                <label for="">Nº Processo</label>
                                <span><small><v-icon class="icon" scale="1"  name="id-badge"/></small> 453-123</span>
                            </div>
                            <div class="dad">
                                <label for="">Sexo</label>
                                <span><small><v-icon class="icon" scale="1"  name="male"/></small> Masculino</span>
                            </div>

                        </div>
                        <div class="fle-d">
                            <div class="dad">
                                <label for="">Nº de BI</label>
                                <span><small><v-icon class="icon" scale="1"  name="fingerprint"/></small> 0009433847LA38</span>
                            </div>
                             <div class="dad">
                                <label for="">Data Nascimento</label>
                                <span><small><v-icon class="icon" scale="1"  name="calendar"/></small> 12/04/1991 - (31 Anos)</span>
                            </div>
                            <div class="dad">
                                <label for="">Estado Civil</label>
                                <span><small><v-icon class="icon" scale="1"  name="restroom"/></small> Solteiro</span>
                            </div>

                        </div>
                        <div class="fle-d">
                            <div class="dad">
                                <label for="">Telefone</label>
                                <span><small><v-icon class="icon" scale="1"  name="mobile-alt"/></small> 923819419</span>
                            </div>
                            <div class="dad">
                                <label for="">E-mail</label>
                                <span><small><v-icon class="icon" scale="1"  name="envelope"/></small> mosmmy.jose@gmail.com</span>
                            </div>
                            <div class="dad">
                                <label for="">Seguro</label>
                                <span><small class="asseg"><v-icon class="icon" scale="1"  name="check-circle"/> Assegurado</small> </span>
                            </div>
                        </div>
                        <div class="fle-d">
                            <div class="dad">
                                <label for="">Endereço</label>
                                <span><small><v-icon class="icon" scale="1"  name="map-marker-alt"/></small>Cidade Alta, rua do pavilhão</span>
                            </div>
                        </div>
                    </div>
                    <div class="operacoes">
                        <router-link to="/" class="butn"><v-icon class="icon" scale="1"  name="pen"/> Editar dados</router-link>
                        <router-link to="/" class="butn"><v-icon class="icon" scale="1"  name="pen"/> Editar dados</router-link>
                        <router-link to="/" class="butn"><v-icon class="icon" scale="1"  name="pen"/> Editar dados</router-link>
                        <router-link to="/" class="butn"><v-icon class="icon" scale="1"  name="trash-alt"/> Eliminar paciente</router-link>
                    </div>
                </div>

                <cabecario :voltar="false" :icon="'user-injured'" :ver="false" :nome="'Dados do seguro, e de emergência'" :descricao="'Dados secundários do paciente'"/>
                <div class="dados-pessoais outros">
                    <div class="img">
                        <div class="titulo">
                            <span>Seguro de Saúde <small class="asseg"><v-icon class="icon" scale="1"  name="check-circle"/></small></span>
                        </div>
                        <div class="dados">
                            <div class="fle-d">
                                <div class="dad">
                                    <label for="">Empresa</label>
                                    <span><small><v-icon class="icon" scale="1"  name="building"/></small> Moser Zeferino Vicente José</span>
                                </div>
                                <div class="dad">
                                    <label for="">Nº Apólice</label>
                                    <span><small><v-icon class="icon" scale="1"  name="id-badge"/></small> 453-123</span>
                                </div>

                            </div>
                            <div class="fle-d">
                                <div class="dad">
                                    <label for="">Data Inicio</label>
                                    <span><small><v-icon class="icon" scale="1"  name="calendar"/></small> 12/04/1991</span>
                                </div>
                                <div class="dad">
                                    <label for="">Data Fim</label>
                                    <span><small><v-icon class="icon" scale="1"  name="calendar"/></small> 12/04/1991</span>
                                </div>
                                 <div class="dad">
                                    <label for="">Duração</label>
                                    <span><small><v-icon class="icon" scale="1"  name="clock"/></small> 3 Anos</span>
                                </div>


                            </div>
                            <div class="fle-d">
                            <div class="dad">
                                <label for="">Telefone</label>
                                <span><small><v-icon class="icon" scale="1"  name="mobile-alt"/></small> 923819419</span>
                            </div>
                            <div class="dad">
                                <label for="">E-mail</label>
                                <span><small><v-icon class="icon" scale="1"  name="envelope"/></small> mosmmy.jose@gmail.com</span>
                            </div>

                            </div>
                        </div>
                    </div>
                    <div class="img">
                        <div class="titulo">
                            <span>Contactos de Emergência <small><v-icon class="icon" scale="1"  name="people-arrows"/></small></span>
                        </div>
                        <div class="dados">
                            <div class="fle-d">
                                <div class="dad">
                                    <label for="">Nome</label>
                                    <span><small><v-icon class="icon" scale="1"  name="user"/></small> Moser Zeferino Vicente José</span>
                                </div>
                                <div class="dad">
                                    <label for="">Parentesco</label>
                                    <span><small><v-icon class="icon" scale="1"  name="people-arrows"/></small> Irmão</span>
                                </div>
                                <div class="dad">
                                    <label for="">Telefone</label>
                                    <span><small><v-icon class="icon" scale="1"  name="mobile-alt"/></small> 923819419</span>
                                </div>

                            </div>
                            <div class="fle-d">
                                <div class="dad">
                                    <label for="">Nome</label>
                                    <span><small><v-icon class="icon" scale="1"  name="user"/></small> Moser Zeferino Vicente José</span>
                                </div>
                                <div class="dad">
                                    <label for="">Parentesco</label>
                                    <span><small><v-icon class="icon" scale="1"  name="people-arrows"/></small> Irmão</span>
                                </div>
                                <div class="dad">
                                    <label for="">Telefone</label>
                                    <span><small><v-icon class="icon" scale="1"  name="mobile-alt"/></small> 923819419</span>
                                </div>

                            </div>
                            <div class="fle-d">
                                <div class="dad">
                                    <label for="">Nome</label>
                                    <span><small><v-icon class="icon" scale="1"  name="user"/></small> Moser Zeferino Vicente José</span>
                                </div>
                                <div class="dad">
                                    <label for="">Parentesco</label>
                                    <span><small><v-icon class="icon" scale="1"  name="people-arrows"/></small> Irmão</span>
                                </div>
                                <div class="dad">
                                    <label for="">Telefone</label>
                                    <span><small><v-icon class="icon" scale="1"  name="mobile-alt"/></small> 923819419</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="opc-paciente">
                    <span class="hist"><v-icon class="icon" scale="1"  name="notes-medical"/> Histórico Médico</span>
                    <span>Hábitos</span>
                    <span>Relatórios</span>
                    <span>Internamentos</span>
                    <span>Documentos</span>
                </div>

                <div>
                    <div class="hist-opc-paciente">
                        <span class="hist">Histórico Paciente</span>
                        <span>Histórico Familiar</span>

                    </div>
                    <div class="dados-pessoais outros">
                        <div class="img">
                            <div class="titulo">
                                <span>Estado médico <small ><v-icon class="icon" scale="1"  name="notes-medical"/></small></span>
                            </div>
                        </div>
                        <div class="img">
                            <div class="titulo">
                                <span>Exames com resultados permanente <small><v-icon class="icon" scale="1"  name="vials"/></small></span>
                            </div>
                        </div>
                    </div>
                    <div class="dados-pessoais outros">
                        <div class="img">
                            <div class="titulo">
                                <span>Alergias <small ><v-icon class="icon" scale="1"  name="allergies"/></small></span>
                            </div>
                        </div>
                        <div class="img">
                            <div class="titulo">
                                <span>Vacinas <small><v-icon class="icon" scale="1"  name="syringe"/></small></span>
                            </div>
                        </div>
                    </div>
                    <cabecario :voltar="false" :icon="'user-injured'" :ver="false" :nome="'Lista de consultas e exames realizados'" :descricao="'Informação sobre as as consultas e exames realizados'"/>
                    <paciente-consultas/>
                </div>


                <!-- <cabecario :voltar="false" :icon="'user-injured'" :ver="false" :nome="'Lista de consultas e exames realizados'" :descricao="'Informação sobre as as consultas e exames realizados'"/>
                <paciente-consultas/>
                <cabecario :voltar="false" :icon="'user-injured'" :ver="false" :nome="'Lista de consultas e exames realizados'" :descricao="'Informação sobre as as consultas e exames realizados'"/>
                 --><!-- Histórico, Relatórios, Documentos, Internamentos -->



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
    import PacienteConsultas from '../paciente/PacienteConsultas.vue'
    import InputElement from '../Input.vue'
    import EliminarTexto from '../EliminarTexto.vue';
    import PacienteDados from '../recepcao/PacienteDados.vue'
    import PacienteDadosSkeleton from '../recepcao/PacienteDadosSkeleton.vue';
    export default {
        components:{
            Cabecario,
            PacienteConsultas,
            InputElement,
            EliminarTexto,
            PacienteDados,
            PacienteDadosSkeleton,
            Esquerda
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
