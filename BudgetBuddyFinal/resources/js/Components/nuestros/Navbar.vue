<template>
    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="" alt="Logo">
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <router-link to="/"
                            class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 hover:bg-gray-700">Home</router-link>
                        <router-link to="/about"
                            class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 hover:bg-gray-700">Sobre
                            nosotros</router-link>
                        <router-link to="/contact"
                            class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 hover:bg-gray-700">Contacto</router-link>
                        <router-link to="/login"
                            class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 hover:bg-gray-700">Login</router-link>
                        <router-link to="/register"
                            class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 hover:bg-gray-700">Register</router-link>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>
<script>
</script>
