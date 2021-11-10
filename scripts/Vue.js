const Home = {
    template: '#pagehome',
    name: 'Home',
    data: () => {
        return {
            presentationHome,
        }
    }
}
const Burger = {
    template: '#pageburger',
    name: 'Burger',
    data: () => {
        return {
            typeArticleFood,
        }
    }
}
const Phone = {
    template: '#pagephone',
    name: 'Phone',
}

const router = new VueRouter({
    routes: [
        { path: '/home', component: Home, name : 'Home' },
        { path: '/burger', component: Burger, name : 'Burger' },
        { path: '/phone', component: Phone, name : 'Phone' }
    ]
})


const vue = new Vue({
    router
}).$mount('#app');