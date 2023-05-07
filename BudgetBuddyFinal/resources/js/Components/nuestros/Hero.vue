<script>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <div class="bg-[#fffffe] w-scren h-screen">
        <!-- EMPIEZA EL HERO -->
        <div class="py-11">
            <div class="flex items-center justify-center">
                <div class="w-1/2 text-center">
                    <h1 class="text-9xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                        Budget Buddy
                    </h1>
                    <p class="pt-10 font-bold pb-10">TODOS TUS GASTOS E INGRESOS EN UN MISMO SITIO</p>
                    <a :href="route('register')"
                        class="text-left bg-[#094067] hover:bg-[#d8eefe] hover:text-[#094067] duration-200 text-white font-bold py-2 px-4 mx-5 my-5 rounded-full">
                        ¡EMPIEZA YA!
                    </a>
                </div>
                <div class="w-1/2">
                    <img src="../../../static/hero_image.svg" alt="Imagen Hero" class="h-[500px]">
                </div>
            </div>
        </div>
    </div>
</template>
<style>
.v-enter-active,
.v-leave-active {
    transition: opacity 1s ease-in, transform 1s ease-in-out;
    transform: translateY(0px);
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
    transform: translateY(100px);
}
</style>
