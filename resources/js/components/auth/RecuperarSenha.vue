<template>

    <div class="login">

        <form action="" name="login" id="frmLogin">
            <div class="img">
                <img src="storage/img/logo.svg" alt="">
                <h2>Themis</h2>
                <h5>Gestão de Clínicas</h5>
            </div>
            <h1><small>R</small>ecuperar a senha</h1>
            <div class="mid">
                <input-element type="text" icon="user-circle" name="usuario" id="usuario" placeholder="Usuário ou e-mail"></input-element>
            </div>
<div class="actions">
                <button type="submit" class="btn btn-login">Enviar</button>
                <router-link to="/">Possui uma conta? Login</router-link>
            </div>
        </form>
        <div class="footer">
            <p><a href="http://www.mekadir.com" target="_blank" rel="noopener noreferrer">Mekadir</a> @{{ new Date().getFullYear()}} - Todos os direitos reservados</p>
        </div>
    </div>

</template>

<script lang="text/javascript">

    import EliminarTexto from '../EliminarTexto.vue'
    import InputElement from '../Input.vue'
    export default{

        components: {
            EliminarTexto,
            InputElement
        },
        data(){
            return {
                form:{
                    foto:"storage/img/logoC.svg"
                },
                errors:{},
                viewBotao:null,
                eliminarT:false,
                activo:false
            }
        },
        methods: {
            texto({target}){
                if(target.value!==""){
                    this.eliminarT=true;

                }
                else{
                    this.eliminarT=false;
                }
            },
            view({target}){
                const senha= document.getElementById('senha');
                if(target.value!=="" && senha.type==="text"){
                    this.viewBotao=false;
                }
                else if(target.value!=="" && senha.type==="password"){
                    this.viewBotao=true;
                }
                else{
                    this.viewBotao=null
                    senha.type="password";
                }
            },
            handleView(){
                this.viewBotao=!this.viewBotao;
                const senha= document.getElementById('senha');
                if(this.viewBotao===false){
                        senha.type="text";
                        senha.focus();
                    }
                    else{
                        senha.type="password";
                        senha.focus();
                    }
            }
        },
    }

</script>

<style lang="scss">
    .flex{
    }

</style>
