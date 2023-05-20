<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Registro" />
    <div class="w-screen bg-[#d8eefe] h-screen flex items-center justify-center gap-32">

        <div class="flex justify-center items-center">
            <img src="../../../static/person_register.svg" alt="Imagen" class="object-cover h-96">
        </div>
        <div class="text-center justify-center align-content-center w-[550px]">
            <h1 class="text-bold text-5xl leading-10 text-left">¡Bienvenido!</h1>
            <form @submit.prevent="submit" class="pt-10 text-left">
                <div>
                    <InputLabel for="name" value="Nombre y Apellidos" class="text-bold text-[24px]" />

                    <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus
                        autocomplete="name" />

                    <InputError class="mt-2" :message="form.errors.name" />
                </div>

                <div class="mt-4">
                    <InputLabel for="email" value="Correo" class="text-bold text-[24px]" />

                    <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required
                        autocomplete="username" />

                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="mt-4">
                    <InputLabel for="password" value="Contraseña" class="text-bold text-[24px]" />

                    <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required
                        autocomplete="new-password" />

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="mt-4">
                    <InputLabel for="password_confirmation" value="Confirma la contraseña" class="text-bold text-[24px]" />

                    <TextInput id="password_confirmation" type="password" class="mt-1 block w-full"
                        v-model="form.password_confirmation" required autocomplete="new-password" />

                    <InputError class="mt-2" :message="form.errors.password_confirmation" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <Link :href="route('login')"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 text-bold text-[18px]">
                    ¿Ya estás registrado?
                    </Link>

                    <PrimaryButton class="ml-4 text-[20px]" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Registrarme
                    </PrimaryButton>
                </div>
            </form>
            <div class="flex gap-2 pt-6 w-full">
                <a href="login-google" class="bg-[#4285F4] p-4 w-full rounded-md text-white hover:bg-indigo-700">Regístrate con
                    Google</a>
                <a href="login-github" class="bg-[#000] p-4 w-full rounded-md text-white hover:bg-gray-700">Regístrate con Github</a>
            </div>
        </div>
    </div>
</template>
