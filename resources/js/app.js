// resources/js/app.js
import { createApp } from 'vue';
import router from './router'; // Import router từ file router.js
import axios from 'axios';

const app = createApp({});

app.config.globalProperties.$axios = axios;

// Sử dụng router
app.use(router);

// Mount ứng dụng vào div có id "app"
app.mount('#app');
