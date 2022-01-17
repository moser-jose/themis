<template>
    <div class="cabecalho voltar">
        <div class="botao-ver">
            <span @click="$router.back()"  class="btn-ver back"><v-icon class="icon" scale="1.2"  name="caret-left"/>Voltar</span>
        </div>
        <div class="texto">
            <v-icon class="icon" scale="1.2"  :name="icon"/>
            <span>{{nome}}</span>
            <p>{{descricao}}</p>
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
