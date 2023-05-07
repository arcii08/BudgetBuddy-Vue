<template>
    <Navbar></Navbar>
    <div class="items-center py-2 bg-[#1B3755] text-white">
        <div class="justify-center w-full mx-auto">
            <nav class="flex px-12 mx-auto " aria-label="Breadcrumb">
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
                                aria-current="page">Contacto</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="bg-[#fffffe] text-center justify-center">
        <div class="flex w-screen h-screen">
            <div class="flex w-screen text-center justify-center">
                <img src="../../static/contacto.svg" alt="contacto_imagen" class="h-[500px] pt-10">
            </div>
            <div class="flex w-screen">
                <section>
                    <div class="flex flex-col justify-center flex-1 px-8 py-8 lg:py-36 md:px-12 lg:flex-none lg:px-24">
                        <div>
                            <div class="relative items-center gap-12 mx-auto">
                                <div class="max-w-xl mx-auto text-center">
                                    <div>

                                        <p class="text-5xl tracking-tighter text-black font-bold">
                                            PONTE EN CONTACTO CON NOSOTROS
                                        </p>
                                    </div>
                                    <div class="flex items-center justify-center w-full pt-8 mx-auto md:pt-6">
                                        <form class="flex flex-col items-center justify-center max-w-sm mx-auto" action="">
                                            <div class="flex flex-col w-full gap-1 mt-3 sm:flex-row">
                                                <input name="email" type="email"
                                                    class="block w-full px-4 py-2 text-sm font-medium text-gray-800 placeholder-gray-400 bg-white border border-gray-300 rounded-full font-spline focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-600/50 disabled:opacity-50"
                                                    placeholder="Introduce tu correo..." required=""><button type="button"
                                                    class="items-center inline-flex  justify-center w-full px-6 py-2.5 text-center text-white duration-200 bg-black border-2 border-black rounded-full nline-flex hover:bg-transparent hover:border-black hover:text-black focus:outline-none lg:w-auto focus-visible:outline-black text-sm focus-visible:ring-black">
                                                    <div style="position: relative"></div>
                                                    Suscribirme<!-- -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true" class="w-4 h-auto ml-2">
                                                        <path fill-rule="evenodd"
                                                            d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="justify-center mx-auto sm:max-w-lg sm:flex">
                                <p class="mt-6 text-xs text-gray-500">
                                    Al suscribirte, aceptas los
                                    <a class="text-blue-600 hover:text-black unerline" target="_blank" href="#">Términos del
                                        servicio</a>
                                    y las
                                    <a class="text-blue-600 hover:text-black" target="_blank" href="#">Políticas de
                                        privacidad</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

    </div>
</div></template>
<script setup>
import Navbar from '../Components/nuestros/Navbar.vue';
</script>
