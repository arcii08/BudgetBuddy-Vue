<template>
  <tr>
    <td class="px-6 py-4 whitespace-nowrap">
      <div class="text-sm font-medium text-gray-900"><img src="../../../static/tarjeta.svg" alt="tarjeta" class="h-8">
      </div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
      <div class="text-sm font-medium text-gray-900">{{ tarjeta.nombre_titular }}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
      <div class="text-sm font-medium text-gray-900">{{ truncatedNumero }}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
      <div class="text-sm font-medium text-gray-900">{{ tarjeta.fecha_expiracion }}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
      <div class="text-sm font-medium text-gray-900">{{ tarjeta.cvc }}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap inline">
      <!-- <ModalTarjetaEditar v-bind:key="tarjeta.id"></ModalTarjetaEditar> -->
      <Link :href="route('tarjetas-destroy', tarjeta.id)"
        class="btn border-slate-200 hover:border-slate-300 text-slate-600">
      <button @click="Eliminar" class="p-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="ai ai-TrashCan">
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
  <!-- <div>
    <p>ID: {{ tarjeta.id }}</p>
    <p>Nombre Titular: {{ tarjeta.nombre_titular }}</p>
    <p>Número: {{ tarjeta.numero }}</p>
    <p>Fecha de Expiración: {{ tarjeta.fecha_expiracion }}</p>
    <p>CVC: {{ tarjeta.cvc }}</p>
  </div> -->
</template>
<script>
export default {
  props: {
    tarjeta: {
      type: Object,
      required: true
    }
  },
  computed: {
    truncatedNumero() {
      const numero = this.tarjeta.numero;
      // Obtener los últimos cuatro dígitos del número de tarjeta
      const ultimosCuatroDigitos = numero.slice(-4);
      // Generar una versión truncada del número de tarjeta con asteriscos para ocultar los dígitos restantes
      const numeroTruncado = '****-****-****-' + ultimosCuatroDigitos;
      return numeroTruncado;
    }
  }
}
</script>
<script setup>
import { Link } from '@inertiajs/vue3';
</script>