import './bootstrap';

import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import PostsIndex from './components/Posts/Index.vue'
import App from './layouts/App.vue'

const routes = [
    {
        path: '/',
        component: PostsIndex
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

createApp(App) 
    .use(router)
    .mount('#app') 