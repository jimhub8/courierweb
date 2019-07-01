<template>
<div>
    <div class="translogistic-wrapper" id="general-wrapper" style="transform: none;">
        <div class="site-sub-content clearfix" style="transform: none;">
            <div class="page-content-banner" style="background-image:url(/storage/web/faq.jpg);"></div>
            <div class="page-title-wrapper">
                <h1 class="page-title">F.A.Q</h1>
                <p>Our customers always want to know. The best way of knowing is by asking. These are some of the questions our customers are asking </p>
            </div>
            <div class="col-lg-12 col-sm-12 col-xs-12 fullwidthsidebar">
                <div class="page-content">
                    <article id="post-53" class="post-53 page type-page status-publish has-post-thumbnail hentry">
                        <div class="page-content-bottom">
                            <div class="vc_row wpb_row vc_row-fluid container vc_custom_1458663498071">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <Faqs></Faqs>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 col-xs-12 hide fixedrightSidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 0px; position: static;">
                    <div class="sidebar-general sidebar">
                        <div id="translogistic_latest_latest_posts_widget-2" class="general-sidebar-wrap widget-box widget_translogistic_latest_latest_posts_widget">
                            <div class="widget-title">
                                <h4>Latest Posts</h4>
                            </div>
                            <div class="widget-content">
                                <div class="translogistic-latest-posts-widget">
                                    <ul>
                                        <li>
                                            <div class="image"> <a href="http://demo.gloriathemes.com/wp/translogistic/trucking-market-on-solid-footing-early-into-2016/" title="Trucking Market On Solid Footing Early Into 2016"> <img width="360" height="213" src="/storage/web/3-1-360x213.jpg" class="attachment-translogistic-latest-posts-widget-image size-translogistic-latest-posts-widget-image wp-post-image" alt=""> </a></div>
                                            <div class="desc">
                                                <div class="category"><a href="http://demo.gloriathemes.com/wp/translogistic/category/logistic/" rel="category tag">Logistic</a></div>
                                                <div class="date">March 27, 2016</div>
                                            </div>
                                            <h3><a href="http://demo.gloriathemes.com/wp/translogistic/trucking-market-on-solid-footing-early-into-2016/" title="Trucking Market On Solid Footing Early Into 2016">Trucking Market On Solid Footing Early Into 2016</a></h3>
                                        </li>
                                        <li>
                                            <div class="image"> <a href="http://demo.gloriathemes.com/wp/translogistic/dot-approves-plan-for-possible-air-cargo-service-to-cuba/" title="DoT Approves Plan For Possible Air Cargo Service To Cuba"> <img width="360" height="213" src="/storage/web/6-1-360x213.jpg" class="attachment-translogistic-latest-posts-widget-image size-translogistic-latest-posts-widget-image wp-post-image" alt=""> </a></div>
                                            <div class="desc">
                                                <div class="category"><a href="http://demo.gloriathemes.com/wp/translogistic/category/transport/" rel="category tag">Transport</a></div>
                                                <div class="date">March 27, 2016</div>
                                            </div>
                                            <h3><a href="http://demo.gloriathemes.com/wp/translogistic/dot-approves-plan-for-possible-air-cargo-service-to-cuba/" title="DoT Approves Plan For Possible Air Cargo Service To Cuba">DoT Approves Plan For Possible Air Cargo Service To Cuba</a></h3>
                                        </li>
                                        <li>
                                            <div class="image"> <a href="http://demo.gloriathemes.com/wp/translogistic/megadeals-pace-growth-in-2015-transportation-logistics/" title="Megadeals Pace Growth In 2015 Transportation &amp; Logistics"> <img width="360" height="213" src="/storage/web/5-1-360x213.jpg" class="attachment-translogistic-latest-posts-widget-image size-translogistic-latest-posts-widget-image wp-post-image" alt=""> </a></div>
                                            <div class="desc">
                                                <div class="category"><a href="http://demo.gloriathemes.com/wp/translogistic/category/logistic/" rel="category tag">Logistic</a></div>
                                                <div class="date">March 27, 2016</div>
                                            </div>
                                            <h3><a href="http://demo.gloriathemes.com/wp/translogistic/megadeals-pace-growth-in-2015-transportation-logistics/" title="Megadeals Pace Growth In 2015 Transportation &amp; Logistics">Megadeals Pace Growth In 2015 Transportation &amp; Logistics</a></h3>
                                        </li>
                                    </ul>
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
import Faqs from './faqs/Section';
export default {
    components: {
        Faqs
    },
    
    beforeRouteLeave(to, from, next) {
        eventBus.$emit("loaderEvent");
        next();
    },
}
</script>
