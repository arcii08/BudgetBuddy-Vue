<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Iniciar Sesión" />
    <div class="w-screen bg-[#d8eefe] h-screen flex items-center justify-center gap-24">
        <div class="text-center justify-center align-content-center w-[550px]">
            <h1 class="text-bold text-5xl leading-10 text-left">¡Bienvenido de nuevo!</h1>
            <form @submit.prevent="submit" class="pt-10">
                <InputLabel for="email" value="Correo" class="text-left font-bold text-[24.5px]" />
                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus
                    autocomplete="username" />

                <InputError class="mt-2" :message="form.errors.email" />

                <div class="mt-4">
                    <InputLabel for="password" value="Contraseña" class="text-left font-bold text-[24.5px]" />

                    <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required
                        autocomplete="current-password" />

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="block mt-4">
                    <label class="flex text-center">
                        <Checkbox name="remember" v-model:checked="form.remember" />
                        <span class="flex-1 ml-2 text-gray-600 text-left hover:text-gray-900 re">Recuérdame</span>
                        <Link :href="route('register')"
                            class="flex ml-2 text-gray-600 text-right hover:text-gray-900 underline">
                        ¿Aún no estás registrado?</Link>
                    </label>

                </div>

                <div class="text-left flex justify-between mt-4 gap-2">
                    <Link v-if="canResetPassword" :href="route('password.request')"
                        class="underline text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    ¿Has olvidado tu contraseña?
                    </Link>

                    <PrimaryButton class="ml-4 text-[20px]" :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing">
                        Iniciar Sesión
                    </PrimaryButton>
                </div>
                <!-- <a href="/login-google">Iniciar Sesión con Google</a> -->
            </form>
            <div class="flex gap-2 pt-6 w-full">
                <a href="login-google" class="bg-[#4285F4] p-4 w-full rounded-md text-white">Iniciar Sesión con
                    Google</a>
                <a href="login-github" class="bg-[#000] p-4 w-full rounded-md text-white">Iniciar Sesión con Github</a>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <img src="../../../static/person_login_dos.svg" alt="Imagen" class="object-cover h-[400px]">
        </div>
    </div>
</template>
