<template>
<div v-scroll="onScroll">
    <div class="vc_row wpb_row vc_row-fluid bgfixed vc_custom_1459258163844 vc_row-has-fill">
        <div class="wpb_column vc_column_container vc_col-sm-12" style="background:  url('/storage/web/home3-bg.jpg');background-attachment: fixed;background-position: center;">
            <div class="vc_column-inner vc_custom_1458318373653">
                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_inner vc_row-fluid container vc_custom_1458318277502">
                        <div class="wpb_column vc_column_container vc_col-sm-2" v-for="(counter, index) in count" :key="index">
                            <div class="vc_column-inner vc_custom_1458318908638">
                                <div class="wpb_wrapper">
                                    <div class="numbermator">
                                        <h3 style="color:#ffffff;">
                                            <!-- <div class="counter scounter3866577152" data-last="256">256</div> -->
                                            <countTo :startVal='counter.start' :endVal='counter.end' :duration='4000'></countTo>
                                        </h3>
                                        <h4 style="color:#ffffff;">{{ counter.text }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="wpb_column vc_column_container vc_col-sm-2">
                            <div class="vc_column-inner vc_custom_1458318918804">
                                <div class="wpb_wrapper">
                                    <div class="numbermator">
                                        <h3 style="color:#ffffff;">
                                            <div class="counter scounter9944110330" data-last="154">154</div>
                                        </h3>
                                        <h4 style="color:#ffffff;">DONEC AUCTOR NISL VEL ODIO</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-2">
                            <div class="vc_column-inner vc_custom_1458319924975">
                                <div class="wpb_wrapper">
                                    <div class="numbermator">
                                        <h3 style="color:#ffffff;">
                                            <div class="counter scounter155795645000" data-last="5000">5000</div>
                                        </h3>
                                        <h4 style="color:#ffffff;">PHASELLUS AC VOLUTPAT SAPIEN</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-2">
                            <div class="vc_column-inner vc_custom_1458319939317">
                                <div class="wpb_wrapper">
                                    <div class="numbermator">
                                        <h3 style="color:#ffffff;">
                                            <div class="counter scounter13119644919" data-last="919">919</div>
                                        </h3>
                                        <h4 style="color:#ffffff;">CRAS VULPUTATE NEQUE</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-2">
                            <div class="vc_column-inner vc_custom_1458319948547">
                                <div class="wpb_wrapper">
                                    <div class="numbermator">
                                        <h3 style="color:#ffffff;">
                                            <div class="counter scounter455464580" data-last="76">76</div>
                                        </h3>
                                        <h4 style="color:#ffffff;">HAC HABITASSE PLATEA DICTUMST</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-2">
                            <div class="vc_column-inner vc_custom_1458319957942">
                                <div class="wpb_wrapper">
                                    <div class="numbermator">
                                        <h3 style="color:#ffffff;">
                                            <div class="counter scounter97084582348" data-last="4706">4706</div>
                                        </h3>
                                        <h4 style="color:#ffffff;">FUSCE A QUAM</h4>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid container vc_custom_1458338499238">
        <div class="wpb_column vc_column_container vc_col-sm-8">
            <div class="vc_column-inner vc_custom_1458338430752">
                <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element">
                        <div class="wpb_wrapper">
                            <p><span style="color: rgb(0, 118, 192); font-size: 15px;"><strong>POWERFULL FULFILLMENT TECHNOLOGY TO CONNECT SUPPLY TO DEMAND</strong></span></p>
                            <p>
                                <span style="color: #000; font-size: 15px;">
                                    Customers expect fast deliveries, the ability to add to or change orders, and the ability to change their minds. An advanced order fulfillment platform gives you options. Like sophisticated delivery routing behind the scenes to make customer satisfaction simple — and that can lead to increased revenue and improved profitability.
                                </span></p>
                            <p><span style="color: #000; font-size: 15px;">Since 2018, Boxleo Courier & Fulfillment Services has provided efulfillment services. While many thousands of packages have been sent, the error rate has been virtually non-existent. Orders are fulfilled, packaged and sent in a timely manner.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wpb_column vc_column_container vc_col-sm-4">
            <div class="vc_column-inner vc_custom_1458335409283">

                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1458338603548">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="translogistic-progress-bar">
                                        <div class="percent">
                                            <span>%</span>
                                            <label class="counter-1605380840">87</label>
                                        </div>
                                        <div class="progress-content" style="font-size: 12px;">
                                            <div class="title" style="color:#0076c0; font-size: 12px !important;margin-bottom: 10px;"> Order fulfillment process in e-commerce
                                            </div>
                                            <div id="progress-wrap-1605380840" class="progress-wrap progress" data-progress-percent="87">
                                                <div id="progress-bar-1605380840" class="progress-bar progress" style="width: 87%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1458338633966">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="translogistic-progress-bar">
                                        <div class="percent"><span>%</span><label class="counter-320698228">98</label>
                                        </div>
                                        <div class="progress-content" style="font-size: 12px;">
                                            <div class="title" style="color:#0076c0; font-size: 12px !important;margin-bottom: 10px;">Third Party Logistics (Last mile delivery)
                                            </div>
                                            <div id="progress-wrap-320698228" class="progress-wrap progress" data-progress-percent="98">
                                                <div id="progress-bar-320698228" class="progress-bar progress" style="width: 98%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="translogistic-progress-bar">
                                        <div class="percent"><span>%</span><label class="counter-7392438100">100</label>
                                        </div>
                                        <div class="progress-content" style="font-size: 12px;">
                                            <div class="title" style="color:#0076c0; font-size: 12px !important;margin-bottom: 10px;">Transparency/Visibility and Tracking
                                            </div>
                                            <div id="progress-wrap-7392438100" class="progress-wrap progress" data-progress-percent="100">
                                                <div id="progress-bar-7392438100" class="progress-bar progress" style="width: 100%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import countTo from 'vue-count-to';
export default {
    components: {
        countTo
    },
    data() {
        return {
            count: [{
                    start: 0,
                    end: 253,
                    text: 'CUSTOMERS SERVED'
                },
                {
                    start: 0,
                    end: 24,
                    text: 'DELIVERY PERSONEL'
                },
                {
                    start: 0,
                    end: 9378,
                    text: 'ORDERS PROCESSED'
                },
                {
                    start: 0,
                    end: 67,
                    text: 'PICKUP LOCATIONS'
                },
                {
                    start: 0,
                    end: 76,
                    text: 'E-COMMERCE INTEGRATED'
                },
                {
                    start: 0,
                    end: 2,
                    text: 'WAREHOUSE LOCATIONS'
                },
            ],
            offsetTop: 0,
        }
    },
    methods: {
        onScroll(e) {
            this.offsetTop = window.pageYOffset || document.documentElement.scrollTop;
        },
    },
}
</script>

<style scoped>
@media only screen and (max-width: 768px) {
    .translogistic-progress-bar .progress-wrap {
        width: 90%;
        margin-left: 50px;
    }
}
</style>
