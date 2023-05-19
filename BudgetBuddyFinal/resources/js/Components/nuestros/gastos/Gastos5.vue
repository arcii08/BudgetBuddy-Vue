<template>
    <div>
        <table class="min-w-full justify-center">
            <thead class="bg-[#d8eefe]">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
                        Fecha
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
                        Descripcion
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
                       Monto
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">

                    </th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-black uppercase tracking-wider">
                        Acciones
                    </th>

                </tr>
            </thead>
            <tbody v-for="gasto in sortedGastos.slice(0, 5)" :key="gasto.id" class="divide-y divide-gray-200">
                <GastoComponente :gasto="gasto" />
            </tbody>
        </table>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            gastos: [],
        };
    },
    created() {
        axios.get('/gastos-json')
            .then(response => {
                this.gastos = response.data;
            })
            .catch(error => {
                console.log(error);
            });
    },
    components: {
        GastoComponente
    },
    computed: {
    sortedGastos() {
      return this.gastos.sort((a, b) => new Date(b.fecha) - new Date(a.fecha));
    },
  },
}
</script>
<script setup>
import GastoComponente from './GastoComponente.vue';
</script>
