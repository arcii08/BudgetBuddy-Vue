<script setup>
import { Head } from '@inertiajs/vue3';
import Hero from '@/Components/nuestros/Hero.vue';
import Feature from "../Components/nuestros/Feature.vue";
import FeaturesDos from "../Components/nuestros/FeaturesDos.vue";
import FeaturesTres from "../Components/nuestros/FeaturesTres.vue";
import FeatureCuatro from "../Components/nuestros/FeatureCuatro.vue";
import Navbar from "../Components/nuestros/Navbar.vue";
import { ref } from "vue";
import { Transition } from "vue";
// import Favicon from '../../static/favicon.svg'

</script>

<template>
    <Transition appear>
        <div>
            <Head title="Budget Buddy" />
            <Navbar></Navbar>
            <Hero></Hero>
            <Feature />
            <FeaturesTres></FeaturesTres>
            <!-- <FeaturesDos></FeaturesDos> -->
            <FeatureCuatro></FeatureCuatro>
        </div>
    </Transition>
</template>
<style scoped>
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
