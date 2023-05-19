<script>
import InputLabel from '../../InputLabel.vue';
import TextInput from '../../TextInput.vue';;
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';
import Boton from '../Boton.vue';
import { Link } from '@inertiajs/vue3';

export default {
    props: {
        ingreso: {
            type: Object,
            required: true
        }
    },
    components: {
        InputLabel,
        TextInput,
        Boton,
        Link,
    },
    setup() {
        const confirmingCardAddition = ref(false);
        const form = useForm({
            id: '',
            descripcion: '',
            monto: '',
            fecha: '',
        });

        const toggleDropdown = () => {
            confirmingCardAddition.value = !confirmingCardAddition.value;
            if (confirmingCardAddition.value) {
                // Copy the ingreso data to the form object
                form.id = '';
                form.descripcion = '';
                form.monto = '';
                form.fecha = '';
            } else {
                // Reset the form object
                resetForm();
            }
        };

        const confirmCardAddition = () => {
            confirmingCardAddition.value = true;
        };

        const closeModal = () => {
            confirmingCardAddition.value = false;
            resetForm();
        };

        const resetForm = () => {
            form.id = '';
            form.descripcion = '';
            form.monto = '';
            form.fecha = '';
        };

        const submit = ($id) => {
            form.put(route('ingresos.update', $id));
        };

        return {
            InputLabel,
            TextInput,
            confirmingCardAddition,
            form,
            toggleDropdown,
            confirmCardAddition,
            closeModal,
            resetForm,
            submit,
        };
    },
};
</script>



<template>
    <div>
        <button @click="toggleDropdown" class="ml-3">Editar</button>
        <div v-if="confirmingCardAddition">
            <form @submit.prevent="submit(ingreso.id)" method="put" style="border: 0;">
                <div class="mt-0 py-2 row-auto inline-grid">
                    <h2 class="text-lg font-medium text-gray-900 col-auto me-5 ms-10"></h2>
                    <div class="col-auto me-5">
                        <InputLabel for="id" value="Id" />
                        <TextInput id="id" v-model="form.id" type="text" class="mt-1 w-full" :value="ingreso.id" disabled />
                    </div>
                    <div class="col-auto me-5">
                        <InputLabel for="descripcion" value="Descripcion" />
                        <TextInput id="descripcion"  type="text" class="mt-1 w-full" :value="ingreso.descripcion" @input="form.descripcion = $event.target.value" />
                    </div>
                    <div class="col-auto me-5">
                        <InputLabel for="monto" value="Monto" />
                        <TextInput id="monto"  type="text" class="mt-1 w-full" :value="ingreso.monto" @input="form.monto = $event.target.value"
                            maxlength="16" />
                    </div>
                    <div class="col-auto me-5">
                        <InputLabel for="fecha" value="Fecha" />
                        <TextInput id="fecha" type="date" class="mt-1 w-full" :value="ingreso.fecha" @input="form.fecha = $event.target.value"/>
                    </div>
                    <div class="col-auto mt-7">
                        <button type="submit" class="ml-3 btn bg-[#3da9fc] hover:bg-sky-800 text-white">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>



