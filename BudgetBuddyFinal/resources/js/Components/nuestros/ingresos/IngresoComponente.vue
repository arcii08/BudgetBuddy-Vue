<script setup>
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';
import Boton from '../Boton.vue';
import { Link } from '@inertiajs/vue3';

const form = useForm({
    id: '',
    descripcion: '',
    monto: '',
    fecha: '',

});



const submit = () => {
    form.post(route('ingresos.update'));
};
</script>

<template>
    <tr class="justify-center">

        <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm font-medium text-gray-900">{{ ingreso.fecha }}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm font-medium text-gray-900">{{ ingreso.descripcion }}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm font-medium text-emerald-500">+{{ ingreso.monto }} €</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-center">
            <div class="text-sm font-medium text-gray-900 "> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-emerald-500  ms-5 -me-10">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                </svg></div>
        </td>
        <td class="px-6 py-4  inline float-right">
            <!-- <ModalTarjetaEditar v-bind:key="tarjeta.id"></ModalTarjetaEditar> -->
            <Link :href="route('ingresos-destroy', ingreso.id)"
                class="btn border-slate-200 hover:border-slate-300 text-slate-600">
            <button @click="Eliminar" class="p-2">
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
</template>
<script>
export default {
    props: {
        ingreso: {
            type: Object,
            required: true
        }
    }
}
</script>
