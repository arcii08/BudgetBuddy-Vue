<template>
    <div class="bg-[#fffffe] px-8 mx-auto w-screen py-24">
        <h1 class="text-center font-bold text-3xl">Nuestros clientes opinan</h1>
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-3">
            <div class="p-8 bg-gray-100 rounded-3xl group lg:items-start sm:flex">
                <div>
                    <p class="text-sm text-gray-600">
                        "No tenía idea de cuánto estaba gastando hasta que empecé a usar esta herramienta de gestión de
                        gastos. Ahora
                        puedo ver claramente en qué estoy gastando mi dinero y ajustar mi presupuesto en consecuencia. ¡Ha
                        sido una
                        gran ayuda para mi vida financiera!"
                    </p>
                    <Estrellas></Estrellas>
                    <div class="inline-flex items-center w-full h-full mt-2">
                        <div class="mt-6">
                            <div class="flex-shrink-0 block">
                                <div class="flex items-center">
                                    <div>
                                        <img alt="" class="inline-block object-cover rounded-full h-9 w-9"
                                            src="../../../static/persona1.jpg">
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-black group-hover:text-blue-600">
                                            Laura
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-8 bg-gray-100 rounded-3xl group lg:items-start sm:flex">
                <div>
                    <p class="text-sm text-gray-600">
                        "Siempre he sido muy desorganizado con mis finanzas, pero esta herramienta me ha hecho la vida mucho
                        más
                        fácil. Ahora puedo ver todos mis gastos en un solo lugar y planificar mis gastos futuros con
                        anticipación.
                        ¡Incluso he podido ahorrar más dinero gracias a esta herramienta!"
                    </p>
                    <Estrellas></Estrellas>
                    <div class="inline-flex items-center w-full h-full mt-2">
                        <div class="mt-6">
                            <div class="flex-shrink-0 block">
                                <div class="flex items-center">
                                    <div>
                                        <img alt="" class="inline-block object-cover rounded-full h-9 w-9"
                                            src="../../../static/persona2.jpg">
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-black group-hover:text-blue-600">
                                            Carlos
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-8 bg-gray-100 rounded-3xl group lg:items-start sm:flex">
                <div>
                    <p class="text-sm text-gray-600">
                        "Nunca había pensado en la gestión de gastos como algo importante hasta que mi contador me recomendó
                        esta
                        herramienta. Ha cambiado por completo mi forma de ver mis finanzas y me ha permitido tomar
                        decisiones más
                        informadas sobre cómo manejar mi dinero. Definitivamente la recomendaría a cualquiera que quiera
                        tener una
                        mejor comprensión de sus gastos."
                    </p>
                    <Estrellas></Estrellas>
                    <div class="inline-flex items-center w-full h-full mt-2">
                        <div class="mt-6">
                            <div class="flex-shrink-0 block">
                                <div class="flex items-center">
                                    <div>
                                        <img alt="" class="inline-block object-cover rounded-full h-9 w-9"
                                            src="../../../static/persona3.jpg">
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-black group-hover:text-blue-600">
                                            Roberto
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import Estrellas from '../../Components/nuestros/Estrellas.vue'
</script>
