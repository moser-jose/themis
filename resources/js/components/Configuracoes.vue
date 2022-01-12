<template>
    <div class="conf">
        <ul>
            <li><router-link to="/home"><span><v-icon class="icon" scale="1.2"  name="columns"/>Dashboard</span></router-link></li>
            <li><router-link to="/"><span><v-icon class="icon" scale="1.2"  name="clipboard-list"/>Operações do dia</span></router-link><small class="op">78</small></li>
            <li><router-link to="/"><span><v-icon class="icon" scale="1.2"  name="bell"/>Notificações</span> </router-link><small class="not">39</small></li>
            <li><router-link to="/"><span><v-icon class="icon" scale="1.2"  name="cog"/>Configurações</span></router-link></li>
            <li><router-link to="/"><span><v-icon class="icon" scale="1.2"  name="user-circle"/>Minha Conta</span></router-link></li>
            <li><router-link to="/"><span><v-icon class="icon" scale="1.2"  name="sign-out-alt"/>Sair</span></router-link></li>
        </ul>
    </div>

</template>

<script type="text/javascript">
    export default {

    }
</script>


<style lang="scss">

</style>
