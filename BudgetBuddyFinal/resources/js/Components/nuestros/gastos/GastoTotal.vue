<template>
    <div class="h-screen">
        <!-- Content area -->
        <div class="flex flex-col flex-1">
            <main>
                <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
                    <h1 class="font-bold text-4xl pb-2">ESTOS SON TUS GASTOS</h1>
                    <!-- Page header -->
                    <div class="sm:flex sm:justify-between sm:items-center mb-4 md:mb-2">

                        <!-- Left: Title -->
                        <div class="mb-4 sm:mb-0">
                            <h1 class="text-2xl md:text-3xl text-slate-800 font-bold"></h1>
                        </div>

                        <!-- Right: Actions  -->
                        <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                            <!-- Delete button -->



                            <!-- Export button -->
                            <button class="btn bg-[#3da9fc] hover:bg-[#3da9fc] text-white">Exportar Transacciones</button>
                        </div>
                    </div>

                    <div class="mb-5">
                        <span>Transacciones desde mi </span>
                        <DropdownTransaction />
                    </div>

                    <!-- Table -->
                    <GastoTodosVue></GastoTodosVue>

                    <!-- Pagination -->
                    <div class="mt-8">
                        <PaginationClassic />
                    </div>
                </div>
            </main>

        </div>

    </div>
</template>

<script setup>
import { ref } from 'vue'
import Header from '../../../Components/mosaic/partials/Header.vue'

import SearchForm from '../../../Components/mosaic/components/SearchForm.vue';
import DropdownTransaction from '../../../Components/mosaic/components/DropdownTransaction.vue'

import PaginationClassic from '../../../Components/mosaic/components/PaginationClassic.vue'
import GastoTodosVue from './GastoTodos.vue';
</script>
