<template>
    <div>
        <div class="flex">
            <div class="nome-p">
                    <div class="paci">
                        <h3><small><v-icon class="icon" scale="1.2"  name="user-injured"></v-icon></small> Maria de Jesus António</h3>
                        <span>25 Anos</span>
                    </div>
                    <div class="datos">
                        <span>
                            <v-icon class="icon" scale="1"  name="id-badge"></v-icon> 2112-7154
                        </span>

                        <span>
                            <v-icon class="icon" scale="1"  name="mobile-alt"></v-icon> 923000000
                        </span>
                        <span>
                            <small><v-icon class="icon" scale="1"  name="check-circle"></v-icon> Assegurado</small>
                        </span>
                    </div>
            </div>
        </div>
        <div class="flex">
            <div class="flex-input">
                <v-icon class="icon" scale="1.2"  name="stethoscope"/>
                <select name="consulta" id="consulta">
                    <option value="0">Selecionar a consulta</option>
                    <option value="1">Pediatria</option>
                    <option value="2">Ginecologia</option>
                    <option value="3">Estomatologia</option>
                </select>
            </div>
            <div class="flex-input">
                <v-icon class="icon" scale="1.2"  name="user-md"/>
                <select name="consulta" id="consulta">
                    <option value="0">Selecionar Médico</option>
                    <option value="1">Pedro Andrade</option>
                    <option value="2">Jorge Manuel</option>
                </select>
            </div>
        </div>
        <div class="flex">
            <div class="flex-input">
                <v-icon class="icon" scale="1.2"  name="notes-medical"/>
                <textarea name="motivo" id="motivo" cols="30" rows="4" placeholder="Insira algum motivo"></textarea>
            </div>
        </div>
        <div class="flex">
            <div class="fl">
                <div class="radio-ch">
                    <label class="enf" for="">Passar pela enfermagem ?</label>
                    <div class="aces">
                        <label  class="radioContainer">
                            <input type="radio" name="permissao_completa" id="nao" value="nao" checked>
                            <span class="circle"></span>
                            Não
                        </label>
                        <label  class="radioContainer">
                            <input type="radio" name="permissao_completa" id="sim" value="sim">
                            <span class="circle"></span>
                            Sim
                        </label>

                    </div>
                </div>
            </div>
        </div>
        <div class="flex">
            <div class="fl">
                <!-- <span>22/01/2022 - 19:20</span> -->
            </div>
            <div class="fl">
                <button class="save" type="submit"><v-icon class="icon" scale="1.2"  name="save"/> Salvar</button>
                <button class="save cancel" type="reset" @click="handleCancelar()"><v-icon class="icon" scale="1.2"  name="ban"/> Cancelar</button>
            </div>
        </div>
    </div>
</template>

<script>

</script>

<style>

</style>
