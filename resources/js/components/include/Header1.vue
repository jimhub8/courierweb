<template>
<v-app id="inspire" v-scroll="onScroll">
    <!-- <vue-topprogress ref="topProgress"></vue-topprogress> -->
    <Loader v-show="loading"></Loader>
    <header class="header-wrapper fixed-header" v-show="!loading" id="headerq" style="z-index: 10">
        <div class="menu-area" style="max-height: 90px; padding-top: 0; padding-bottom: 0; background: #0076c0;">
            <div class="container">
                <nav class="navbar" style="position: absolute;">
                    <div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button></div>
                    <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                        <ul id="menu-menu" class="nav navbar-nav">
                            <li id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-18" data-dropdown="dropdown">
                                <a href="/">Home</a>
                            </li>
                            <li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19">
                                <a href="/#/about">About Us</a>
                            </li>
                            <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23">
                                <a href="/#/integrations">Integrations</a>
                            <li id="menu-item-26" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-26" data-dropdown="dropdown">
                                <a href="/#/express" class="dropdown-toggle disabled" id="drop">Services</a>

                                <ul role="menu" class="dropdown-menu">
                                    <li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50">
                                        <a href="/#/express">Express Courier</a>
                                    </li>
                                    <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48">
                                        <a href="/#/medical">Medical Courier</a>
                                    </li>
                                    
                                    <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48">
                                        <a href="/#/refrigerated">Refrigerated Transport</a>
                                    </li>
                                    
                                    <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48">
                                        <a href="/order">Order Fulfillment</a>
                                    </li>
                                    <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48">
                                        <a href="/#/packaging">Packaging Services</a>
                                    </li>
                                    <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48">
                                        <a href="/">Air Fleight Services</a> 
                                    </li>
                                </ul> 
                                <!-- <i class="fa fa-angle-down mobile-caret"></i> -->
                            </li>
                            <li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34">
                                <a href="/#/warehouse">Warehouse</a>
                            </li>
                            <li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-29 current_page_item menu-item-35 active">
                                <a href="/#/track">Courier Tracking</a>
                            </li>
                            <li id="menu-item-36" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-36" data-dropdown="dropdown"><a href="#" class="dropdown-toggle disabled" id="drop" data-toggle="dropdown">Why us?</a>
                                <ul role="menu" class="dropdown-menu">
                                    <!-- <li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-61">
                                        <a href="/">Blog</a>

                                    </li> -->
                                    <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62">
                                        <a href="/#/faqs">F.A.Q</a>

                                    </li>
                                    <li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-60">
                                        <a href="/#/testimonial">Testimonial</a>

                                    </li>
                                </ul>
                            <li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37">
                                <a href="/#/contact">Contact</a>
                            </li>
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
                    </ul>
                </div>
            </div>
        </div>
        <div class="logo-area" style="background: #f8fafc">
            <div class="container">
                <div class="header-logo">
                    <a href="/#/" class="site-logo">
                        <img alt="Boxleo" src="/storage/logo/boxleo_logo.png">
                    </a>
                </div>
                <div class="header-contact">
                    <div class="header-contact-email">
                        <h2>Write Us For Your Orders</h2>
                        <div class="content"> <i class="fa fa-envelope"></i> <span>info@boxleo.co.ke</span></div>
                    </div>
                    <div class="header-contact-phone"> <i class="fa fa-phone"></i>
                        <div class="content">
                            <h2>Call Us For Your Orders</h2> <span><span>+ 254</span> 743 332 743</span>
                        </div>
                    </div>
                </div>
                <div class="header-search">
                    <div role="search" class="search-form">
                        <input type="text" placeholder="SEARCH" v-model="search" class="search"  @keyup.enter="redirect">
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
import { vueTopprogress } from "vue-top-progress";
import * as easings from "vuetify/es5/util/easing-patterns";
import Loader from "./Loader";
export default {
  components: {
    Loader
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
      easings: Object.keys(easings)
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
    redirect() {
      eventBus.$emit("searchEvent", this.search);
      this.$router.push({
        name: "search",
        params: {
          search: this.search
        }
      });
    },

    showalert() {
      this.message = "success";
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

    eventBus.$on("alertRequest", data => {
      this.showalert();
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
      window.scrollTo(1000, 1300);
      // VueScroll.scrollTo("#quote", 3437);
    });
  }
};
</script>

<style scoped>
/* #drop i:after, :before {
    display: none !important;
} */

.nav > li a:hover {
  color: #f00 !important;
}
.nav > li:hover {
  color: #f00 !important;
  background: #ffffff;
}
.nav > li > .a-exact-active {
  background: #fff;
  color: #0076c0 !important;
}
.header-social-media .fab:hover {
  color: #f00;
}
</style>
