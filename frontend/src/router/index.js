import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'
import BikesListVue from '../views/bikes/BikesList.vue'
import ViewBike from '../views/bikes/ViewBike.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      component: AboutView
    },
    {
      path: '/bikes',
      name:'all-bikes',
      component: BikesListVue,
     
    },
    {
      path: '/bikes/:id',
      name:'view-bike',
      component: ViewBike,
      props:true
    }
  ]
})

export default router
