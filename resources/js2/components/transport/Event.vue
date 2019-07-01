<template>
<div>
    <div class="site-content fixed-header-body" style="transform: none;">
        <div class="translogistic-wrapper" id="general-wrapper" style="transform: none;">
            <div class="site-sub-content clearfix" style="transform: none;">
                <div class="page-content-banner" style="background-image:url(/storage/web/railway-page-banner.jpg);"></div>
                <div class="page-title-wrapper">
                    <h1 class="page-title">EXPRESS COURIER SERVICES</h1>
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
                                                        <p style="font-size: 17px;">Think about how you deliver superior service to your customers. Now think about what matters most when choosing logistics partners and same-day delivery solutions.</p>
                                                        
                                                        <p>Secure transport. The agility to meet changing needs. Improving schedules and costs. Drivers and riders who are certified and industry compliant. Business continuity. Pickup and same-day delivery, on time, every time – across town or across the country – whether on-demand, scheduled or overnight.
                                                        </p>
                                                        <p><p>    At Boxleo Courier & Fulfillment Services, we make it our business to understand yours. In delivering for you, we become a reliable partner with the expertise, resources and processes to assure the kind of support you need for worry-free delivery and your peace of mind.</p><p>    Through 31 branch locations currently serving all the counties in Kenya, and the larger Eastern African region, we offer comprehensive services with a personal touch to LET YOU BUSINESS BETTER:</p><ul style="font-weight: 600;color: #0ba6dd;list-style-type: circle;font-size: 15px;">
                                                                <li><span style="color: #858585; font-weight: 500;list-style-type: none;">On Demand for 1-hour, 2-hour or 4-hour delivery</span></li>
                                                                <li><span style="color: #858585; font-weight: 500;">Scheduled/Routed pickups and deliveries</span></li>
                                                                <li><span style="color: #858585; font-weight: 500;">Overnight/Next-Day Distribution</span></li>
                                                                <li><span style="color: #858585; font-weight: 500;">	Out-of-Town and Exclusive Use Service</span></li>
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
                                <Section2></Section2>
                                <Section3></Section3>
                                <p style="text-align: center">
                                    <b>All express deliveries are traceable online, and guaranteed for your peace of mind. Select the Tracking tab to check on the most current status of your package within our system anytime, day or night.</b>
                                </p>
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
import Section from './event/Section'
import Section1 from './event/Section1'
import Section2 from "./event/Section2";
import Section3 from "./event/Section3";
export default {
    components: {
        Section,
        Section1,
        Section2, Section3
    },

    beforeRouteLeave(to, from, next) {
        eventBus.$emit("loaderEvent");
        next();
    },
}
</script>
