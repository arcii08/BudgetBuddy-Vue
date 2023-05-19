<template>
    <Head title="Blog"></Head>
    <Navbar></Navbar>
    <section class="bg-[#fffffe] w-screen h-screen">
        <div class="items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-20 max-w-7xl">
            <h1 class="font-bold text-4xl">Noticias relevantes para ti</h1>
            <ol class="grid grid-cols-1 gap-3 lg:grid-cols-2 sm:grid-cols-2 pt-14" role="list">
                <li class="space-y-3 px-3 lg:px-6 lg:py-5  bg-gray-200 rounded-xl">
                    <a class="group" href="#">
                        <div>
                            <div class="py-3">
                                <div class="block">
                                    <div class="flex items-center">
                                        <div>
                                            <img alt="" class="inline-block object-cover rounded-xl h-9 w-9"
                                                src="https://images.unsplash.com/photo-1602434228300-a645bce6891b?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1639&amp;q=80">
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm text-black group-hover:text-blue-500">
                                                Erick Llanos
                                                <span class="text-gray-500">
                                                    in
                                                </span>
                                                Ahorros ·
                                                <span class="text-gray-500">
                                                    4 days ago
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="mt-8 text-lg font-medium leading-6 text-black">
                                The Hidden Danger of QR Codes
                            </h3>
                        </div>
                        <p class="mt-5 text-base text-gray-500 line-clamp-3">
                            In this article, I will be referring to various amazing Authors and
                            resources I strongly recommend that you separately study them on
                            your own. The references list is at the end of the article, enjoy
                            reading! I will be referring to various amazing. In this article, I
                            will.
                        </p>
                        <div class="py-3">
                            <div>
                                <div class="inline-flex items-center justify-between w-full">
                                    <div>
                                        <p class="text-sm text-black group-hover:text-blue-500">
                                            Ahorros
                                            <span class="text-gray-500">
                                                ·
                                            </span>
                                            10 min
                                            Lectura
                                        </p>
                                    </div>
                                    <div>
                                        <span>
                                            <ion-icon name="bookmark-outline"
                                                class="w-5 text-blue-500 group-hover:text-black md hydrated" role="img"
                                                aria-label="bookmark outline"></ion-icon>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="space-y-3 px-3 py-2.5 lg:px-6 lg:py-5  bg-gray-200 rounded-xl">
                    <a class="group" href="#">
                        <div>
                            <div class="py-3">
                                <div class="block">
                                    <div class="flex items-center">
                                        <div>
                                            <img alt="" class="inline-block object-cover rounded-xl h-9 w-9"
                                                src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=989&amp;q=80">
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm text-black group-hover:text-blue-500">
                                                Jorge Arciniega
                                                <span class="text-gray-500">
                                                    en
                                                </span>
                                                Tips ·
                                                <span class="text-gray-500">
                                                    4 days ago
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="mt-8 text-lg font-medium leading-6 text-black">
                                Metamask - Is It Really A Wallet?
                            </h3>
                        </div>
                        <p class="mt-5 text-base text-gray-500 line-clamp-3">
                            Each of us lives our own life. Everyday routines, people we meet,
                            things we experience, the music we listen to, the food we eat, the
                            culture that surrounds us, or even the way our apartment is set up.
                            Every little detail impacts our lives in some way.
                        </p>
                        <div class="py-3">
                            <div>
                                <div class="inline-flex items-center justify-between w-full">
                                    <div>
                                        <p class="text-sm text-black group-hover:text-blue-500">
                                            Tips
                                            <span class="text-gray-500">
                                                ·
                                            </span>
                                            5 min
                                            Lectura
                                        </p>
                                    </div>
                                    <div>
                                        <span>
                                            <ion-icon name="bookmark-outline"
                                                class="w-5 text-blue-500 group-hover:text-black md hydrated" role="img"
                                                aria-label="bookmark outline"></ion-icon>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ol>
        </div>
    </section>
    <footer>
        <Footer />
    </footer>
</template>
<script setup>
import Navbar from '../Components/nuestros/Navbar.vue';
import { Head } from '@inertiajs/vue3';
import Footer from '../Components/Footer.vue';
</script>
