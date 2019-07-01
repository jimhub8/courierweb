<template>
<div>
    <div class="site-content fixed-header-body" style="transform: none;">
        <div class="translogistic-wrapper" id="general-wrapper" style="transform: none;">
            <div class="site-sub-content clearfix" style="transform: none;">
                <div class="page-content-banner" style="background-image:url(/storage/web/railway-page-banner.jpg);"></div>
                <div class="page-title-wrapper">
                    <h1 class="page-title">AIR FREIGHT SERVICES</h1>
                        <p></p>
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
                                                        <p style="font-size: 17px;">At Boxleo Courier & Fulfillment Services we provide a leading freight service to Kenya which is cost effective and secure. We pride ourselves in providing door to door shipping to Kenya, whether you require air cargo or express courier for your personal effects, online shopping, excess baggage, or commercial cargo.</p>

                                                        <Section></Section>
                                                        <Section1></Section1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
import Section from './fleight/Section'
import Section1 from './fleight/Section1'
// import Section2 from "./fleight/Section2";
// import Section3 from "./fleight/Section3";
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
