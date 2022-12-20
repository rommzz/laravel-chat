import './bootstrap';
import App from './App.vue'
import { createApp } from 'vue';
import router from './router';


const app = createApp({
    extends: App,
    beforeMount() {
        const token = localStorage.getItem('token')
        if (token) {
            axios.defaults.headers.common.Authorization = `Bearer ${token}`
        }
    }
})
app.use(router)
app.mount('#app')