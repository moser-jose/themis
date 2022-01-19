<template>
    <div  :class="cabe===true ? 'cabecalho voltar' :'cabecalho' ">
        <div  class="vol">
             <div v-show="voltar===true" class="botao-ver">
                <span @click="$router.back()"  class="btn-ver back"><v-icon class="icon" scale="1.2"  name="caret-left"/>Voltar</span>
             </div>
            <div class="texto">
                <span><v-icon class="icon" scale="1.2"  :name="icon"/> {{nome}}</span>
                <p>{{descricao}}</p>
            </div>
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
        voltar:{
            type:Boolean,
            default:false
        },
        cabe:{
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
