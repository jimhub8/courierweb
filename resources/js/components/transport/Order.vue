<template>
<div>
    <div class="site-content fixed-header-body" style="transform: none;">
        <div class="translogistic-wrapper" id="general-wrapper" style="transform: none;">
            <div class="site-sub-content clearfix" style="transform: none;">
                <div class="page-content-banner" style="background-image:url(/storage/web/railway-page-banner.jpg);"></div>
                <div class="page-title-wrapper">
                    <h1 class="page-title">E-COMMERCE & PRODUCTFULFILLMENT SERVICES</h1>
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
                                                        <p style="font-size: 17px;">Start storing or shipping products from our warehouses today.</p>

                                                        <Section></Section>
                                                        <Section1></Section1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- <Section></Section>
                                <Section1></Section1> -->
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
import Section from './order/Section'
import Section1 from './order/Section1'
// import Section2 from "./order/Section2";
// import Section3 from "./order/Section3";
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
