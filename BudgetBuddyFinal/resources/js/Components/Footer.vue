<template>
    <footer class="bg-[#fffffe]" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="px-5 py-12 mx-auto lg:py-16 md:px-12 lg:px-20">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="xl:col-span-1">
                    <a href="/"
                        class="text-lg font-bold tracking-tighter transition duration-500 ease-in-out transform tracking-relaxed lg:pr-8">
                        <img src="./mosaic/images/nuevoLogo.svg" alt="Logo" class="h-48 bg-"> </a>
                    <p class="w-1/2 mt-2 text-2xl text-[#094067]">Cuidamos tu dinero.</p>
                </div>
                <div class="grid grid-cols-2 gap-8 mt-12 xl:mt-0 xl:col-span-2">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="font-semibold leading-6 uppercase text-lg text-[#ef4565]">
                                Productos
                            </h3>
                            <ul role="list" class="mt-4 space-y-3">
                                <li>
                                    <a href="#" class="text-sm text-[#ef4565] hover:text-blue-600">
                                        Marketing
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm text-[#ef4565] hover:text-blue-600">
                                        Analytics
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm text-[#ef4565] hover:text-blue-600">
                                        Commerce
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm text-[#ef4565] hover:text-blue-600">
                                        Insights
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="font-semibold leading-6 uppercase text-[#ef4565] text-lg">
                                Soporte
                            </h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-sm text-[#ef4565] hover:text-blue-600">
                                        Pricing
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm text-[#ef4565] hover:text-blue-600">
                                        Alpine.js
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm text-[#ef4565] hover:text-blue-600">
                                        Guides
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm text-[#ef4565] hover:text-blue-600">
                                        API Status
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="hidden lg:justify-end md:grid md:grid-cols-1">
                        <div class="w-full mt-12 md:mt-0">
                            <div class="mt-8 lg:justify-end xl:mt-0">
                                <h3 class="font-semibold leading-6 uppercase text-lg text-[#094067]">
                                    Suscríbete para recibir noticias.
                                </h3>
                                <p class="mt-4 text font-light text-[#094067] lg:ml-auto">
                                    Las últimas noticias, artículos y herramientas en su bandeja de entrada semanalmente.
                                </p>
                                <div class="inline-flex items-center gap-2 mt-12 list-none lg:ml-auto">
                                    <form class="flex flex-col items-center justify-center max-w-sm mx-auto" action="">
                                        <div class="flex flex-col w-full gap-1 mt-3 sm:flex-row">
                                            <input name="email" type="email"
                                                class="block w-full px-4 py-2 text font-medium text-[#fffffe] placeholder-[#fffffe] bg-[#ef4565] rounded-sm font-spline focus:border-[#ef4565] focus:outline-none focus:ring-2 focus:ring-[#ef4565]/50 disabled:opacity-50"
                                                placeholder="Introduce tu email..." required=""><button type="button"
                                                class="items-center inline-flex  justify-center w-full px-6 py-2.5 text-center text-white duration-200 bg-[#3da9fc] border-2 border-[#3da9fc] rounded-full nline-flex hover:bg-transparent hover:border-[#3da9fc] hover:text-[#3da9fc] focus:outline-none lg:w-auto focus-visible:outline-[#3da9fc] text-sm focus-visible:ring-[#3da9fc]">
                                                <div style="position: relative"></div>
                                                Suscríbete<!-- -->
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
                    </div>
                </div>
            </div>
        </div>
        <div class="px-5 pb-12 mx-auto border-t-[#ef4565] sm:px-6 md:flex md:items-center md:justify-between lg:px-20">
            <div class="flex justify-center mb-8 space-x-6 md:order-last md:mb-0">
                <span class="inline-flex justify-center w-full gap-3 lg:ml-auto md:justify-start md:w-auto">
                    <a class="w-6 h-6 transition fill-black hover:text-blue-500">
                        <span class="sr-only"> github</span>
                        <img src="./mosaic/images/icons8-github.svg" class="w-6 h-6 hydrated ">
                        <img src="" alt="">

                    </a>
                    <a class="w-6 h-6 transition fill-black hover:text-blue-500">
                        <span class="sr-only"> twitter</span>
                        <img src="./mosaic/images/icons8-twitter.svg" class="w-6 h-6 hydrated ">
                    </a>
                    <a class="w-6 h-6 transition fill-black hover:text-blue-500">
                        <span class="sr-only">Instagram</span>

                        <img src="./mosaic/images/icons8-instagram.svg" class="w-6 h-6 hydrated ">
                    </a>
                    <a class="w-6 h-6 transition fill-black hover:text-blue-500">
                        <span class="sr-only">Linkedin</span>
                        <img src="./mosaic/images/icons8-linkedin.svg" class="w-6 h-6 hydrated ">
                    </a>
                </span>
            </div>
            <div class="mt-8 md:mt-0 md:order-1">
                <span class="mt-2 text font-light text-[#5f6c7b]">
                    Copyright © 2023. Todos lo derechos reservados.
                </span>
            </div>
        </div>
    </footer>
</template>
<script>
export default {
    name: 'Footer',
}

</script>
