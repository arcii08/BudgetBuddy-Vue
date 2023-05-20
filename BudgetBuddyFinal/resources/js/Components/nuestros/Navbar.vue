<script setup>
import { Link } from "@inertiajs/vue3";
import Banner from './Banner.vue';
defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});

const navigation = [
    {name: "INICIO", href: "/"},
    { name: "SOBRE NOSOTROS", href: "/about-us" },
    { name: "CONTACTO", href: "/contact" },
    { name: "BLOG", href: "/blog" },
];
</script>
<template>
    <!-- EMPIEZA EL NAVBAR -->
    <header class="sticky top-0 inset-x-0 top-z-50 shadow-md">
        <nav class="bg-[#d8eefe] flex items-center px-8 text-[#112A46] h-20 md:items"  aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="/" class="">
                    <img class="h-28 duration-200 hover:scale-110" src="../../../static/nuevoLogo.svg" alt="Imagen logo" />
                </a>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <Link v-for="item in navigation" :key="item.name" :href="item.href"
                    class="text-sm font-bold leading-6 duration-200 hover hover:scale-110">{{ item.name }}</Link>
            </div>
            <div class="lg:flex lg:flex-1 lg:justify-end text-[#112A46]">
                <Link :href="route('login')" class="font-bold duration-200 hover:scale-110">INICIA SESIÓN
                </Link>
            </div>
            <div class="lg:flex lg:justify-end pl-5 text-[#112A46]">
                <Link :href="route('register')" class="font-bold duration-200 hover:scale-110">REGÍSTRATE</Link>
            </div>
        </nav>
    </header>
    <Banner></Banner>
    <!-- TERMINA EL NAVBAR -->
</template>
