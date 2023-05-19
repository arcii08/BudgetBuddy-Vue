<template>
    <div class="col-span-full xl:col-span-6 bg-white rounded-lg border border-sky-500">
        <header class="px-5 py-4 border-b border-slate-100">
            <h2 class="font-semibold text-slate-800">Gastos recientes</h2>
        </header>
        <div class="p-3">

            <!-- Table -->
            <div class="overflow-x-auto">

                <Gastos5 />
            </div>

            <div class="text-center border-t border-slate-100 px-2">
                <a class="block text-sm font-medium text-indigo-500 hover:text-indigo-600 pt-4 pb-1" href="/expenses">Ver
                    más -&gt;</a>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: 'FintechCard05',
}
</script>
<script setup>
import Gastos5 from '../../../nuestros/gastos/Gastos5.vue';
</script>

