<template>
    <div class="flex h-screen overflow-hidden">
        <!-- Content area -->
        <div class="flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <!-- Site header -->
            <main>
                <div class="mx-auto lg:flex">
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
                        <!-- Credit cards -->
                        <!-- <TarjetaSingle></TarjetaSingle> -->
                        <TarjetaTodas></TarjetaTodas>
                        <!-- <TarjetaComponente></TarjetaComponente> -->
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
                                                <div class="text-sm font-medium text-slate-800 ml-2">
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
                                            <ModalTarjetaEditar></ModalTarjetaEditar>
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
import TarjetaTodas from '@/Pages/TarjetaTodas.vue';
import ModalTarjeta from './ModalTarjeta.vue';
import ModalTarjetaEditar from './ModalTarjetaEditar.vue';
import TarjetaDisenio from './TarjetaDisenio.vue';
const confirmCardEdition = () => {
    confirmingCardEdition.value = true;
};

const closeModal = () => {
    confirmingCardEdition.value = false;
    resetForm();
};
</script>
