<template>
<div>
    <div class="site-content fixed-header-body" style="transform: none;">
        <div class="translogistic-wrapper" id="general-wrapper" style="transform: none;">
            <div class="site-sub-content clearfix" style="transform: none;">
                <div class="page-content-banner" style="background-image:url(/storage/web/railway-page-banner.jpg);"></div>
                <div class="page-title-wrapper">
                    <h1 class="page-title">MEDICAL COURIER SERVICES</h1>
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
                                                        <p style="font-size: 17px;">Boxleo Courier & Fulfillment Services understands that each industry has unique needs and requirements. When it comes to the medical industry, those specifications are of the utmost importance. That's why we train our entire staff on regulations, time constraints, transport needs, HIPAA/OSHA regulations and much more. From medical supplies and samples to x-rays and specimens, our team is equipped to deliver your items, both big and small, on-demand and scheduled route. Whether it's a small vial or 10 pallets, our team has you covered
                                                        </p>
                                                        <h2>Services we provide:</h2>
                                                        <ul style="font-weight: 600;color: #0ba6dd;list-style-type: circle;font-size: 15px;">
                                                            <li><span style="color: #858585; font-weight: 500;list-style-type: none;">Scheduled deliveries</span></li>
                                                            <li><span style="color: #858585; font-weight: 500;">Route deliveries</span></li>
                                                            <li><span style="color: #858585; font-weight: 500;">Rush or STAT deliveries</span></li>
                                                            <li><span style="color: #858585; font-weight: 500;">	Refrigerated deliveries</span></li>
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
                                <div class="container">
                                    <p style="text-align: left;">Boxleo Courier & Fulfillment Services delivers the specialized handling necessary to meet the unique demands of healthcare. We are 100 percent committed to maintaining specimen integrity and patient confidentiality through:
                                    </p>
                                    <ul style="font-weight: 600;color: #0ba6dd;list-style-type: circle;font-size: 15px;text-align: left;">
                                        <li><span style="color: #858585; font-weight: 500;list-style-type: none;">Packages and carrying cases for temperature-sensitive specimens</span></li>
                                        <li><span style="color: #858585; font-weight: 500;">Blood and fluid spill kits</span></li>
                                        <li><span style="color: #858585; font-weight: 500;">Secure compartments for confidential patient information</span></li>
                                        <li><span style="color: #858585; font-weight: 500;">Secured vehicles and bikes at all times</span></li>
                                        <li><span style="color: #858585; font-weight: 500;">Physicians</span></li>
                                        <li><span style="color: #858585; font-weight: 500;">Drivers who wear uniforms and photo identification badges for your protection</span></li>
                                        <li><span style="color: #858585; font-weight: 500;">Tracking and tracing to maintain chain of custody from pickup through delivery</span></li>
                                    </ul>
                                </div>
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
import Section from './medical/Section'
import Section1 from './medical/Section1'
// import Section2 from "./medical/Section2";
// import Section3 from "./medical/Section3";
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
