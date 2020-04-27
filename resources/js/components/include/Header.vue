<template>
<v-app id="inspire" v-scroll="onScroll">
    <!-- <vue-topprogress ref="topProgress"></vue-topprogress> -->
    <Loader v-show="loading"></Loader>
    <header class="header-wrapper fixed-header" v-show="!loading" id="headerq" style="z-index: 10">
        <div class="menu-area" style="max-height: 90px; padding-top: 0; padding-bottom: 0; background: #0076c0;">
            <div class="container">
                <nav class="navbar">
                    <div class="navbar navbar-header ">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button></div>
                    <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                        <ul id="menu-menu" class="nav navbar-nav">
                            <li id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-18" data-dropdown="dropdown">
                                <router-link to="/">Home</router-link>
                            </li>
                            <li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19">
                                <router-link to="/about">About Us</router-link>
                            </li>
                            <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23">
                                <router-link to="/integrations">Integrations</router-link>
                            <li id="menu-item-26" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-26" data-dropdown="dropdown" style="background: #0076c0;">

                                <a href="#" class="dropdown-toggle disabled" id="drop" @click="serviceDisplay">Services</a>

                                <ul role="menu" class="dropdown-menu" :style="{display: service}">
                                    <li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50">
                                        <router-link to="/express">Express Courier</router-link>
                                    </li>
                                    <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48">
                                        <router-link to="/medical">Medical Courier</router-link>
                                    </li>

                                    <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48">
                                        <router-link to="/refrigerated">Refrigerated Transport</router-link>
                                    </li>

                                    <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48">
                                        <router-link to="/order">Order Fulfillment</router-link>
                                    </li>
                                    <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48">
                                        <router-link to="/packaging">Packaging Services</router-link>
                                    </li>
                                    <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48">
                                        <router-link to="/fleight">Air Freight Services</router-link>
                                    </li>
                                </ul>
                                <!-- <i class="fa fa-angle-down mobile-caret"></i> -->
                            </li>
                            <li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34">
                                <router-link to="/warehouse">Warehouse</router-link>
                            </li>
                            <li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-29 current_page_item menu-item-35 active">
                                <router-link to="/track">Courier Tracking</router-link>
                            </li>
                            <li id="menu-item-36" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-36" data-dropdown="dropdown" style="background: #0076c0;">
                                <a href="#" class="dropdown-toggle disabled" id="drop" data-toggle="dropdown" @click="whyDisplay">Why us?</a>
                                <ul role="menu" class="dropdown-menu" style="backgroud: #0076c0;" :style="{display: why}">
                                    <!-- <li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-61">
                                        <router-link to="/blog">Blog</router-link>

                                    </li> -->
                                    <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62">
                                        <router-link to="/faqs">F.A.Q</router-link>

                                    </li>
                                    <li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-60">
                                        <router-link to="/testimonial">Testimonial</router-link>

                                    </li>
                                </ul>
                            <li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37">
                                <router-link to="/contact">Contact</router-link>
                            </li>

                            <!-- <li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37" style="margin-top: -9px;">
                                <Profile :user="user"></Profile>
                            </li> -->
                        </ul>
                    </div>
                </nav>
                <div class="header-social-media">
                    <ul>
                        <li>
                            <a href="https://web.facebook.com/BoxleoCourier/" class="facebook" title="Facebook" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/boxleo-courier-fulfillment-services/" class="googleplus" title="LinkedIn" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/BoxleoCourier/" class="instagram" title="Instagram" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/BoxleoCourier/" class="twitter" title="Twitter" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=+254743332743" class="twitter" title="whatsapp " target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                        <li id="login" v-if="user" class="user-list">
                            <Profile :user="user"></Profile>
                        </li>
                        <li id="login" v-else>
                            <a href="/login" style="border: none;" id="login-btn">
                                <v-tooltip bottom>
                                    <v-btn icon class="mx-0" slot="activator">
                                        <v-icon color="white darken-2">account_circle</v-icon>
                                    </v-btn>
                                    <span>Login</span>
                                </v-tooltip>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul id="profile" style="list-style: none">
                <li v-if="user" class="user-list">
                    <!-- <Profile :user="user"></Profile> -->
                </li>
                <!-- <li class="list-items" v-else>
                    <a href="/login" class="twitter" title="Login">
                <v-chip color="red" text-color="white" style="cursor: pointer;">
                    <v-avatar>
                        <v-icon>account_circle</v-icon>
                    </v-avatar>
                    Login
                </v-chip>
                </a>
                </li> -->
                <!-- <li v-else>
                    <a href="/login" class="v-chip__content">
                        <div class="v-avatar" style="height: 48px; width: 48px;">
                            <v-icon>account_circle</v-icon>
                        </div>
                            Login
                    </a>
                </li> -->
            </ul>
        </div>
        <div class="logo-area" style="background: #f8fafc; border-bottom: 1px solid #3333331a;margin-top: -50px;height: 130px;">
            <div class="container">
                <div class="header-logo">
                    <router-link to="/" class="site-logo">
                        <img alt="Boxleo" src="/storage/logo/boxleo_logo.png">
                    </router-link>
                </div>
                <div class="header-contact">
                    <div class="header-contact-email">
                        <h2>Write Us For Your Orders</h2>
                        <div class="content"> <i class="fa fa-envelope"></i> <span>
                                <a href="mailto:info@boxleo.co.ke" target="_blank">info@boxleo.co.ke</a>
                            </span></div>
                    </div>
                    <div class="header-contact-phone"> <i class="fa fa-phone"></i>
                        <div class="content">
                            <h2>Call Us For Your Orders</h2> <span>
                                <a href="tel:+254743332743"><span>+254</span> 743 332 743</a></span>
                        </div>
                    </div>
                </div>
                <div class="header-search">
                    <div role="search" class="search-form">
                        <input type="text" placeholder="SEARCH" v-model="search" class="search" @keyup.enter="redirect">
                        <button @click="redirect">
                            <i class="fa fa-search" style=" margin-top: 15px;margin-left: -25px;"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- <v-fab-transition v-if="offsetTop >= 400">
        <v-btn color="pink" v-scroll-to="'#headerq'" dark fab fixed bottom right ref="button">
            <v-icon>keyboard_arrow_up</v-icon>
        </v-btn>
    </v-fab-transition> -->
    <v-snackbar :timeout="timeout" bottom="bottom" :color="Scolor" right="right" v-model="snackbar">
        {{ message }}
        <v-icon dark right>check_circle</v-icon>
    </v-snackbar>
</v-app>
</template>

<script>
import {
    vueTopprogress
} from "vue-top-progress";
import * as easings from "vuetify/es5/util/easing-patterns";
import Loader from "./Loader";
import Profile from './Profile'
export default {
    props: ['user'],
    components: {
        Loader,
        Profile
    },
    data() {
        return {
            search: "",
            loading: false,
            snackbar: false,
            timeout: 5000,
            Scolor: "",
            message: "Success",
            offsetTop: 0,
            duration: 1000,
            easing: "easeInOutCubic",
            easings: Object.keys(easings),
            service: 'none',
            why: 'none'
        };
    },
    methods: {
        progressBar() {
            this.$refs.topProgress.start();
        },

        onScroll(e) {
            this.offsetTop = window.pageYOffset || document.documentElement.scrollTop;
        },
        pageLoad() {
            this.loading = true;
            // var self = this
            setTimeout(() => {
                this.loading = false;
            }, 2000);
        },
        progress() {
            this.loading = true;
        },
        stopProgress() {
            this.loading = false;
        },
        redirect() {
            eventBus.$emit("searchEvent", this.search);
            this.$router.push({
                name: "search",
                params: {
                    search: this.search
                }
            });
        },

        showalert(data) {
            this.message = data;
            this.Scolor = "black";
            this.snackbar = true;
        },
        // getQuote () {
        //   this.offsetTop = 3437
        // },
        showerror(data) {
            this.message = data;
            this.Scolor = "red";
            this.snackbar = true;
        },
        serviceDisplay() {
            if (this.service === 'none') {
                this.service = 'block'
                this.why = 'none'
            } else {
                this.service = 'none'
                this.why = 'none'
            }
        },
        whyDisplay() {
            if (this.why === 'none') {
                this.service = 'none'
                this.why = 'block'
            } else {
                this.service = 'none'
                this.why = 'none'
            }
        }
    },
    mounted() {
        this.pageLoad();
    },
    created() {
        eventBus.$on("loaderEvent", data => {
            this.pageLoad();
            window.scrollTo(0, 0);
        });

        eventBus.$on("progressEvent", data => {
            this.progress();
            window.scrollTo(0, 0);
        });
        eventBus.$on("StopLoadingEvent", data => {
            this.stopProgress()
        });

        eventBus.$on("alertRequest", data => {
            this.showalert(data);
        });

        eventBus.$on("progressEvent", data => {
            this.$refs.topProgress.start();
        });
        eventBus.$on("errorEvent", data => {
            this.showerror(data);
        });

        // eventBus.$emit('scrollEvent')
        eventBus.$on("errorEvent", data => {
            this.showerror(data);
        });

        eventBus.$on("scrollEvent", data => {
            // window.scrollTo(0, 0);
            VueScroll.scrollTo("#headerq", 1000);
        });

        eventBus.$on("quoteEvent", data => {
            timeout = setTimeout(() => {
            window.scrollTo(0, 3650);
            }, 200);
            // window.scrollTo('#quatation', 1000);
            // VueScroll.scrollTo("#quote", 3437);
        });
    }
};
</script>

<style scoped>
/* #drop i:after, :before {
    display: none !important;
} */
nav {
    margin-left: -4em;
}

.nav>li a:hover {
    color: #f00 !important;
}

.nav>li:hover {
    color: #f00 !important;
    background: #ffffff;
}

.nav>li>.router-link-exact-active {
    background: #fff;
    color: #0076c0 !important;
}

.header-social-media .fab:hover {
    color: #f00;
}

.menu-area #profile li {
    margin-top: -76px;
    margin-right: 7vw;
    color: #fff;
    float: right;
}

#login a:hover {
    background: none;
}

.header-wrapper .logo-area .header-contact .header-contact-phone i {
    margin-right: -60px !important;
    margin-top: 0px !important;
}

/* .menu-area #profile .v-chip {
    float: right;
    margin-top: -70px;
    margin-right: 40px;
    list-style: none;
    background: #fff;
}

.menu-area #profile .user-list {
    float: right;
    margin-top: -70px;
    margin-right: 40px;
    list-style: none;
}  */
/* .menu-area #profile .v-chip .v-chip__content {
    cursor: pointer !important;
} */
@media only screen and (max-width: 768px) {
    nav {
        margin-left: 0 !important;
        position: absolute;
    }

    .header-wrapper .menu-area .navbar-collapse {
        padding-left: 10px;
        background: #0076c0;
        z-index: 100;
    }

    .container {
        padding: 16px;
    }

    .header-wrapper .menu-area .navbar-toggle {
        z-index: 100;
        margin-right: 300px !important;
    }

    .header-wrapper .header-social-media {
        position: relative;
    }

    .header-wrapper .menu-area .container {
        height: 50px;
    }

    .header-wrapper .menu-area .navbar {
        margin-left: -20px;
    }

    .header-wrapper .menu-area .navbar-nav .dropdown-menu li a:visited {
        color: rgb(255, 255, 255);
    }

    .nav>li a[data-v-520e3a02]:hover {
        color: #fff !important;
    }

    .menu-area #profile .v-chip {
        float: right !important;
        margin-top: 10px !important;
        margin-right: 0 !important;
        color: blue !important;
    }

    .menu-area #profile .user-list {
        margin-top: 30px !important;
        margin-right: 0px !important;
    }
}

@media only screen and (max-width: 1530px) {
    .menu-area #profile li {
        margin-right: 4vw !important;
        float: right !important;
        color: #000;
    }

    /* .menu-area #profile li {
        margin-top: 30px !important;
        margin-right: 0px !important;
    } */
}

@media only screen and (max-width: 1420px) {
    .menu-area #profile li {
        float: right !important;
        margin-top: 0px !important;
        margin-right: 10px !important;
        color: #000;
    }

    /* .menu-area #profile li {
        margin-top: 0px !important;
        margin-right: 0px !important;
    } */
}
</style>
