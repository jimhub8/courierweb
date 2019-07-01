<template>
<div>
    <div class="page-content-banner" style="background-image:url('/storage/web/testimonial-page-banner.jpg');"></div>
    <!-- <div class="page-content-banner" style="background-image:url('/storage/web/default-page-baner.jpg');"></div> -->
    <div class="container" id="logistic">
        <div id="header">
            <h2 class="text-center">SHOPPING CART INTEGRATIONS</h2>
            <p style="text-align: center;">Want to sell on your own website and not worry about shipment?</p>
        </div>
        <div id="body" style="margin-top: 40px;">
            <p>If you're looking to add shipping APIs to your eCommerce or to your existing website, no doubt you've realised that most solutions require you to start all over again, or to hire a team of developers to build a new section into your existing site which inevitably never quite integrates how you had hoped.</p>
            <ul style="font-weight: 600;color: #0ba6dd;list-style-type: circle;font-size: 15px;">
                <li><span style="color: #858585; font-weight: 500;">Setup once, Delivery anywhere</span></li>
                <li><span style="color: #858585; font-weight: 500;">Simple Shipping Options</span></li>
                <li><span style="color: #858585; font-weight: 500;">Keep  your inventory in sync</span></li>
            </ul>
            <p>With Boxleo APIs, it's easy. You simply copy & paste our code snippet into your website. We then seamlessly manage all of the orders your customers on your own website, enabling you to concentrate on what matters most; BUSINESS. </p>
            <Section></Section>


        </div>
    </div>

    <Section1></Section1>

    <Section2></Section2>
</div>
</template>

</script>

<script>
import Section from './logistic/Section'
import Section1 from './logistic/Section1'
import Section2 from './logistic/Section2'

import Headerpartial from "../include/Headerpartial";
export default {
    components: {
        Headerpartial,
        Section,
        Section1,
        Section2
    },
    
    beforeRouteLeave(to, from, next) {
        eventBus.$emit("loaderEvent");
        next();
    },
};
</script>

<style scoped>
#logistic #header h2::before {
    content: "";
    display: inline-block;
    width: 15px;
    height: 15px;
    transform: rotate(45deg);
    margin-right: 13px;
    border-width: 2px;
    border-style: solid;
    border-color: rgb(11, 166, 221);
    border-image: initial;
    transition: all 0.3s ease 0s;
}

#logistic #header p::after {
    max-width: 75px;
    height: 1px;
    content: "";
    display: block;
    background: rgb(11, 166, 221);
    margin: 19px auto 0px;
}

#logistic #header p {
    font-weight: 700;
    font-size: 18px;
    color: rgb(162, 162, 162);
    margin: 14px 0px 0px;
}

#logistic #body p {
    font-size: 17px;
    margin-bottom: 33px;
}

.feature-box-icon {
    color: #0BA6DD;
    bottom: -33px;
    top: inherit;
    width: 64px;
    height: 64px;
    line-height: 64px;
    background: #FFFFFF;
    border-radius: 10px;
    text-align: center;
    position: absolute;
    transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    top: -33px;
    left: 0;
    right: 0;
    margin: auto;
    z-index: 1;
}

.feature-box-icon i {
    transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    font-size: 29px;
    position: relative;
    left: -1px;
    top: 5px;
}

.feature-box-icon #truck {
    margin-top: 185px;
}

.feature-box-icon #hand,
.feature-box-icon #dropbox {
    margin-top: 316px;
}

#logistic #body li {
    display: list-item;
    text-align: -webkit-match-parent;
}

#logistic #body ul {
    font-weight: 600;
    color: #0ba6dd;
    list-style-type: circle;
}

#logistic #body ul,
menu,
dir {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}

#logistic #body ul {
    font-weight: 600;
    color: #0ba6dd;
    list-style-type: circle;
    margin-bottom: 21px;
    margin-bottom: 30px;
    margin-top: 0;
    margin-bottom: 10px;
}

.icon-list-icon {
    width: 57px;
    border-color: #ffffff;
    color: #ffffff;
    height: 57px;
    line-height: 54px;
    margin-right: 30px;
    font-size: 24px;
}

/* @media (min-width: 768px){
.marginbottom20px .icon-list-number, .marginbottom20px .icon-list-icon {
    margin-bottom: 20px;
} */
.icon-list-icon {
    display: block;
    float: left;
    border-radius: 6px;
    border: 1px solid #7a7a7a;
    margin-right: 32px;
    margin-bottom: 18px;
    color: #7a7a7a;
    font-size: 28px;
    width: 49px;
    height: 49px;
    margin-left: 9px;
    line-height: 49px;
    text-align: center;
    -webkit-transition: 0.2s;
    -moz-transition: 0.2s;
    -o-transition: 0.2s;
    -ms-transition: 0.2s;
    transition: 0.2s;
    transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
}

.icon-list-icon i {
    transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
}
</style>
