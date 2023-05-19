<template>
    <div class="mt-5">
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
                <tr>

                </tr>
            </thead>
            <tbody v-for="ingreso in sortedIngresos" :key="ingreso.id" class="divide-y divide-gray-200">
                <IngresoComponente :ingreso="ingreso" />
                <div class="">    <FormEditIngreso :ingreso="ingreso" /></div>
            </tbody>

        </table>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            ingresos: [],
        };
    },
    created() {
        axios.get('/ingresos-json')
            .then(response => {
                this.ingresos = response.data;
            })
            .catch(error => {
                console.log(error);
            });
    },
    components: {
        IngresoComponente,

        FormEditIngreso
    },
    computed: {
        sortedIngresos() {
            return this.ingresos.sort((a, b) => new Date(b.fecha) - new Date(a.fecha));
        }
    },
}
</script>
<script setup>
import IngresoComponente from './IngresoComponente.vue';
import FormEditIngreso from './FormEditIngreso.vue';
</script>
