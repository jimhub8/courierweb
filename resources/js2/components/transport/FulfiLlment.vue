<template>
<div>
    <div class="translogistic-wrapper" id="general-wrapper" style="transform: none;">
        <div class="site-sub-content clearfix" style="transform: none;">
            <div class="page-content-banner" style="background-image:url(/storage/web/maritime-page-banner.jpg);"></div>
            <div class="page-title-wrapper">
                <h1 class="page-title">E-COMMERCE & PRODUCT FULFILLMENT SERVICES</h1>
                <p>Start storing or shipping products from our warehouses today.</p>
            </div>

            <div class="col-lg-12 col-sm-12 col-xs-12 fullwidthsidebar">
                <div class="page-content">
                    <article id="post-42" class="post-42 page type-page status-publish has-post-thumbnail hentry">
                        <div class="page-content-bottom">
                            <div class="vc_row wpb_row vc_row-fluid container vc_custom_1458815063618">
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                    <p style="margin-bottom: 33px;"><span style="color: #0ba6dd; font-size: 36px;"><strong>E-Commerce Fulfillment</strong></span></p>
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <p style="font-size: 17px;">When a client’s customer orders a product online, they want to ensure that it will reach their home undamaged, whether they’re sending it domestically or internationally. As a trusted name in e-commerce fulfillment, Boxleo Courier & Fulfillment Services Ltd. will take the time to ensure that your clients’ goods reach their hands in a timely manner and safely as well.
                                                        Hiring a third-party logistics organization such as Boxleo Courier & Fulfillment Services Ltd. is an efficient and cost-effective way to take care of all your shipping needs. We use the latest technology and specialize in ways that our customers can completely eliminate in-house logistics to cut costs or, if they are a small business, let a third party handle their logistics at an affordable cost.
                                                        Many small- and medium-sized enterprises (SMEs) do not have the resources available to them to handle e-commerce on their own; that’s where we come in. However, the technology behind e-commerce may also be beyond many SMEs, so let us take care of that for you as well. Or if you have the resources, but not the understanding, we will take the time to explain how our solutions work. We offer e-commerce on a number of platforms, including mobile.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1458815361624">
                                                <figure class="wpb_wrapper vc_figure"> 
                                                    <div class="vc_single_image-wrapper vc_box_border_grey"><img width="569" style="height: auto;margin-top: 100px;" src="/storage/web/land_layer_1.jpg" class="vc_single_image-img attachment-full" alt="" srcset="/storage/web/land_layer_1.jpg 569w, /storage/web/land_layer_1-300x169.jpg 300w" sizes="(max-width: 569px) 100vw, 569px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid container vc_custom_1459005247497" style="margin-top: -50px;">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <p>Online order fulfillment is one of the keys to a successful business. Customers today demand that their packages be delivered on time and in sound condition, and they expect this to be done in the most efficient manner possible.
                                                        Boxleo Courier & Fulfillment Services Ltd. helps small- and medium-sized businesses manage all their shipping needs. Whether shipping domestically or dealing with international shipments, Boxleo Courier & Fulfillment Services Ltd. has the technology and the experience to get the job done effectively.
                                                        While your customers may be completely happy with their products, it’s inevitable that there will be the occasional return. We will handle any returns your customers make in an efficient, hassle-free manner. We will also go the extra mile to ensure that orders arrive undamaged. It’s little wonder why we’re a trusted name in third-party logistics!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <Section></Section>
                            <Section1></Section1>
                            <Section2></Section2>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import Section from './fulfillment/Section'
import Section1 from './fulfillment/Section1'
import Section2 from './fulfillment/Section2'
export default {
    components: {
        Section, Section1, Section2
    },

    beforeRouteLeave(to, from, next) {
        eventBus.$emit("loaderEvent");
        next();
    },
}
</script>
