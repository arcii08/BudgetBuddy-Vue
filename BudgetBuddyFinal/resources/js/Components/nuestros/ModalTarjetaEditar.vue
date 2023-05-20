<template>
  <section class="space-y-6">
    <BotonEditar @click="confirmCardEdition">Editar Tarjeta</BotonEditar>
      <ModalTemplate :show="confirmingCardEdition" @close="closeModal">
        <form @submit.prevent="submit(id)" method="post">
          <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900">Edita la tarjeta</h2>
            <div class="mt-6 py-4">
              <InputLabel for="nombre_titular" value="Nombre de la tarjeta" />
              <TextInput id="nombre_titular" type="text" class="mt-1 block w-full" placeholder="Nombre de la tarjeta"
                v-model="nombre_titular" />
              <InputLabel for="numero" value="Núm. Tarjeta Crédito" />
              <TextInput id="numero" type="text" class="mt-1 block w-full" placeholder="****-****-****-****"
                maxlength="16" v-model="numero" />
              <InputLabel for="fecha_expiracion" value="Fecha de vencimiento" />
              <TextInput id="fecha_expiracion" type="date" class="mt-1 block w-full" v-model="fecha_expiracion" />
              <InputLabel for="cvc" value="CVC" />
              <TextInput id="cvc" type="text" class="mt-1 block w-full" placeholder="CVC" maxlength="3" v-model="cvc" />
            </div>
            <div class="mt-6 flex justify-end">
              <SecondaryButton @click="closeModal">Cancelar</SecondaryButton>
              <Boton class="ml-3" type="submit">Editar</Boton>
            </div>
          </div>
        </form>
      </ModalTemplate>
  </section>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';
import BotonEditar from './BotonEditar.vue';
import Boton from './Boton.vue';
import InputLabel from '@/Components/InputLabel.vue';
import ModalTemplate from '@/Components/nuestros/ModalTemplate.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { ref } from 'vue';

const confirmingCardEdition = ref(false);
const form = useForm({
  nombre_titular: '',
  numero: '',
  fecha_expiracion: '',
  cvc: '',
});

const confirmCardEdition = () => {
  confirmingCardEdition.value = true;
};

const closeModal = () => {
  confirmingCardEdition.value = false;
  resetForm();
};

const resetForm = () => {
  form.reset();
};

const submit = (id) => {
  form.post(route('tarjetas-update', id));
};
</script>
