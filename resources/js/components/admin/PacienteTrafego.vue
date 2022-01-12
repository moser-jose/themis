<template>
  <div class="paciente-trafego">
      <table>
          <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Consulta</th>
                    <th>Data/Hora</th>
                    <th>Estado</th>
                    <th>Médico</th>
                    <th>Localização</th>
                </tr>
          </thead>
           <tbody>
                <tr>
                    <td>P-102</td>
                    <td>Moser José</td>
                    <td>923000000</td>
                    <td>Saúde Geral</td>
                    <td>22/10/2021/09:20 </td>
                    <td><span class="estado">Grave</span></td>
                    <td><router-link to="/">Paulo Perez</router-link></td>
                    <td>Laboratório</td>
                </tr>
                <tr>
                    <td>P-402</td>
                    <td>Andre Mateus</td>
                    <td>923010020</td>
                    <td>Saúde Geral</td>
                    <td>22/10/2021/09:20 </td>
                    <td><span class="estado">Grave</span></td>
                    <td><router-link to="/">Paulo Perez</router-link></td>
                    <td>Laboratório</td>
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
