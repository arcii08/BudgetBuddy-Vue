<script setup>
import GastoTotal from '../Components/nuestros/gastos/GastoTotal.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>
<template>
    <Head title="Mis Gastos"></Head>
    <AuthenticatedLayout></AuthenticatedLayout>
    <div class="items-center py-2 bg-[#1B3755] text-white">
        <div class="justify-center w-full mx-auto">
            <nav class="flex px-32 mx-auto " aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div class="flex items-center">
                            <a href="/"
                                class="text-sm font-medium text-white duration-200 hover:text-white hover:scale-110">Dashboard</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>

                            <a href="/expenses"
                                class="ml-4 text-sm font-medium text-[#d8eefe] duration-200 hover:scale-110 hover:text-white"
                                aria-current="page">Mis Gastos</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="py-8 bg-[#fffffe] relative h-screen">
        <div class="max-w-7xl mx-auto">
            <GastoTotal></GastoTotal>
        </div>
    </div>
</template>
