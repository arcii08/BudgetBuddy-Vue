
<template>
    <Head title="Eventos"></Head>
    <AuthenticatedLayout></AuthenticatedLayout>
    <div class="max-w-7xl  mx-auto sm:px-6 lg:px-8 mt-5">
        <Calendar />
    </div>

</template>
<script setup>
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '../Layouts/AuthenticatedLayout.vue';
import Calendar from '@/Components/nuestros/Calendar.vue';
</script>
