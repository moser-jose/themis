<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Themis - Gestão de Clínicas</title>
    </head>
    <body>
        <div id="app">
            <div class="container">
                <div class="home">
                    <div class="esquerda">
                        <div class="logo">
                            <div class="logo-s">
                                <img src="{{url('storage/img/logo.svg')}}">
                                <span>Themis</span>
                            </div>

                            <div class="menu-line" >
                                <span id="bar1"></span>
                                <span id="bar2"></span>
                            </div>

                        </div>
                        <div class="user">
                            <img src="{{url('storage/img/m.jpg')}}" alt="">
                            <h3>Moser José</h3>
                            <span class="privi">Administrador</span>
                            <div class="operacoes">
                                <span>
                                    <v-icon class="icon" scale="1.2"  name="cog"/>
                                    {{-- <ConfItem v-if="hideCon===true"/> --}}
                                </span>
                                <span><v-icon class="icon" scale="1.2"  name="sign-out-alt"/></span>
                            </div>
                        </div>
                        <div class="menus">
                            <ul>
                                <li><router-link to="/home"><v-icon class="icon" scale="1"  name="columns"></v-icon><small>Dashboard</small></router-link></li>
                                <li><router-link to="/home"><v-icon class="icon" scale="1"  name="hospital-user"></v-icon><small>Recepção</small></router-link> <span class="caxa-type">Aberto</span></li>
                                <li><span><v-icon class="icon" scale="1"  name="id-card"></v-icon><small>Pacientes</small></span> <v-icon class=" arrow" scale="1"  name="caret-down"/></li>
                                <li><span><v-icon class="icon" scale="1"  name="user-injured"></v-icon><small>Consultas</small></span><v-icon class=" arrow" scale="1"  name="caret-down"/></li>
                                <li><span><v-icon class="icon" scale="1"  name="vials"></v-icon><small>Laboratório</small></span><v-icon class=" arrow" scale="1"  name="caret-down"/></li>
                                <li><span><v-icon class="icon" scale="1"  name="user-md"></v-icon><small>Médicos</small></span><v-icon class=" arrow" scale="1"  name="caret-down"/></li>

                            </ul>
                        </div>
                    </div>
                    <div class="direita">
                        <router-view></router-view>
                    </div>
                </div>

            </div>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
    </body>
</html>
