<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Datepicker from '@/Components/mosaic/components/Datepicker.vue';
import FintechIntro from '@/Components/mosaic/partials/fintech/FintechIntro.vue';
import FintechCard01 from '@/Components/mosaic/partials/fintech/FintechCard01.vue';
import FintechCard02 from '@/Components/mosaic/partials/fintech/FintechCard02.vue';
import FintechCard03 from '@/Components/mosaic/partials/fintech/FintechCard03.vue';
import FintechCard04 from '@/Components/mosaic/partials/fintech/FintechCard04.vue';
import FintechCard05 from '@/Components/mosaic/partials/fintech/FintechCard05.vue';
import FintechCard06 from '@/Components/mosaic/partials/fintech/FintechCard06.vue';
import FintechCard07 from '@/Components/mosaic/partials/fintech/FintechCard07.vue';
import FintechCard08 from '@/Components/mosaic/partials/fintech/FintechCard08.vue';
import FintechCard09 from '@/Components/mosaic/partials/fintech/FintechCard09.vue';
import Footer from '@/Components/Footer.vue';
</script>

<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout></AuthenticatedLayout>
    <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>-->
    <div class="py-8 bg-[#fffffe]">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-sky-500">
                <p class="p-6 text-gray-900">Bienvenido {{ $page.props.auth.user.name }}, te presentamos un resumen
                    general de tu cuenta.</p>
            </div>
            <main>
                <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
                    <!-- Page header -->
                    <div class="sm:flex sm:justify-between sm:items-center mb-5">
                        <!-- Left: Title -->
                        <div class="mb-4 sm:mb-0">
                            <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">Inicio ✨</h1>
                        </div>

                        <!-- Right: Actions -->
                        <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
                            <!-- Datepicker built with flatpickr -->
                            <Datepicker align="right" />
                            <!-- Add account button -->
                            <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                                <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                                </svg>
                                <span class="hidden xs:block ml-2">Add Account</span>
                            </button>

                        </div>

                    </div>
<<<<<<< HEAD
                </main>
            </div>

        </div>
        <Footer />

    </AuthenticatedLayout>
=======

                    <!-- Cards -->
                    <div class="grid grid-cols-12 gap-6">

                        <!-- Page Intro -->
                        <FintechIntro />
                        <!-- Line chart (Portfolio Returns) -->
                        <FintechCard01 />
                        <!-- Credit Card -->
                        <FintechCard02 />
                        <!-- Bar chart (Cash Flow) -->
                        <FintechCard03 />
                        <!-- Horizontal bar chart (Cash Flow by Account) -->
                        <FintechCard04 />
                        <!-- Table (Recent Expenses) -->
                        <FintechCard05 />
                        <!-- Table (Recent Earnings) -->
                        <FintechCard06 />
                        <!-- Line chart (Saving Goals) -->
                        <FintechCard07 />
                        <!-- Line chart (Growth Portfolio) -->
                        <FintechCard08 />
                        <!-- Pie chart (Portfolio Value) -->
                        <FintechCard09 />
                    </div>
                </div>
            </main>
        </div>
    </div>
>>>>>>> main
</template>
