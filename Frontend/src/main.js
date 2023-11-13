import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import axios from 'axios'
import Emprestimocards from '@/components/Emprestimocards.vue';

axios.defaults.baseURL = 'http://127.0.0.1:8000/api'
axios.defaults.headers.post['Content-Type'] = 'application/json';

const app = createApp(App)

app.use(router)

app.mount('#app')
