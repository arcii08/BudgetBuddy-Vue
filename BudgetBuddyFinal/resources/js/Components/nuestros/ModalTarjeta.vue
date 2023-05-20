<script setup>
import { useForm } from '@inertiajs/vue3';
import Boton from './Boton.vue';
import InputLabel from '@/Components/InputLabel.vue';
import ModalTemplate from '@/Components/nuestros/ModalTemplate.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { ref } from 'vue';

const confirmingCardAddition = ref(false);
const form = useForm({
    cuenta_bancaria_id: '',
    nombre_titular: '',
    numero: '',
    fecha_expiracion: '',
    cvc: '',
});

const confirmCardAddition = () => {
    confirmingCardAddition.value = true;
};

const closeModal = () => {
    confirmingCardAddition.value = false;
    resetForm();
};
const resetForm = () => {
    form.value.cuenta_bancaria_id = '';
    form.value.nombre_titular = '';
    form.value.numero = '';
    form.value.fecha_expiracion = '';
    form.value.cvc = '';
};
const submit = () => {
    form.post(route('tarjetas.store'));
};
</script>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            cuentas: [],
        };
    },
    created() {
        axios.get('/cuentas-json')
            .then(response => {
                this.cuentas = response.data;
            })
            .catch(error => {
                console.log(error);
            });
    },
}
</script>
<template>
    <section class="space-y-6">
        <Boton @click="confirmCardAddition">Agregar Tarjeta</Boton>
        <ModalTemplate :show="confirmingCardAddition" @close="closeModal">
            <form @submit.prevent="submit" method="post">
                <div class="p-6">
                    <h2 class="text-lg font-medium text-gray-900">Agrega una tarjeta</h2>
                    <div class="mt-6 py-4">
                        <InputLabel for="cuenta_bancaria">Elige tu cuenta:</InputLabel>
                        <select id="tipo_cuenta" v-model="form.cuenta_bancaria_id" placeholder="Elige tu cuenta"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            required>
                            <option v-for="cuenta in cuentas" :value="cuenta.id">{{cuenta.id}} - {{cuenta.numero_cuenta }}</option>
                        </select>


                        <InputLabel for="nombre_titular" value="Nombre de la tarjeta" />
                        <TextInput id="nombre_titular" v-model="form.nombre_titular" type="text" class="mt-1 block w-full"
                            placeholder="Nombre de la tarjeta" />
                        <InputLabel for="numero" value="Núm. Tarjeta Crédito" />
                        <TextInput id="numero" v-model="form.numero" type="text" class="mt-1 block w-full"
                            placeholder="****-****-****-****" maxlength="16" />
                        <InputLabel for="fecha_expiracion" value="Fecha de vencimiento" />
                        <TextInput id="fecha_expiracion" v-model="form.fecha_expiracion" type="date"
                            class="mt-1 block w-full" />
                        <InputLabel for="cvc" value="CVC" />
                        <TextInput id="cvc" v-model="form.cvc" type="text" class="mt-1 block w-full" placeholder="CVC"
                            maxlength="3" />
                    </div>
                    <div class="mt-6 flex justify-end">
                        <SecondaryButton @click="closeModal">Cancelar</SecondaryButton>
                        <Boton class="ml-3" type="submit">Agregar</Boton>
                    </div>
                </div>
            </form>
        </ModalTemplate>
    </section>
</template>
