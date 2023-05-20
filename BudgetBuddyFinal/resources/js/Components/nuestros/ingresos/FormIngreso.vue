<script setup>
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';
import Boton from '../Boton.vue';

const confirmingCardAddition = ref(false);
const form = useForm({
    descripcion: '',
    monto: '',
    fecha: '',

});

const confirmCardAddition = () => {
    confirmingCardAddition.value = true;
};

const closeModal = () => {
    confirmingCardAddition.value = false;
    resetForm();
};

const resetForm = () => {
    form.descripcion = '';
    form.monto = '';
    form.fecha = '';

};
const submit = () => {
    form.post(route('ingresos.store'));
};
</script>
<template>
    <form @submit.prevent="submit" method="post">
        <div class="p-6 bg-[#d8eefe] rounded-xl shadow-2xl">
            <h2 class="text-lg font-medium text-gray-900">Agrega un ingreso</h2>
            <div class="mt-6 py-4">
                <InputLabel for="descripcion" value="Descripcion" />
                <TextInput id="descripcion" v-model="form.descripcion" type="text" class="mt-1 block w-full"
                    placeholder="Descripcion" />
                <InputLabel for="monto" value="Monto" />
                <TextInput id="monto" v-model="form.monto" type="text" class="mt-1 block w-full" placeholder="€"
                    maxlength="16" />
                <InputLabel for="fecha" value="Fecha" />
                <TextInput id="fecha" v-model="form.fecha" type="date" class="mt-1 block w-full" />
            </div>
            <div class="flex mt-4 file:gap-2 text-right">
                <Boton class="ml-3" type="submit">Aceptar</Boton>
            </div>
        </div>
    </form>
</template>
