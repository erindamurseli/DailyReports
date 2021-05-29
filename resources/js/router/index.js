import VueRouter from 'vue-router'
import Vue from 'vue';


// import Home from '../components/Home.vue';


import RaportetDitore from '../components/RaportetDitore.vue';

import VShowSlide from 'v-show-slide'
Vue.use(VShowSlide)
Vue.use(VueRouter)


export default new VueRouter({
    mode: 'history',
    routes: [
 
   
        // {
        //     path: '/home',
        //     component: Home,
        //     name: 'home'
        // },
      
        {
            path: '/',
            component: RaportetDitore,
            name: 'raportetditore'
        },

        // {
        //     path: '/download',
        //     component: RaportetDitore,
        //     name: 'download'
        // },
        
    
    ]
});