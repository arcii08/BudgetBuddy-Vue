<template>
    <div class="h-screen">

        <!-- Content area -->
        <div class="flex flex-col flex-1">
            <main>
                <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
                    <h1 class="font-bold text-4xl pb-2">ESTOS SON TUS INGRESOS</h1>
                    <!-- Page header -->
                    <div class="sm:flex sm:justify-between sm:items-center mb-4 md:mb-2">
                        <!-- Left: Title -->
                        <div class="mb-4 sm:mb-0">

                            <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">€69,420.69</h1>
                        </div>

                        <!-- Right: Actions  -->
                        <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                            <!-- Delete button -->
                            <DeleteButton :selectedItems="selectedItems" />


                            <!-- Export button -->
                            <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white">Exportar Transacciones</button>
                        </div>
                    </div>

                    <div class="mb-5">
                        <span>Transacciones desde mi </span>
                        <DropdownTransaction />
                    </div>
                    <!-- Table -->
                    <IngresoTabla @change-selection="updateSelectedItems($event)" />

                    <!-- Pagination -->
                    <div class="mt-8">
                        <PaginationClassic />
                    </div>
                </div>
            </main>

        </div>

    </div>
</template>

<script>
import { ref } from 'vue'
import Header from '../../../Components/mosaic/partials/Header.vue'
import DeleteButton from '../../../Components/mosaic/partials/actions/DeleteButton.vue'
import SearchForm from '../../../Components/mosaic/components/SearchForm.vue';
import DropdownTransaction from '../../../Components/mosaic/components/DropdownTransaction.vue'
import IngresoTabla from '../ingresos/IngresoTabla.vue'
import PaginationClassic from '../../../Components/mosaic/components/PaginationClassic.vue'

export default {
    name: 'Transactions',
    components: {
        Header,
        DeleteButton,
        SearchForm,
        DropdownTransaction,
        IngresoTabla,
        PaginationClassic,
    },
    setup() {

        const selectedItems = ref([])

        const updateSelectedItems = (selected) => {
            selectedItems.value = selected
        }

        return {
            selectedItems,
            updateSelectedItems,
        }
    }
}
</script>
