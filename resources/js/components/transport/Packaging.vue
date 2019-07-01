<template>
<div>
    <div class="site-content fixed-header-body" style="transform: none;">
        <div class="translogistic-wrapper" id="general-wrapper" style="transform: none;">
            <div class="site-sub-content clearfix" style="transform: none;">
                <div class="page-content-banner" style="background-image:url(/storage/web/railway-page-banner.jpg);"></div>
                <div class="page-title-wrapper">
                    <h1 class="page-title">PACKAGING SERVICES</h1>
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
                                                        <p style="font-size: 17px;">Operations should be lean and hassle-free. Boxleo Courier & Fulfillment Services offers a set of packaging services that enables customers to focus on their core products and processes to grow their business. Packing, kitting, warehousing and just-in-time delivery are examples of services that we custom build to meet the specific requirements of our customers. Contract packaging involves the integration of outsourced packing operations into distribution centers, to increase flexibility and streamline fulfillment. This reduces cost, enhances product visibility and control, and increases speed-to-market. Boxleo Courier & Fulfillment Services offers a comprehensive packaging service, including the re-packing of finished products to support product launches, promotions and customization for local markets. We also offer additional packing solutions, including packaging design and packaging materials procurement, as well as environmentally friendly transit packaging which includes safe and economical returnable containers and packaging-free transport solutions, helping you cut waste and labor costs. We offer the following packaging solutions:
                                                        </p>

                                                        <div class="wpb_single_image wpb_content_element vc_align_center vc_custom_1459359410629 anim-fadeIn animated fadeIn">
                                                            <!-- <div class="wpb_single_image wpb_content_element vc_align_center vc_custom_1459359410629 animate anim-fadeIn animated fadeIn"> -->
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper vc_box_border_grey"><img width="1170" height="518" src="/storage/web/event-layer-1.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/storage/web/event-layer-1.jpg 1170w, /storage/web/event-layer-1-300x133.jpg 300w, /storage/web/event-layer-1-768x340.jpg 768w, /storage/web/event-layer-1-1024x453.jpg 1024w" sizes="(max-width: 1170px) 100vw, 1170px"></div>
                                                            </figure>
                                                        </div>
                                                        <h2>On-site Packing:</h2>
                                                        <p class="anim-fadeIn animate-delay-0-25" style="color: #808080;"><span style="color: #a4a4a4; font-size: 15px;">Boxleo Courier & Fulfillment Services will bring materials and a crew to the customer site and pack the products that need to be shipped.</span></p>

                                                        <h2>TRUST THE BOXLEO COURIER & FULFILLMENT SERVICES PACKING EXPERTS</h2>
                                                        <ul style="font-weight: 600;color: #0ba6dd;list-style-type: circle;font-size: 15px;">
                                                            <li><span style="color: #858585; font-weight: 500;list-style-type: none;">Let our packing experts do the job for you so your items arrive safely and intact</span></li>
                                                            <li><span style="color: #858585; font-weight: 500;">We are trained in advanced packing techniques like block and brace, double box, and suspension</span></li>
                                                            <li><span style="color: #858585; font-weight: 500;">We can pack almost anything</span></li>
                                                        </ul>
                                                        <p>We specialize in properly packing fragile and high-value items like artwork or electronics, and can package large or odd-shaped items such as golf clubs or sporting equipment. Save time and visit our offices for help from the packing experts.</p>
                                                    </div>
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
import Section from './package/Section'
import Section1 from './package/Section1'
// import Section2 from "./package/Section2";
// import Section3 from "./package/Section3";
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
