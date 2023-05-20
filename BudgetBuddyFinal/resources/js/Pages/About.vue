<script setup>
import { Head } from '@inertiajs/vue3';
import Navbar from "../Components/nuestros/Navbar.vue";
import Footer from '../Components/Footer.vue';
</script>

<template>
    <Head title="Sobre Nosotros"></Head>
    <Navbar></Navbar>
    <!-- <div class="items-center py-2 bg-[#1B3755] text-white">
        <div class="justify-center w-full mx-auto">
            <nav class="flex mx-auto px-12 " aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div class="flex items-center">
                            <a href="/"
                                class="text-sm font-medium text-white duration-200 hover:text-white hover:scale-110">Inicio</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>

                            <a href="#"
                                class="ml-4 text-sm font-medium text-[#d8eefe] duration-200 hover:scale-110 hover:text-white"
                                aria-current="page">Sobre Nosotros</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div> -->
    <div class="flex w-screen h-screen bg-[#fffffe] justify-center items-center px-9 text-[#094067]">
        <div class="flex-1">
            <h1 class="text-center font-bold text-5xl">DESCUBRE MÁS SOBRE BUDGET BUDDY</h1>
        </div>
        <div class="flex-1">Erick y Jorge son amigos desde la infancia y siempre han compartido el interés en finanzas
            personales. En una tarde, después de conversar sobre la importancia de tener un control financiero efectivo,
            deciden que quieren crear una herramienta que les permita a las personas tener una mejor gestión de sus gastos
            y, en consecuencia, alcanzar sus metas financieras.
            <br>
            <br>
            Después de investigar y evaluar algunas opciones existentes en el mercado, deciden que la mayoría de las
            aplicaciones son complicadas y no ofrecen la información que ellos consideran relevante para un manejo adecuado
            de las finanzas personales. Deciden, entonces, crear su propia aplicación que ofrezca una solución sencilla e
            intuitiva a este problema.
            <br>
            <br>
            Erick, que tiene experiencia en finanzas personales, se encargará de definir las funcionalidades principales de
            la aplicación, mientras que Jorge, que tiene experiencia en desarrollo de software, se encargará de la
            programación y el diseño de la interfaz.

            Trabajando juntos, los amigos pasan varias semanas diseñando, construyendo y refinando la aplicación. Luego, la
            ponen a prueba con algunos amigos y familiares cercanos y reciben una retroalimentación muy positiva.

            Convencidos de que han creado una herramienta útil y valiosa para las personas, deciden lanzar la aplicación al
            mercado y así nace Budget Buddy.
        </div>
    </div>
    <section class="bg-[#094067]">
        <div class="items-center w-full h-full px-5 py-24">
            <ul role="list"
                class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-2 lg:gap-x-8">
                <li>
                    <div class="space-y-4">
                        <div class="aspect-[3/2]">
                            <img class="object-cover w-full h-full" src="../../static/erick.svg" alt="">
                        </div>
                        <div class="inline-flex items-start justify-between w-full">
                            <div class="space-y-1">
                                <h3 class="text-lg font-medium leading-6 text-white">
                                    Erick Llanos
                                </h3>
                                <p class="text-base text-gray-50">
                                    Full stack web developer
                                </p>
                            </div>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="space-y-4">
                        <div class="aspect-[3/2]">
                            <img class="object-cover w-full h-full" src="../../static/jorge.svg" alt="">
                        </div>
                        <div class="inline-flex items-start justify-between w-full">
                            <div class="space-y-1">
                                <h3 class="text-lg font-medium leading-6 text-white">
                                    Jorge Arciniega
                                </h3>
                                <p class="text-base text-gray-50">
                                    Full stack web developer
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- <div class="bg-[#fffffe] text-center justify-center">
        <div class="flex w-screen h-screen">
            <div class="flex bg-red-300 w-screen">
            </div>
            <div class="flex w-screen bg-orange-300">
            </div>
        </div>
    </div> -->

    <section class="w-screen">
        <div class="relative items-center px-5 py-12 mx-auto md:px-12 lg:px-16 bg-[#fffffe]">
            <div class="max-w-3xl mx-auto text-center lg:p-10">
                <div>

                    <p class="text-5xl tracking-tight text-black ">
                        Suscríbete y obtén <span class="lg:block">beneficios de nuestra newsletter</span>
                    </p>
                    <p class="mt-4 text-lg tracking-tight text-gray-600">
                        Budget Buddy, tu amigo financiero
                    </p>
                </div>
                <div class="flex flex-col items-center max-w-sm pt-8 pb-12 mx-auto md:pt-6">
                    <form class="flex flex-col items-center justify-center max-w-sm mx-auto" action="">
                        <div class="flex flex-col w-full gap-1 mt-3 sm:flex-row">
                            <input name="email" type="email"
                                class="block w-full px-4 py-2 text-sm font-medium text-gray-800 placeholder-gray-400 bg-white border border-gray-300 rounded-full font-spline focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-600/50 disabled:opacity-50"
                                placeholder="Introduce tu correo..." required=""><button type="button"
                                class="items-center inline-flex  justify-center w-full px-6 py-2.5 text-center text-white duration-200 bg-[#094067] border-2 border-black rounded-full nline-flex hover:bg-transparent hover:border-black hover:text-black focus:outline-none lg:w-auto focus-visible:outline-black text-sm focus-visible:ring-black">
                                <div style="position: relative"></div>
                                Suscribirme<!-- -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true" class="w-4 h-auto ml-2">
                                    <path fill-rule="evenodd"
                                        d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="mx-auto sm:max-w-lg sm:flex">
                    <p class="mx-auto mt-3 text-xs text-gray-500">
                        Al suscribrite, aceptas los
                        <a class="text-blue-600 hover:text-black unerline" target="_blank" href="#">Térmninos del
                            servicio</a>
                        y la
                        <a class="text-blue-600 hover:text-black" target="_blank" href="#">Política de privacidad</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <Footer></Footer>
    </footer>
</template>
