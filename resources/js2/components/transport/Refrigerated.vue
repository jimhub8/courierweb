<template>
<div>
    <div class="site-content fixed-header-body" style="transform: none;">
        <div class="translogistic-wrapper" id="general-wrapper" style="transform: none;">
            <div class="site-sub-content clearfix" style="transform: none;">
                <div class="page-content-banner" style="background-image:url(/storage/web/railway-page-banner.jpg);"></div>
                <div class="page-title-wrapper">
                    <h1 class="page-title">REFRIGERATED TRANSPORT & COURIER SERVICES</h1>
                </div>
                <div class="col-lg-12 col-sm-12 col-xs-12 fullwidthsidebar">
                    <div class="page-content">
                        <article id="post-46" class="post-46 page type-page status-publish has-post-thumbnail hentry">
                            <div class="page-content-bottom">
                                <div class="vc_row wpb_row vc_row-fluid container vc_custom_1458723359563">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element vc_custom_1459027912833">
                                                    <div class="wpb_wrapper">
                                                        <p style="font-size: 17px;">If your delivery item needs to stay cold, you've found the right service! Boxleo Courier's Refrigerated Delivery Service is ideal for a wide range of temperature-sensitive items. When it comes to temperature-sensitive items, the smallest change can be very problematic. That's why who you choose to trust matters. Our refrigerated delivery drivers are well-trained with these items, and they will follow your specifications from ambient, to chilled, to refrigerated and frozen temperatures to ensure a safe delivery from start to finish. Our refrigerated trucks are sanitized on a recurring schedule, keeping with current regulations and standards. 
                                                        </p>
                                                        <h2>Refrigerated Delivery Specs:</h2>
                                                        <ul style="font-weight: 600;color: #0ba6dd;list-style-type: circle;font-size: 15px;">
                                                            <li><span style="color: #858585; font-weight: 500;list-style-type: none;">Ideal for time-sensitive delivery of food, pharmaceuticals, biotech, medical and healthcare items</span></li>
                                                            <li><span style="color: #858585; font-weight: 500;">Deliveries throughout Kenya, East Africa and beyond!</span></li>
                                                            <li><span style="color: #858585; font-weight: 500;">Deliver small samples, packages, and up to 12 pallets per truck</span></li>
                                                            <li><span style="color: #858585; font-weight: 500;">	Select your need: ambient, chilled, refrigerated, and frozen</span></li>
                                                            <li><span style="color: #858585; font-weight: 500;">	Temperature range from 77 to minus 13 degrees Fahrenheit</span></li>
                                                            <li><span style="color: #858585; font-weight: 500;">	Single or multi-drop deliveries available</span></li>
                                                            <li><span style="color: #858585; font-weight: 500;">	Deliveries monitored from pick-up to delivery</span></li>
                                                            <li><span style="color: #858585; font-weight: 500;">	Deliveries monitored from pick-up to delivery</span></li>
                                                            <li><span style="color: #858585; font-weight: 500;">	Drivers available 24/7/365</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="wpb_single_image wpb_content_element vc_align_center vc_custom_1459359410629 anim-fadeIn animated fadeIn">
                                                    <!-- <div class="wpb_single_image wpb_content_element vc_align_center vc_custom_1459359410629 animate anim-fadeIn animated fadeIn"> -->
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper vc_box_border_grey"><img width="1170" height="518" src="/storage/web/event-layer-1.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/storage/web/event-layer-1.jpg 1170w, /storage/web/event-layer-1-300x133.jpg 300w, /storage/web/event-layer-1-768x340.jpg 768w, /storage/web/event-layer-1-1024x453.jpg 1024w" sizes="(max-width: 1170px) 100vw, 1170px"></div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <Section></Section>
                                <Section1></Section1>
                                <!-- <Section2></Section2>
                                <Section3></Section3> -->
                                
                            </div>
                        </article>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</template>

<script>
import Section from './refrigerated/Section'
import Section1 from './refrigerated/Section1'
// import Section2 from "./refrigerated/Section2";
// import Section3 from "./refrigerated/Section3";
export default {
    components: {
        Section,
        Section1,
        // Section2,
        // Section3
    },

    beforeRouteLeave(to, from, next) {
        eventBus.$emit("loaderEvent");
        next();
    },
}
</script>
