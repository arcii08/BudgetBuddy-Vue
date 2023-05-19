<template>
  <table class="min-w-full">
    <thead class="bg-[#d8eefe]">
      <tr class="rounded-xl">
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
          Titular
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
          Banco
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
          Tipo de cuenta
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
          Número de cuenta
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
          Monto
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        </th>
      </tr>
    </thead>
    <tbody v-for="cuenta in cuentas" :key="cuenta.id" class="divide-y divide-gray-200">
      <CuentaComponente :cuenta="cuenta" />
    </tbody>
  </table>
</template>
<script>
import axios from 'axios';
export default {
  data() {
    return {
      cuentas: [],
    };
  },
  mounted() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      axios.get('/cuentas-json')
        .then(response => {
          this.cuentas = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
  },
};
</script>
<script setup>
import CuentaComponente from './CuentaComponente.vue';
</script>