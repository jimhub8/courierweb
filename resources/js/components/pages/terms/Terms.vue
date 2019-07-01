<template>
<div>
    <div class="translogistic-wrapper" id="general-wrapper" style="transform: none;">
        <div class="site-sub-content clearfix" style="transform: none;">
            <div class="page-content-banner" style="background-image:url(/storage/web/faq.jpg);"></div>
            <div class="page-title-wrapper">
                <h1 class="page-title">Terms & Conditions</h1>
                <p>“Courier” shall mean ‘BOXLEO COURIER & FULFILLMENT SERVICES’, its servants, agents, and Sub-Contractors.</p>
            </div>
            <div class="col-lg-12 col-sm-12 col-xs-12 fullwidthsidebar">
                <div class="page-content">
                    <article id="post-53" class="post-53 page type-page status-publish has-post-thumbnail hentry">
                        <div class="page-content-bottom">
                            <div class="vc_row wpb_row vc_row-fluid container vc_custom_1458663498071">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <Section></Section>
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
</template>

<script>
import Section from './Section';
export default {
    components: {
        Section
    },

    beforeRouteLeave(to, from, next) {
        eventBus.$emit("loaderEvent");
        next();
    },
}
</script>
