<template>
  <Head title="Iniciar Sesión" />
  <div class="w-screen h-screen flex items-center justify-center">
    <div>
      <form @submit.prevent="submit" class="shadow-xl bg-[#d8eefe] rounded-xl h-[500px] p-10">
        <h1 class="text-bold text-5xl leading-10 text-left">Antes de continuar, necesitamos unos datos más.</h1>
        <label for="text">Nombre y  Apellido</label>
        <TextInput id="nombre_titular" type="text" class="mt-1 block w-full" v-model="form.nombre_titular" required
                        autocomplete="username" />
        <label for="banco">Elige tu banco:</label>
        <select id="banco" v-model="form.banco"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          required>
          <option selected>Elige una opción</option>
          <option value="SANTANDER">Santander</option>
          <option value="CAIXABANK">Caixabank</option>
          <option value="BBVA">BBVA</option>
          <option value="OPENBANK">Openbank</option>
          <option value="SABADELL">Sabadell</option>
          <option value="ING">ING</option>
        </select>
        <label for="tipo_cuenta">Elige tu tipo de cuenta:</label>
        <select id="tipo_cuenta" v-model="form.tipo_cuenta"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          required>
          <option selected>Elige una opción</option>
          <option value="CORRIENTE">Cuenta corriente</option>
          <option value="AHORRO">Cuenta ahorro</option>
        </select>
        <label for="numero_cuenta">Ingresa tu número de cuenta:</label>
        <TextInput id="numero_cuenta" type="text" class="mt-1 block w-full" v-model="form.numero_cuenta" required min-length="24"/>
          <label for="monto">Ingresa el monto de tu cuenta(solo para demo):</label>
        <TextInput id="monto" type="number" class="mt-1 block w-full" v-model="form.monto" required/>
        <div class="flex mt-4 file:gap-2 text-right">
            <PrimaryButton type="submit">Continuar</PrimaryButton>
        </div>
        <!-- <a href="/login-google">Iniciar Sesión con Google</a> -->
      </form>
    </div>
  </div>
</template>
<script setup>
import Boton from '../Components/nuestros/Boton.vue'
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
const form = useForm({
  nombre_titular:'',
  banco: '',
  tipo_cuenta: '',
  numero_cuenta: '',
  monto: '',
});

const submit = () => {
  form.post(route('guardar-datos'));
};
</script>