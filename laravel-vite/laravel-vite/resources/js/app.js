import './bootstrap';
import { formatDistance, subDays } from 'date-fns';
import { message } from './typescript';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import  ExampleComponent  from './components/ExampleComponent.vue';

// alert(formatDistance(subDays(new Date(), 3), new Date(), { addSuffix: true }));

// alert(message('to Bangladesh'));

createApp({
    components: {
        ExampleComponent,
    }
}).mount("#app");

