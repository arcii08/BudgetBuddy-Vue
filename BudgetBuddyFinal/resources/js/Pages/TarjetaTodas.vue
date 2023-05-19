<template>
  <table class="min-w-full">
    <thead class="bg-[#d8eefe]">
      <tr>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
          Titular
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
          Número de tarjeta
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
          Fecha de expiración
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
          CVC
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        </th>
      </tr>
    </thead>
    <tbody v-for="tarjeta in tarjetas" :key="tarjeta.id" class="divide-y divide-gray-200">
      <TarjetaComponente :tarjeta="tarjeta" />
    </tbody>
  </table>
</template>
<script>
import axios from 'axios';
export default {
  data() {
    return {
      tarjetas: [],
    };
  },
  created() {
    axios.get('/tarjetas-json')
      .then(response => {
        this.tarjetas = response.data;
      })
      .catch(error => {
        console.log(error);
      });
  },
  components: {
    TarjetaComponente
  }
}
</script>
<script setup>
import TarjetaComponente from '../Components/nuestros/TarjetaComponente.vue';
</script>