<template>
    <div class="flex flex-col col-span-full sm:col-span-6 bg-white rounded-lg border border-sky-500">
      <header class="px-5 py-4 border-b border-slate-100">
          <h2 class="font-semibold text-slate-800">Flujo de otras cuentas</h2>
      </header>
      <!-- Chart built with Chart.js 3 -->
      <!-- Change the height attribute to adjust the chart height -->
      <BarChart :data="chartData" width="595" height="248" />
    </div>
  </template>

  <script>
  import { ref } from 'vue'
  import BarChart from '../../charts/BarChart06.vue'

  // Import utilities
  import { tailwindConfig } from '../../utils/Utils'

  export default {
    name: 'FintechCard04',
    components: {
      BarChart,
    },
    setup() {
      const chartData = ref({
        labels: [
          '02-01-2023', '03-01-2023', '04-01-2023', '05-01-2023',
        ],
        datasets: [
          // Indigo bars
          {
            label: 'Ingresos',
            data: [
              4100, 1900, 2700, 3900,
            ],
            backgroundColor: tailwindConfig().theme.colors.indigo[500],
            hoverBackgroundColor: tailwindConfig().theme.colors.indigo[600],
            categoryPercentage: 0.66,
          },
          // Gray bars
          {
            label: 'Gastos',
            data: [
              2000, 1000, 1100, 2600,
            ],
            backgroundColor: tailwindConfig().theme.colors.slate[300],
            hoverBackgroundColor: tailwindConfig().theme.colors.slate[400],
            categoryPercentage: 0.66,
          },
        ],
      })

      return {
        chartData,
      }
    }
  }
  </script>
