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
    <tbody class="divide-y divide-gray-200">
      <tr v-for="t in $page.props.tarjeta" :key="t.id">
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm font-medium text-gray-900"><img src="../../../static/tarjeta.svg" alt="tarjeta" class="h-8">
          </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm font-medium text-gray-900">{{ t.nombre_titular }}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm font-medium text-gray-900">{{ t.numero }}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm font-medium text-gray-900">{{ t.fecha_expiracion }}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm font-medium text-gray-900">{{ t.cvc }}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap inline">
          <ModalTarjetaEditar v-bind:key="t.id"></ModalTarjetaEditar>
          <Link :href="route('tarjetas-destroy', t.id)"
            class="btn border-slate-200 hover:border-slate-300 text-slate-600">
          <button @click="Eliminar">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
              class="ai ai-TrashCan">
              <path d="M4 6h16l-1.58 14.22A2 2 0 0 1 16.432 22H7.568a2 2 0 0 1-1.988-1.78L4 6z" />
              <path d="M7.345 3.147A2 2 0 0 1 9.154 2h5.692a2 2 0 0 1 1.81 1.147L18 6H6l1.345-2.853z" />
              <path d="M2 6h20" />
              <path d="M10 11v5" />
              <path d="M14 11v5" />
            </svg>
          </button>
          </Link>
        </td>
      </tr>
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
  mounted() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      axios.get('/tarjeta-json')
        .then(response => {
          this.tarjetas = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
  },
};
</script>
<script setup>
import { Link } from '@inertiajs/vue3';
import ModalTarjetaEditar from './ModalTarjetaEditar.vue';
</script>