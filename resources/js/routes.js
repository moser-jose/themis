
let Login=require('./components/auth/Login.vue').default;
let Recuperar=require('./components/auth/RecuperarSenha.vue').default;
let Home=require('./components/admin/Index.vue').default;
let Recepcao=require('./components/recepcao/Index.vue').default;
let ConsPass=require('./components/recepcao/FazerConsulta.vue').default;
let Paciente=require('./components/paciente/Index.vue').default;
export const routes =[
    { path:'/', component:Login, name:'/' },
    { path:'/recuperar-senha', component:Recuperar, name:'recuperar-senha' },
    { path:'/home', component:Home, name:'home' },
    { path:'/paciente', component:Paciente, name:'paciente' },
    { path:'/recepcao', component:Recepcao, name:'recepcao' },
    { path:'/recepcao/consulta-paciente', component:ConsPass, name:'consulta-paciente' },
    { path: "/:catchAll(.*)*", component: Login, name:'log'},

]
