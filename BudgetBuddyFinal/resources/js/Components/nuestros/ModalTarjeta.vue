<template>
    <Teleport to="body">
        <button class="btn bg-[#094067] hover:bg-indigo-600 text-[#F0F9FF]" @click="open = true">
            <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                <path
                    d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
            </svg></button>
        <TransitionRoot as="template" :show="open">
            <Dialog as="div" class="relative z-10" @close="open = true">
                <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100"
                    leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" />
                </TransitionChild>
                <div class="fixed inset-0 z-10 overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <TransitionChild as="template" enter="ease-out duration-300"
                            enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200"
                            leave-from="opacity-100 translate-y-0 sm:scale-100"
                            leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                            <DialogPanel
                                class="relative transform overflow-hidden rounded-lg bg-[#d8eefe] text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg text-black">
                                <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4 h-96">
                                    <div class="sm:flex sm:items-start">
                                        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                            <DialogTitle as="h3" class="text-base font-semibold leading-6">
                                                Agrega una tarjeta</DialogTitle>

                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <form class="flex flex-wrap gap-3 w-full p-5 ">
                                            <label class="relative w-full flex flex-col">
                                                <span class="font-bold mb-3">Número de tarjeta</span>
                                                <input
                                                    class="rounded-md peer text-black pl-12 pr-2 py-2 border-2 border-gray-200 placeholder-gray-300"
                                                    type="text" name="card_number" placeholder="0000 0000 0000" />
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="absolute bottom-0 left-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 text-black peer-placeholder-shown:text-gray-300 h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                                </svg>
                                            </label>

                                            <label class="relative flex-1 flex flex-col">
                                                <span class="font-bold mb-3">Fecha de vencimiento</span>
                                                <input
                                                    class="rounded-md peer pl-12 pr-2 py-2 border-2 text-black border-gray-200 placeholder-gray-300"
                                                    type="date" name="expire_date" placeholder="MM/YY" />
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="absolute bottom-0 left-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 text-black peer-placeholder-shown:text-gray-300 h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </label>

                                            <label class="relative flex-1 flex flex-col">
                                                <span class="font-bold flex items-center gap-3 mb-3">
                                                    CVC/CVV
                                                    <span class="relative group">
                                                        <span
                                                            class="hidden group-hover:flex justify-center items-center px-2 py-1 text-xs absolute -right-2 transform translate-x-full -translate-y-1/2 w-max top-1/2 bg-black ">
                                                            Por motivos de seguridad</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                    </span>
                                                </span>
                                                <input
                                                    class="rounded-md peer pl-12 pr-2 py-2 border-2
                                                    text-black border-gray-200 placeholder-gray-300"
                                                    type="text" name="card_cvc" placeholder="&bull;&bull;&bull;" />
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="absolute bottom-0 left-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 text-black peer-placeholder-shown:text-gray-300 h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                                </svg>
                                            </label>
                                        </form>
                                    </div>
                                </div>
                                <div class="bg-[#d8eefe] px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                    <button type="button"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
                                    @click="open = false" ref="cancelButtonRef">Cancelar</button>
                            </div>
                        </DialogPanel>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</Teleport></template>

<script setup>
import { ref } from 'vue'
import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'

const open = ref(false);
</script>
