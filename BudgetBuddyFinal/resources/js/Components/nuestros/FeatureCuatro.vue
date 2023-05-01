<template>
    <div class="w-screen bg-[#004643] flex items-center justify-center h-[500px] text-white">
        <div class="flex flex-1 text-center justify-center">
            <img src="../../../static/person1.png" alt="Persona 1">
        </div>
        <div class="flex-1 text-center justify-center pr-10">
            <h1 class="text-xl text-bold">Tenemos las herramientas que necesitas</h1>
            <ul>
                <CheckIcon class="h-6 w-6 text-blue"/>
                <AnnotationIcon size="1.5x" />
                <li>{{ CheckIcon }}Tablas</li>
                <li>Calendario</li>
            </ul>
        </div>
    </div>
    <div class="w-screen bg-[#abd1c6] flex items-center justify-center h-[500px] text-black">
        <div class="flex-1 text-center justify-center pl-10">
            <h1 class="text-xl text-bold">Tenemos las herramientas que necesitas</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor itaque aperiam {{ CheckIcon }} dolorum nihil non pariatur magnam, maiores neque exercitationem, ipsa saepe. Amet culpa iste ut autem maxime eum velit eaque harum eveniet ducimus libero ad laborum, quo porro veniam facere? Inventore, nulla odit praesentium ipsa eius corrupti eligendi illo.</p>
        </div>
        <div class="flex flex-1 text-center justify-center">
            <img src="../../../static/person2.png" alt="Persona 1">
        </div>
    </div>
    <div class="w-screen bg-[#004643] flex items-center justify-center h-[500px] text-white">
        <div class="flex flex-1 text-center justify-center">
            <img src="../../../static/person3.png" alt="Persona 1">
        </div>
        <div class="flex-1 text-center justify-center pr-10">
            <h1 class="text-xl text-bold">El mejor equipo detrás de cada operación</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor itaque aperiam dolorum nihil non pariatur magnam, maiores neque exercitationem, ipsa saepe. Amet culpa iste ut autem maxime eum velit eaque harum eveniet ducimus libero ad laborum, quo porro veniam facere? Inventore, nulla odit praesentium ipsa eius corrupti eligendi illo.</p>
        </div>
    </div>
</template>
<script>
import { CheckIcon } from "@vue-hero-icons/solid";
import { AnnotationIcon } from '@vue-hero-icons/outline'

</script>
