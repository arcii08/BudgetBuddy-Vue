<template>
    <div>
      <div class="flex ">
        <button
          class="tab-btn mr-4 px-4 py-2 rounded-tr-lg rounded-tl-lg"
          :class="{ 'active': activeTab === 'tab1' }"
          @click="changeTab('tab1')"
        >
          Guardar
        </button>
        <button
          class="tab-btn px-4 py-2 rounded-tr-lg rounded-tl-lg"
          :class="{ 'active': activeTab === 'tab2' }"
          @click="changeTab('tab2')"
        >
          Editar
        </button>
      </div>

      <div v-if="activeTab === 'tab1'">
        <!-- Formulario para el Tab 1 -->
       <FormIngreso/>
      </div>

      <div v-if="activeTab === 'tab2'">
        <!-- Formulario para el Tab 2 -->
        <FormEditIngreso/>
      </div>
    </div>
  </template>
<script setup>
import FormIngreso from './FormIngreso.vue';
import FormEditIngreso from './FormEditIngreso.vue'

</script>
  <script>

  export default {
    data() {
        return {
            activeTab: "tab1"
        };
    },
    methods: {
        changeTab(tab) {
            this.activeTab = tab;
        }
    },
    components: { FormIngreso }
};
  </script>

  <style>
  .tab-btn {

    background-color: #f1f1f1;
    transition: background-color 0.3s;
  }

  .tab-btn:hover {
    background-color: #e5e5e5;
  }

  .tab-btn.active {
    background-color: #ccc;
  }

  /* Estilos adicionales para los formularios */
  form {
    border: 1px solid #ccc;
  }
  </style>
