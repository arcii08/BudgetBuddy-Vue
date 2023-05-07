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
                <InputLabel for="email" value="Correo" class="text-left text-bold text-[24px]" />
                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus
                    autocomplete="username" />

                <InputError class="mt-2" :message="form.errors.email" />

                <div class="mt-4">
                    <InputLabel for="password" value="Contraseña" class="text-left text-bold text-[24px]" />

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

                <div class="flex items-center justify-end mt-4 gap-2">
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
                <div class="pt-6 w-full">
                    <a href="login-google" class="bg-[#4c8bf5] p-4 w-full rounded-md">
                        <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 533.5 544.3" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M533.5 278.4c0-18.5-1.5-37.1-4.7-55.3H272.1v104.8h147c-6.1 33.8-25.7 63.7-54.4 82.7v68h87.7c51.5-47.4 81.1-117.4 81.1-200.2z"
                                fill="#4285f4" />
                            <path
                                d="M272.1 544.3c73.4 0 135.3-24.1 180.4-65.7l-87.7-68c-24.4 16.6-55.9 26-92.6 26-71 0-131.2-47.9-152.8-112.3H28.9v70.1c46.2 91.9 140.3 149.9 243.2 149.9z"
                                fill="#34a853" />
                            <path
                                d="M119.3 324.3c-11.4-33.8-11.4-70.4 0-104.2V150H28.9c-38.6 76.9-38.6 167.5 0 244.4l90.4-70.1z"
                                fill="#fbbc04" />
                            <path
                                d="M272.1 107.7c38.8-.6 76.3 14 104.4 40.8l77.7-77.7C405 24.6 339.7-.8 272.1 0 169.2 0 75.1 58 28.9 150l90.4 70.1c21.5-64.5 81.8-112.4 152.8-112.4z"
                                fill="#ea4335" />
                        </svg>
                        <span>Iniciar Sesión con Google</span>
                    </a>
                    <a href="login-github" class="bg-[#000] p-4 w-full rounded-md text-white">Iniciar Sesión con Github</a>
                </div>
            </form>
        </div>
        <div class="flex justify-center items-center">
            <img src="../../../static/person_login_dos.svg" alt="Imagen" class="object-cover h-[400px]">
        </div>
    </div>
</template>
