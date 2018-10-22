const base_url = 'http://random.host:8888/magang/codeigniter/admin2/';
const site_url = 'http://random.host:8888/magang/codeigniter/admin2/index.php/';
const first = {template: '<div> <p>this is from first screen </p> </div>'};
const second = {template: '<div> <p>this is from second screen </p> </div>'};
// const navbar = {template: {httpVueLoader(base_url+'components/global/navbar.vue')};

const routes = [
    {path : '/first', component: first},
    {path : '/second', component: second},
    // {path : '/navbar', component: navbar}
]
const router = new VueRouter({
    routes
})
const app = new Vue({
    router,
    data: {
        // show: false,
        // main_titles:[],
        // main_url:'http://random.host:8888/magang/codeigniter/admin2/index.php/',
        // base_url:'http://random.host:8888/magang/codeigniter/admin2/',
        // // main_url:'http://localhost/admin2/index.php/',
        // // base_url:'http://localhost/admin2/',
        // //main_url:'http://phinemo.com/admin2/index.php/',
        // //base_url:'http://phinemo.com/admin2/',
        // main_descs:[]            
    },
    components: {
        'navbar': httpVueLoader(base_url+'components/global/navbar.vue'),
        'bannershowoffer': httpVueLoader(base_url+'components/showoffer/bannershowoffer.vue'),
        'labelshowoffer': httpVueLoader(base_url+'components/showoffer/labelshowoffer.vue'),
        'judulshowoffer': httpVueLoader(base_url+'components/showoffer/judulshowoffer.vue'),
        'isiinformasi': httpVueLoader(base_url+'components/showoffer/isiinformasi.vue'),
        'accordionshowoffer': httpVueLoader(base_url+'components/showoffer/accordionshowoffer.vue'),
        'stickyshowoffer': httpVueLoader(base_url+'components/showoffer/stickyshowoffer.vue'),
    },
}).$mount('#app')

