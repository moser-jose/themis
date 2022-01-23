<template>
  <div class="paciente-trafego">
      <table>
          <thead>
                <tr>
                    <th>Código</th>
                    <th>Tipo</th>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Responsável</th>
                    <th>Pago</th>
                    <th>Operações</th>
                </tr>
          </thead>
           <tbody>
                <tr>
                    <td>P-102</td>
                    <td><span class="estado"><v-icon class="icon" scale="1"  name="user-md"/> Consulta</span></td>
                    <td>Saúde Geral</td>
                    <td>22/10/2021</td>
                    <td>09:20</td>
                    <!-- <td><span class="estado">Grave</span></td> -->
                    <td><router-link to="/"><span class="estado exa"><v-icon class="icon" scale="1"  name="user-md"/>Mauro de Oliveira Andre - (Médico)</span></router-link></td>
                    <td><span class="estado sim"><v-icon class="icon" scale="1"  name="check-circle"/> Sim</span></td>
                    <td>
                        <router-link class="oper" to="/"><v-icon class="icon" scale="1"  name="eye"/></router-link>
                        <router-link class="oper op" to="/"><v-icon class="icon" scale="1"  name="trash-alt"/></router-link>
                    </td>
                </tr>
                <tr>
                    <td>P-102</td>
                    <td><span class="estado exa"><v-icon class="icon" scale="1"  name="vials"/> Exame</span></td>
                    <td>Urina</td>
                    <td>22/10/2021</td>
                    <td>09:20</td>
                    <!-- <td><span class="estado">Grave</span></td> -->
                    <td><router-link to="/"><span class="estado exa"><v-icon class="icon" scale="1"  name="user"/>Paulo Perez - (Técnico de Laboratório)</span></router-link></td>
                    <td><span class="estado nao"><v-icon class="icon" scale="1"  name="ban"/> Não</span></td>
                    <td>
                        <router-link class="oper" to="/"><v-icon class="icon" scale="1"  name="eye"/></router-link>
                        <router-link class="oper op" to="/"><v-icon class="icon" scale="1"  name="trash-alt"/></router-link>
                    </td>
                </tr>
      </tbody>
      </table>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
