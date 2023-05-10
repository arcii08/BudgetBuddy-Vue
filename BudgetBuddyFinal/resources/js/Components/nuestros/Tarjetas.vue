<template>
    <div class="flex h-screen overflow-hidden">
        <!-- Content area -->
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <!-- Site header -->
            <main>
                <div class="lg:relative lg:flex">
                    <!-- Content -->
                    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
                        <!-- Page header -->
                        <div class="sm:flex sm:justify-between sm:items-center mb-5">
                            <!-- Left: Title -->
                            <div class="mb-4 sm:mb-0">
                                <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">Mis Tarjetas</h1>
                            </div>
                            <!-- Add card button -->
                            <ModalTarjeta></ModalTarjeta>
                        </div>
                        <!-- Filters -->
                        <div class="mb-5">
                            <ul class="flex flex-wrap -m-1">
                                <li class="m-1">
                                    <button
                                        class="inline-flex items-center justify-center text-sm font-medium leading-5 rounded-full px-3 py-1 border border-transparent shadow-sm bg-indigo-500 text-white duration-150 ease-in-out">Ver
                                        Todo</button>
                                </li>
                                <li class="m-1">
                                    <button
                                        class="inline-flex items-center justify-center text-sm font-medium leading-5 rounded-full px-3 py-1 border border-slate-200 hover:border-slate-300 shadow-sm bg-white text-slate-500 duration-150 ease-in-out">Tarjetas
                                        Físicas</button>
                                </li>
                                <li class="m-1">
                                    <button
                                        class="inline-flex items-center justify-center text-sm font-medium leading-5 rounded-full px-3 py-1 border border-slate-200 hover:border-slate-300 shadow-sm bg-white text-slate-500 duration-150 ease-in-out">Tarjetas
                                        Virtuales</button>
                                </li>
                            </ul>
                        </div>
                        <!-- Credit cards -->
                        <div class="space-y-2">
                            <!-- Card 1 -->
                            <label class="relative block cursor-pointer text-left w-full">
                                <input type="radio" name="radio-buttons" class="peer sr-only" checked />
                                <div
                                    class="p-4 rounded border border-slate-200 hover:border-slate-300 shadow-sm duration-150 ease-in-out">
                                    <div class="grid grid-cols-12 items-center gap-x-2">
                                        <!-- Card -->
                                        <div
                                            class="col-span-6 order-1 sm:order-none sm:col-span-3 flex items-center space-x-4 lg:sidebar-expanded:col-span-6 xl:sidebar-expanded:col-span-3">
                                            <svg class="shrink-0" width="32" height="24" xmlns="http://www.w3.org/2000/svg">
                                                <defs>
                                                    <linearGradient x1="1.829%" y1="100%" x2="100%" y2="2.925%" id="c1-a">
                                                        <stop stop-color="#475569" offset="0%" />
                                                        <stop stop-color="#1E293B" offset="100%" />
                                                        <stop stop-color="#9FA1FF" offset="100%" />
                                                    </linearGradient>
                                                </defs>
                                                <g fill="none" fill-rule="evenodd">
                                                    <rect fill="url(#c1-a)" width="32" height="24" rx="3" />
                                                    <ellipse fill="#E61C24" fill-rule="nonzero" cx="12.522" cy="12"
                                                        rx="5.565" ry="5.647" />
                                                    <ellipse fill="#F99F1B" fill-rule="nonzero" cx="19.432" cy="12"
                                                        rx="5.565" ry="5.647" />
                                                    <path
                                                        d="M15.977 7.578A5.667 5.667 0 0 0 13.867 12c0 1.724.777 3.353 2.11 4.422A5.667 5.667 0 0 0 18.087 12a5.667 5.667 0 0 0-2.11-4.422Z"
                                                        fill="#F26622" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <div>
                                                <div class="text-sm font-medium text-slate-800">_Metal</div>
                                                <div class="text-xs">**7328</div>
                                            </div>
                                        </div>
                                        <!-- Name -->
                                        <div
                                            class="col-span-6 order-2 sm:order-none sm:col-span-3 text-left sm:text-center lg:sidebar-expanded:hidden xl:sidebar-expanded:block">
                                            <div class="text-sm font-medium text-slate-800 truncate">Dominik Lamakani</div>
                                        </div>
                                        <!-- Card limits -->
                                        <div
                                            class="col-span-6 order-1 sm:order-none sm:col-span-4 text-right sm:text-center lg:sidebar-expanded:col-span-6 xl:sidebar-expanded:col-span-4">
                                            <div class="text-sm">$780,00 / $20,000</div>
                                        </div>
                                        <!-- Card status -->
                                        <div
                                            class="col-span-6 order-2 sm:order-none sm:col-span-2 text-right lg:sidebar-expanded:hidden xl:sidebar-expanded:block">
                                            <div
                                                class="text-xs inline-flex font-medium bg-emerald-100 text-emerald-600 rounded-full text-center px-2.5 py-1">
                                                Activa</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute inset-0 border-2 border-transparent peer-checked:border-indigo-400 rounded pointer-events-none"
                                    aria-hidden="true"></div>
                            </label>

                            <!-- Card 2 -->
                            <label class="relative block cursor-pointer text-left w-full">
                                <input type="radio" name="radio-buttons" class="peer sr-only" />
                                <div
                                    class="p-4 rounded border border-slate-200 hover:border-slate-300 shadow-sm duration-150 ease-in-out">
                                    <div class="grid grid-cols-12 items-center gap-x-2">
                                        <!-- Card -->
                                        <div
                                            class="col-span-6 order-1 sm:order-none sm:col-span-3 flex items-center space-x-4 lg:sidebar-expanded:col-span-6 xl:sidebar-expanded:col-span-3">
                                            <svg class="shrink-0" width="32" height="24" xmlns="http://www.w3.org/2000/svg">
                                                <defs>
                                                    <linearGradient x1="1.829%" y1="100%" x2="100%" y2="2.925%" id="c2a">
                                                        <stop stop-color="#6366F1" offset="0%" />
                                                        <stop stop-color="#9FA1FF" offset="100%" />
                                                        <stop stop-color="#9FA1FF" offset="100%" />
                                                    </linearGradient>
                                                </defs>
                                                <g fill="none" fill-rule="evenodd">
                                                    <rect fill="url(#c2a)" width="32" height="24" rx="3" />
                                                    <ellipse fill="#E61C24" fill-rule="nonzero" cx="12.522" cy="12"
                                                        rx="5.565" ry="5.647" />
                                                    <ellipse fill="#F99F1B" fill-rule="nonzero" cx="19.432" cy="12"
                                                        rx="5.565" ry="5.647" />
                                                    <path
                                                        d="M15.977 7.578A5.667 5.667 0 0 0 13.867 12c0 1.724.777 3.353 2.11 4.422A5.667 5.667 0 0 0 18.087 12a5.667 5.667 0 0 0-2.11-4.422Z"
                                                        fill="#F26622" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <div>
                                                <div class="text-sm font-medium text-slate-800">_Virtual</div>
                                                <div class="text-xs">**7377</div>
                                            </div>
                                        </div>
                                        <!-- Name -->
                                        <div
                                            class="col-span-6 order-2 sm:order-none sm:col-span-3 text-left sm:text-center lg:sidebar-expanded:hidden xl:sidebar-expanded:block">
                                            <div class="text-sm font-medium text-slate-800 truncate">Dominik Lamakani</div>
                                        </div>
                                        <!-- Card limits -->
                                        <div
                                            class="col-span-6 order-1 sm:order-none sm:col-span-4 text-right sm:text-center lg:sidebar-expanded:col-span-6 xl:sidebar-expanded:col-span-4">
                                            <div class="text-sm">$0 / $20,000</div>
                                        </div>
                                        <!-- Card status -->
                                        <div
                                            class="col-span-6 order-2 sm:order-none sm:col-span-2 text-right lg:sidebar-expanded:hidden xl:sidebar-expanded:block">
                                            <div
                                                class="text-xs inline-flex font-medium bg-amber-100 text-amber-600 rounded-full text-center px-2.5 py-1">
                                                Bloqueada</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute inset-0 border-2 border-transparent peer-checked:border-indigo-400 rounded pointer-events-none"
                                    aria-hidden="true"></div>
                            </label>
                        </div>
                    </div>
                    <!-- Sidebar -->
                    <div>
                        <div
                            class="lg:sticky lg:top-16 bg-slate-50 lg:overflow-x-hidden lg:overflow-y-auto no-scrollbar lg:shrink-0 border-t lg:border-t-0 lg:border-l border-slate-200 lg:w-[390px] lg:h-[calc(100vh-64px)]">
                            <div class="py-8 px-4 lg:px-8">
                                <div class="max-w-sm mx-auto lg:max-w-none">

                                    <div class="text-slate-800 font-semibold text-center mb-6">Resumen tarjeta metálica
                                    </div>
                                    <TarjetaDisenio></TarjetaDisenio>

                                    <!-- Details -->
                                    <div class="mt-6">
                                        <div class="text-sm font-semibold text-slate-800 mb-1">Detalles</div>
                                        <ul>
                                            <li class="flex items-center justify-between py-3 border-b border-slate-200">
                                                <div class="text-sm">Nombre de la tarjeta</div>
                                                <div class="text-sm font-medium text-slate-800 ml-2">Tarjeta Física Metálica
                                                </div>
                                            </li>
                                            <li class="flex items-center justify-between py-3 border-b border-slate-200">
                                                <div class="text-sm">Estado</div>
                                                <div class="flex items-center whitespace-nowrap">
                                                    <div class="w-2 h-2 rounded-full bg-emerald-500 mr-2"></div>
                                                    <div class="text-sm font-medium text-slate-800">Activa</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Payment Limits -->
                                    <div class="mt-6">
                                        <div class="text-sm font-semibold text-slate-800 mb-4">Límite de pagos</div>
                                        <div class="pb-4 border-b border-slate-200">
                                            <div class="flex justify-between text-sm mb-2">
                                                <div>Gastado este mes</div>
                                                <div class="italic">$750,00 <span class="text-slate-400">/</span> $1,500.00
                                                </div>
                                            </div>
                                            <div class="relative w-full h-2 bg-slate-300">
                                                <div class="absolute inset-0 bg-emerald-500" aria-hidden="true"
                                                    style="width: 50%;"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Withdrawal Limits -->
                                    <div class="mt-6">
                                        <div class="text-sm font-semibold text-slate-800 mb-4">Límites de retiro</div>
                                        <div class="pb-4 border-b border-slate-200">
                                            <div class="flex justify-between text-sm mb-2">
                                                <div>Retiros este mes</div>
                                                <div class="italic">$100,00 <span class="text-slate-400">/</span> $1,500.00
                                                </div>
                                            </div>
                                            <div class="relative w-full h-2 bg-slate-300">
                                                <div class="absolute inset-0 bg-emerald-500" aria-hidden="true"
                                                    style="width: 7.5%;"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Edit / Delete -->
                                    <div class="flex items-center space-x-3 mt-6">
                                        <div class="w-1/2">
                                            <button
                                                class="btn w-full border-slate-200 hover:border-slate-300 text-slate-600">
                                                <svg class="w-4 h-4 fill-current text-slate-500 shrink-0"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z" />
                                                </svg>
                                                <span class="ml-2">Editar Tarjeta</span>
                                            </button>
                                        </div>
                                        <div class="w-1/2">
                                            <button
                                                class="btn w-full border-slate-200 hover:border-slate-300 text-rose-500">
                                                <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 16 16">
                                                    <path
                                                        d="M14.574 5.67a13.292 13.292 0 0 1 1.298 1.842 1 1 0 0 1 0 .98C15.743 8.716 12.706 14 8 14a6.391 6.391 0 0 1-1.557-.2l1.815-1.815C10.97 11.82 13.06 9.13 13.82 8c-.163-.243-.39-.56-.669-.907l1.424-1.424ZM.294 15.706a.999.999 0 0 1-.002-1.413l2.53-2.529C1.171 10.291.197 8.615.127 8.49a.998.998 0 0 1-.002-.975C.251 7.29 3.246 2 8 2c1.331 0 2.515.431 3.548 1.038L14.293.293a.999.999 0 1 1 1.414 1.414l-14 14a.997.997 0 0 1-1.414 0ZM2.18 8a12.603 12.603 0 0 0 2.06 2.347l1.833-1.834A1.925 1.925 0 0 1 6 8a2 2 0 0 1 2-2c.178 0 .348.03.512.074l1.566-1.566C9.438 4.201 8.742 4 8 4 5.146 4 2.958 6.835 2.181 8Z" />
                                                </svg>
                                                <span class="ml-2">Bloquear Tarjeta</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</template>
<script setup>
import { ref } from 'vue'
import TarjetaDisenio from './TarjetaDisenio.vue';
import ModalTarjeta from './ModalTarjeta.vue';
import ModalSimple from './ModalSimple.vue';
const open = ref(false);
</script>
