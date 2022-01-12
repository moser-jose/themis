<template>
    <div class="flex-input" v-if="ptype==='text' || ptype==='number' || ptype==='email' ">
        <v-icon class="icon" scale="1.2"  :name="picon"/>
        <input
            :type="ptype"
            :name="pname"
            :id="pid"
            :value="eliminarT===true?pvalue:''"
            :placeholder="pplaceholder"
            @input="pvalue=$event.target.value"
            @keyup="texto"
        />
        <eliminar-texto :id="pid"  :activo.sync="eliminarT" v-if="eliminarT===true"></eliminar-texto>
    </div>
    <div class="flex-input" v-else-if="ptype==='password'">
        <v-icon class="icon" scale="1.2"  :name="picon"/>
        <input
            :type="ptype"
            :name="pname"
            :id="pid"
            :value="pvalue"
            :placeholder="pplaceholder"
            @input="pvalue=$event.target.value"
            @keyup="view()"
        />
         <v-icon @click="handleView()" v-if="viewBotao===true"  class="icon n-view" scale="1.1"  name="eye"/>
         <v-icon @click="handleView()" v-else-if="viewBotao===false"  class="icon n-view" scale="1.1"  name="eye-slash"/>
    </div>
</template>

<script type="text/javascript">
    import EliminarTexto from '../components/EliminarTexto.vue'
    export default {
        components:{
            EliminarTexto
        },
        props:{
            icon:{
                type:String,
                default:''
            },
            type:{
                type:String,
                default:'text'
            },
            name:{
                type:String,
                default:''
            },
            id:{
                type:String,
                default:''
            },
            placeholder:{
                type:String,
                default:''
            },
            value:{
                type:String,
                default:''
            },
            viewEye:{
                type:String,
                default:''
            }
        },
        data(){
            return{
                picon:null,
                ptype:'',
                pname:'',
                pid:'',
                pplaceholder:'',
                pvalue:'',
                pviewEye:false,
                viewBotao:null,
                eliminarT:false
            }
        },
        methods:{
            texto(){
                if(this.pvalue!==""){
                    this.eliminarT=true;
                }
                else{
                    this.eliminarT=false;
                }
            },
            view(){
                const input= document.getElementById(this.pid);
                if(this.pvalue!=="" && input.type==="text"){
                    this.viewBotao=false;
                }
                else if(this.pvalue!=="" && input.type==="password"){
                    this.viewBotao=true;
                }
                else{
                    this.viewBotao=null
                    input.type="password";
                }
            },
            handleView(){
                this.viewBotao=!this.viewBotao;
                const input= document.getElementById(this.pid);
                    if(this.viewBotao===false){
                        input.type="text";
                        input.focus();
                    }
                    else{
                        input.type="password";
                        input.focus();
                    }
            }
        },
        created(){
            this.picon=this.icon;
            this.ptype=this.type;
            this.pname=this.name;
            this.pid=this.id;
            this.pplaceholder=this.placeholder;
            this.pvalue=this.value;
        },
        watch:{
        pvalue(value){
            this.$emit('update:pvalue',value)
        }
    }

    }
</script>

<style lang="scss">

</style>
