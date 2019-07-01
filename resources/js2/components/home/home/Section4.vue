<template>
<div>
    <div class="vc_row wpb_row vc_row-fluid bgfixed vc_custom_1458837559656 vc_row-has-fill">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1458392113984">
                <div class="wpb_wrapper" style="background:  url('/storage/web/home3-layer3.jpg');background-attachment: fixed;background-position: center;">
                    <div class="vc_row wpb_row vc_inner vc_row-fluid container vc_custom_1463481321420 vc_row-o-content-bottom vc_row-flex">
                        <div class="anim-fadeInLeft wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner vc_custom_1459352701580">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1458394806491">
                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper vc_box_border_grey"><img width="659"
                                                    height="428"
                                                    src="/storage/web/box.png"
                                                    class="vc_single_image-img attachment-full" alt=""
                                                    sizes="(max-width: 659px) 100vw, 659px"></div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="anim-fadeInDown wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner vc_custom_1464088419503">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element">
                                        <div class="wpb_wrapper">
                                            <p style="font-size: 36px; line-height: 35px; margin-bottom: 38px;">
                                                <strong><span style="color: #04bdff;">Global Order Fulfillment. Commerce at scale.</span></strong></p>
                                            <p style="font-size: 22px; line-height: 30px; margin-bottom: 65px;"><span
                                                    style="color: #ffffff;">Use any combination of our warehouses to deliver internationally and domestically. On-demand and custom order fulfillment solutions support B2C and B2B commerce. Our commerce solutions enable rapid growth through timely delivery and connections to major retail channels.</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="translogistic-button bluetransparent">
                                        <router-link to="/faqs" title="MORE" style="font-size:15px;padding:12px 35px;border-width:2px; border-radius: 20px; border: 1px solid #fff; color: #fff">MORE</router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid container vc_custom_1458398233759">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1458923276850">
                <div class="wpb_wrapper">
                    <h2 style="font-size: 18px;color: #828282;text-align: center" class="vc_custom_heading vc_custom_1458923327172">TESTIMONIAL</h2>
                    <div class="wpb_text_column wpb_content_element">
                        <div class="wpb_wrapper">
                            <p style="text-align: center; font-size: 20px;"><span style="color: #9c9c9c;">Because Boxleo Courier & Fulfillment Services helps them consistently BUSINESS BETTER. Since 2018, tens of companies have relied on the Boxleo Courier & Fulfillment Services Logistic solutions to serve their customers.</span></p>
                        </div>
                    </div>

                        <MediaScreen id="media"></MediaScreen>
                        <Fullscreen id="full"></Fullscreen>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>
<script>
import MediaScreen from './MediaScreen';
import Fullscreen from './Fullscreen';
export default {
    components: {
        MediaScreen, Fullscreen
    }
}
</script>

<style scoped>

    #media {
    display: none;
}    
@media only screen and (max-width: 768px) {
    #full {
    display: none;
}    
    #media {
    display: block !important;
}    
}
</style>
