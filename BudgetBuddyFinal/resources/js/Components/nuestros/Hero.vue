<script setup>
import { Bars3Icon, XMarkIcon } from "@heroicons/vue/24/outline";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

const navigation = [
    { name: "SOBRE NOSOTROS", href: "#" },
    { name: "CONTACTO", href: "#" },
    { name: "AHORRO", href: "#" },
    { name: "BLOG", href: "#" },
];

const mobileMenuOpen = ref(false);
</script>
<template>
    <div class="bg-[#fffffe] w-scren h-screen">
        <!-- EMPIEZA EL NAVBAR -->
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="/" class="">
                        <img class="h-10" src="../../../static/logo.svg" alt="Imagen logo" />
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                        @click="mobileMenuOpen = true">
                        <span class="sr-only">Open main menu</span>
                        <Bars3Icon class="h-6 w-6" aria-hidden="true" />
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a v-for="item in navigation" :key="item.name" :href="item.href"
                        class="text-sm font-semibold leading-6 text-gray-900">{{ item.name }}</a>
                </div>
                <div class="lg:flex lg:flex-1 lg:justify-end">
                    <Link :href="route('login')" class="text-bold">INICIAR SESIÓN</Link>
                </div>
                <button class=" rounded-full lg:flex lg:justify-end pl-5">
                    <Link :href="route('register')" class="text-bold">REGÍSTRATE</Link>
                </button>
            </nav>
        </header>
        <!-- TERMINA EL NAVBAR -->
        <!-- EMPIEZA EL HERO -->
        <div class="relative isolate pt-40 py-5">
            <div class="flex items-center justify-center">
                <div class="w-1/2 text-center">
                    <h1 class="text-9xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                        Budget Buddy
                    </h1>
                    <p class="pt-10 font-bold pb-10">TODOS TUS GASTOS E INGRESOS EN UN MISMO SITIO</p>
                    <Link :href="route('register')"
                        class="bg-[#3da9fc] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        ¡EMPIEZA YA!
                    </Link>
                </div>
                <div class="w-1/2">
                    <img src="../../../static/hero_image.svg" alt="Imagen Hero" class="h-[500px]">
                </div>
            </div>
        </div>
    </div>
</template>
