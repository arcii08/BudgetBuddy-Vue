<template>
    <div>
        <FullCalendar :options="calendarOptions" :events="events" ref="calendar"></FullCalendar>
    </div>
</template>

<script>
import { defineComponent, ref, onMounted } from 'vue';
import FullCalendar from '@fullcalendar/vue3';
import dayGridPlugin from '@fullcalendar/daygrid';
import axios from 'axios';
import moment from 'moment';

export default {
    components: {
        FullCalendar
    },



    setup() {

        const events = ref([]);


        console.log(events.value)

        const calendarOptions = ref({
            plugins: [dayGridPlugin],
            initialView: 'dayGridMonth',
            events: []


        });


        onMounted(async () => {
            try {
                const ingresosResponse = await axios.get('/api/ingresos-events');
                const gastosResponse = await axios.get('/api/gastos-events');
                const ingresosEvents = ingresosResponse.data.map(ingreso => ({
                    title: ingreso.descripcion,
                    start: ingreso.fecha,
                    color: '#2cb67d'
                }));

                const gastosEvents = gastosResponse.data.map(gasto => ({
                    title: gasto.descripcion,
                    start: gasto.fecha,
                    color: '#ef4565'
                }));

                events.value = [...ingresosEvents, ...gastosEvents];
                console.log(events.value)

                calendarOptions.value.events = events.value;


            } catch (error) {
                console.error(error);
            }
        });

        return {
            calendarOptions,
            events
        };
    }
};
</script>

