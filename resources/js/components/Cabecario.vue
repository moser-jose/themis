<template>
    <div class="cabecalho">
        <div class="texto">
            <v-icon class="icon" scale="1.2"  :name="icon"/>
            <span>{{nome}}</span>
            <p>{{descricao}}</p>
        </div>
        <div v-if="ver===true" class="botao-ver">
            <router-link to="/" class="btn-ver"><v-icon class="icon" scale="1.2"  name="grip-horizontal"/>Ver mais</router-link>
        </div>
    </div>
</template>

<script>
export default {
    props:{
        icon:{
            type:String,
            default:''
        },
        ver:{
            type:Boolean,
            default:false
        },
        nome:{
            type:String,
            default:''
        },
        descricao:{
            type:String,
            default:''
        }
    }
}
</script>

<style>

</style>
