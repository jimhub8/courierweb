
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.eventBus = new Vue()
import VueRouter from 'vue-router'
import Vuetify from 'vuetify'
import VueScrollTo from 'vue-scrollto'
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import '@fortawesome/fontawesome-free/css/all.css' // Ensure you are using css-loader
import 'vuetify/dist/vuetify.min.css'
// import CKEditor from '@ckeditor/ckeditor5-vue';
import VueQrcode from '@chenfengyuan/vue-qrcode';

// import VueLazyload from 'vue-lazyload'
// import JsonExcel from 'vue-json-excel'

// Vue.use(CKEditor);
// Vue.use(VueLazyload)
Vue.component(VueQrcode.name, VueQrcode);


Vue.use(Vuetify)
Vue.use(VueRouter)
Vue.use(VueScrollTo, {
    container: "body",
    duration: 500,
    easing: "ease",
    offset: 0,
    force: true,
    cancelable: true,
    onStart: false,
    onDone: false,
    onCancel: false,
    x: false,
    y: true
})

// Vue.component('downloadExcel', JsonExcel)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// import myFooter from './components/include/Footer.vue';
import myHeader from './components/include/Header.vue';
import myHeader1 from './components/include/Header1.vue';
import myFooter from './components/include/Footer1.vue';
import myHome from './components/home/Home1.vue';
import mySearch from './components/track/track/Search.vue';
import myAbout from './components/about/About.vue';
import myLogistic from './components/logistic/Logistic.vue';
import myWarehouse from './components/warehouse/Warehouse.vue';
import myContact from './components/contact/Contact.vue';
import myTrack from './components/track/Track.vue';
import myTransport from './components/transport/Transport.vue';
import myEvent from './components/transport/Event.vue';
import myMedical from './components/transport/Medical';
import myFridge from './components/transport/Refrigerated';
import myPackage from './components/transport/Packaging';
import myOrder from './components/transport/FulfiLlment';
import myFleight from './components/transport/Fleight';
import myFaqs from './components/pages/Faqs.vue';
import myTestimonial from './components/pages/testimonials/Testimonial.vue';
import myTimeline from './components/track/Timeline.vue';
import myTerms from './components/pages/terms/Terms';
import myPolicy from './components/pages/policy/Policy';

//  Blog
import myBlog from './components/pages/Blog.vue';
import myArticle from './components/pages/blog/Article.vue';


import mySubscribers from './components/backend/emails/Subscribe.vue'
// errors
import my404 from './components/error/404.vue';
import my405 from './components/error/404.vue';
import my500 from './components/error/404.vue';




// admin
import myadminHeader from './components/admin/include/Header.vue';
import myRinder from './components/admin/drivers/Driver.vue';
import myCustomer from './components/admin/customers/Customer.vue';
import myShipment from './components/admin/shipments/Shipment.vue';
import myProfile from './components/admin/profile/Profile.vue';
import Dashboard from './components/admin/customers/Dashboard.vue';
// import myUser from './components/admin/users/User.vue';
// import myRoles from './components/admin/users/roles/Roles.vue';
import myReports from './components/admin/reports/Reports.vue';



const routes = [
    // { path: '/example', component: exampleComponent },
    { path: '/', component: myHome },
    { path: '/about', component: myAbout },
    { path: '/integrations', component: myLogistic },
    { path: '/warehouse', component: myWarehouse },
    { path: '/contact', component: myContact },
    { path: '/track/:search', component: myTrack, name: 'search' },
    { path: '/track', component: myTrack },
    { path: '/transport', component: myTransport },
    { path: '/express', component: myEvent },
    { path: '/medical', component: myMedical },
    { path: '/refrigerated', component: myFridge },
    { path: '/packaging', component: myPackage },
    { path: '/order', component: myOrder },
    { path: '/fleight', component: myFleight },
    { path: '/blog', component: myBlog },
    { path: '/testimonial', component: myTestimonial },
    { path: '/faqs', component: myFaqs },
    { path: '/policy', component: myPolicy },
    { path: '/terms', component: myTerms },

    // { path: '/search/:search', component: mySearch, name: 'search' },
    { path: '/timeline/:timeline', component: myTimeline, name: 'timeline' },
    { path: '/article/:id', component: myArticle, name: 'blogarticle' },


    // Admin
    { path: '/rider', component: myRinder },
    { path: '/client', component: myCustomer },
    { path: '/dashboard', component: Dashboard },
    { path: '/shipments', component: myShipment },
    { path: '/profile', component: myProfile },
    { path: '/Subscriptions', component: mySubscribers },
    { path: '/reports', component: myReports },
    // { path: '/roles', component: myRoles },


]
const router = new VueRouter({
    // mode: 'history',
    routes // short for `routes: routes`
})
const app = new Vue({
    el: '#app',
    router,
    components: {
        myHome, myAbout, myLogistic, myWarehouse, myContact, myTrack,
        myTransport, myTestimonial, myFaqs, mySearch, myTimeline, myMedical,
        myBlog, myArticle, myFridge, myPackage, myOrder, myFleight, my404, my405, my500,
        myHeader, myFooter, myHeader1, mySubscribers, myPolicy, myTerms,
        myRinder, myShipment, myProfile, Dashboard, myadminHeader, myReports,
        //  myUser, myRoles

    },
    data() {
        return {
            loading: false,
            files: [],
            upload_files: [],
        }
    },
    methods: {
        getImagePreviews() {
            for (let i = 0; i < this.files.length; i++) {
                if (/\.(jpe?g|png|gif)$/i.test(this.files[i].name)) {
                    let reader = new FileReader();
                    reader.addEventListener(
                        "load",
                        function () {
                            this.$refs["preview" + parseInt(i)][0].src = reader.result;
                        }.bind(this),
                        false
                    );
                    reader.readAsDataURL(this.files[i]);
                }
            }
        },
        remove(id) {
            if (confirm("Are you sure you want to delete this image?")) {
                // this.loading = true;
                axios
                    .delete(`/images/${id}`)
                    .then(response => {
                        // this.images.splice(index, 1)
                        eventBus.$emit("alertRequest", "Successifully Created");
                    })
                    .catch(error => {
                        // this.loading = false;
                        if (error.response.status === 500) {
                            eventBus.$emit("errorEvent", error.response.statusText);
                            return;
                        }
                        // this.err             ors = error.response.data.errors;
                    });
            }
        },
        removeFile(key) {
            this.files.splice(key, 1);
            this.getImagePreviews();
        },
        handleFiles() {
            let uploadedFiles = this.$refs.files.files;

            for (var i = 0; i < uploadedFiles.length; i++) {
                this.files.push(uploadedFiles[i]);
            }
            this.getImagePreviews();
        },
    }
});
