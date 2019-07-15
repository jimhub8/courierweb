<template>
<footer class="footer">
    <Section></Section>

    <v-layout wrap style="align-items: center;" class="container">
        <v-flex sm2>
            <img src="/storage/img/client1.jpg" alt="" style="width: 140px !important;height: 100px !important;">
        </v-flex>
            <v-flex sm2>
                <img src="/storage/img/client2.jpg" alt="" style="width: 140px !important;height: 100px !important;">
        </v-flex>
                <v-flex sm2>
                    <img src="/storage/img/client3.jpg" alt="" style="width: 140px !important;height: 100px !important;">
        </v-flex>
                    <v-flex sm2>
                        <img src="/storage/img/client4.jpg" alt="" style="width: 140px !important;height: 100px !important;">
        </v-flex>
                        <v-flex sm2>
                            <img src="/storage/img/client5.jpg" alt="" style="width: 140px !important;height: 100px !important;">
        </v-flex>
                            <v-flex sm2>
                                <img src="/storage/img/client6.jpg" alt="" style="width: 140px !important;height: 100px !important;">
        </v-flex>
    </v-layout>
    <div class="footer-bottom" style="background:#0076c0;">
        <div class="footer_widget footer_bottom_widget_page container">
            <div class="">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="content-widget-title smal text-left">
                                    <h3 style="color:#ffffff;font-size:13px;">ABOUT US</h3>
                                </div>
                                <div class="wpb_text_column wpb_content_element">
                                    <div class="wpb_wrapper">
                                        <p style="margin-bottom: 11px;"><span style="color: #ffffff;">Imagination…what we can easily see is only a small percentage of what is possible! We fuel your logistics chain by offering possibility in every direction. </span></p>
                                        <p style="margin-bottom: 0px;"><span style="color: #ffffff;"> At Boxleo Courier & Fulfillment Services, quality never goes out of style as we take pride in serving our customers safely and efficiently.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <Section2></Section2>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="content-widget-title smal text-left">
                                    <h3 style="color:#ffffff;font-size:13px;">WAREHOUSING TREND</h3>
                                </div>
                                <div class="wpb_text_column wpb_content_element">
                                    <div class="wpb_wrapper">
                                        <p style="margin-bottom: 11px;"><span style="color: #ffffff;">Order fulfillment (efulfillment) is a breakthrough in how humanity gets what it needs. Boxleo is a revolutionary in the industry by providing what customers want, at reasonable prices and unprecedented speed of delivery.</span></p>
                                    </div>
                                </div>
                                <div class="cargo-tracking-form">
                                    <div>
                                        <div class="input-group">
                                            <!-- <span class="input-group-addon"><i class="fa fa-info-circle"></i></span> -->
                                            <input type="text" name="cargo_tracking_code_text" placeholder="Courier Tracking Number" style="background: transparent;border-radius: 6px;color: #fff;width: 70%;" v-model="search" @keyup.enter="redirect">
                                            <input type="submit" value="Track" style="background: transparent;border: 1px solid #fff;" @click="redirect">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="go-top-icon"><i class="fa fa-sort-asc" @click="scrollEvent"  v-scroll-to="'#headerq'"></i></div>
            <br>
            <div class="text-center">
                <p> &copy; {{ new Date().getFullYear() }} - All rights reserved.
                    <router-link to="/terms" style="color: #fff;">Terms of Service</router-link>
                    -
                    <router-link to="/policy" style="color: #fff;">Privacy Policy.</router-link>
                </p>
            </div>
        </div>
</footer>
</template>

<script>
import Section from "./footer/Section";
import Section2 from "./footer/Section2";
// import * as easings from "vuetify/es5/util/easing-patterns";
export default {
    components: {
        Section,
        Section2
    },
    data() {
        return {
            search: '',
            // duration: 1000,
            // easing: "easeInOutCubic",
            // easings: Object.keys(easings),
        };
    },
    methods: {
        // onScroll(e) {
        //     this.offsetTop = window.pageYOffset || document.documentElement.scrollTop;
        // },
        scrollEvent() {
            eventBus.$emit("scrollEvent");
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
    }
};
</script>

<style scoped>
.content-widget-title:before {
    border: 2px solid #fff;
}

.footer .go-top-icon i {
    background: #0076c0 !important;
}
a:active, a:hover {
    outline-width: 0;
    color: #bcbdbc !important;
}
img[data-v-36d40f44] {
    width: 140px !important;
    height: 100px !important;
}
</style>
