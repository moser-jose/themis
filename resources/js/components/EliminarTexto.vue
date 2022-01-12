<template>
    <div v-if="this.lActivo===true" :id="id" class="text-delete" @click="handleElimanarTexto()">
        <span>+</span>
    </div>
</template>

<script type="text/javascript">
export default {
    props:{
        activo:{
            type:Boolean,
            default:false
        },
        id:{
            type:String,
            default:''
        }
    },
    data(){
        return{
            usuario:null,
            lActivo:false,
            lDelete:false
        }
    },
    methods:{
        handleElimanarTexto(){
            const usuario= document.getElementById(this.id);
            usuario.focus();
            this.lActivo=false;
        }
    },
    created() {
        this.lActivo=this.activo;
    },
    watch:{
        lActivo(value){
            this.$emit('update:activo',value)
        }
    }
}
</script>

<style lang="scss">

    .text-delete{
        display: flex;
        align-content: center;
        justify-content: center;
        background-color: #767676;
        height: 16px;
        width: 16px ;
        border-radius: 50%;
        span{
            transform: rotate(45deg);
            font-weight: 500;
            color: #fff;
            cursor: pointer;
            font-size: 13px;
        }
        &:hover{
            background-color: #585656;
        }
    }

</style>
