<script setup>
import { Head } from '@inertiajs/vue3';
import Hero from '@/Components/nuestros/Hero.vue';
import Feature from "../Components/nuestros/Feature.vue";
import FeaturesDos from "../Components/nuestros/FeaturesDos.vue";
import FeaturesTres from "../Components/nuestros/FeaturesTres.vue";
import FeatureCuatro from "../Components/nuestros/FeatureCuatro.vue";

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
</script>

<template>
    <Head title="Budget Buddy" />
    <Hero></Hero>
    <Feature />
    <FeaturesTres></FeaturesTres>
    <!-- <FeaturesDos></FeaturesDos> -->
    <FeatureCuatro></FeatureCuatro>
</template>
