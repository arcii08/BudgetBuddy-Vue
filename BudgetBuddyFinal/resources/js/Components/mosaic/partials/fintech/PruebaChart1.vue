<template>

    <div class="flex flex-col col-span-full sm:col-span-6 bg-white rounded-lg border border-sky-500">
        <header class="px-5 py-4 border-b border-slate-100">
            <h2 class="font-semibold text-slate-800">Flujo de la cuenta</h2>
        </header>
        <!-- Chart built with Chart.js 3 -->
        <!-- Change the height attribute to adjust the chart height -->
        <div class="">
        <canvas id="myChart" class="w-full h-full"     data-te-chart="bar"></canvas>
    </div>
    </div>
</template>

<script>
import axios from 'axios';
import Chart from 'chart.js/auto';
import BarChart from '../../charts/BarChart05.vue'

export default {
    name: 'FintechCard03',
    components: {
      BarChart,
    },
    data() {
        return {
            ingresosData: [],
            gastosData: [],
        };
    },
    mounted() {
        axios.get('/ingresos-chart-data') // Ruta en tu backend que devuelve los datos de ingresos del gráfico
            .then(response => {
                this.ingresosData = response.data.sort((a, b) => new Date(a.fecha) - new Date(b.fecha));
                this.loadChart();
            })
            .catch(error => {
                console.log(error);
            });

        axios.get('/gastos-chart-data') // Ruta en tu backend que devuelve los datos de gastos del gráfico
            .then(response => {
                this.gastosData = response.data.sort((a, b) => new Date(a.fecha) - new Date(b.fecha));
                this.loadChart();
            })
            .catch(error => {
                console.log(error);
            });
    },
    methods: {
        loadChart() {
            if (this.ingresosData.length > 0 && this.gastosData.length > 0) {
                const ctx = document.getElementById('myChart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: this.ingresosData.map(item => item.fecha),
                        datasets: [
                            {
                                label: 'Ingresos',
                                data: this.ingresosData.map(item => item.monto),
                                fill: false,
                                borderColor: 'rgba(59, 130, 246, 1)',
                                backgroundColor:'rgba(59, 130, 246, 1)',
                                borderWidth: 1,
                            },
                            {
                                label: 'Gastos',
                                data: this.gastosData.map(item => item.monto),
                                fill: false,
                                borderColor: 'rgba(220, 38, 38, 1)',
                                backgroundColor:'rgba(220, 38, 38, 1)',
                                borderWidth: 1,
                            },
                        ],
                    },
                    options: {
                        scales: {
                            x: {
                                type: 'time',
                                time: {
                                    unit: 'day',
                                    displayFormats: {
                                        day: 'MMM D',
                                    },
                                },
                                title: {
                                    display: true,
                                    text: 'Fecha',
                                },
                            },
                            y: {
                                title: {
                                    display: true,
                                    text: 'Cantidad',
                                },
                            },
                        },
                    },
                });
            }
        },
    },
};
</script>
<style scoped>
#myChart {
    max-width: 100%;
    height: auto;
}
</style>
