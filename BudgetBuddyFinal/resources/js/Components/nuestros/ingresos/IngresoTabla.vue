<template>
    <div class="bg-[#fffffe]">
        <!-- Table -->
        <div class="">
            <table class="table-auto w-full">
                <!-- Table header -->
                <thead class="text-xs font-semibold uppercase text-slate-500 border-t border-b border-slate-200">
                    <tr>

                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-left">Fecha Pago</div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-left">Origen</div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-right"></div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-right">Cantidad</div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-right">Acciones</div>
                        </th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm divide-y divide-slate-200 border-b border-slate-200">

                    <tr v-for="ingreso in ingresos" :key="ingreso.id">

                        <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap md:w-1/2">
                            <div class="flex items-center">

                                <div class="font-medium text-slate-800">{{ ingreso.fecha }}</div>
                            </div>
                        </td>
                        <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="text-left">{{ ingreso.descripcion }}</div>
                        </td>
                        <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="text-left">
                                <div
                                    class="text-xs inline-flex font-medium rounded-full border-emerald-500 border-2 text-center px-2.5 py-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2"  class="w-6 h-6  stroke-emerald-500" >
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                        <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                            <div class="text-right font-medium text-emerald-500">
                                + {{ ingreso.monto }} €</div>
                        </td>
                        <td>
                            <router-link :to="{ name: 'ingresos.edit', params: { id: ingreso.id } }">Editar</router-link>
                            <button @click="deleteIngreso(ingreso.id)">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

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
    axios.get('/ingresos-json')
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
import Componente from '../Components/nuestros/TarjetaComponente.vue';
</script>



