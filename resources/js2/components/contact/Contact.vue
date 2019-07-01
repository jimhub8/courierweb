<template>
<div>
    <div class="page-content-banner" style="background-image:url(/storage/web/contact-page-banner.jpg);"></div>
    <div class="col-lg-12 col-sm-12 col-xs-12 fullwidthsidebar">
        <div class="page-title-wrapper">
            <h1 class="page-title">Contact</h1>
            <p>You can talk to us or visit our offices within the normal working hours</p>
        </div>

        <div class="page-content">
            <article id="post-31" class="post-31 page type-page status-publish has-post-thumbnail hentry">
                <div class="page-content-bottom">
                    <Contact id="contact"></Contact>
                    <Media id="media"></Media>
                    <Map></Map>
                </div>
            </article>
        </div>
    </div>
</div>
</template>

<script>
import Contact from './contact/Contact';
import Map from './contact/Map';
import Media from './contact/Media';
export default {
    components: {
        Map,
        Media,
        Contact
    },

    beforeRouteLeave(to, from, next) {
        eventBus.$emit("loaderEvent");
        next();
    },
}
</script>

<style scoped>
#contact #header h2::before {
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

#contact #header p::after {
    max-width: 75px;
    height: 1px;
    content: "";
    display: block;
    background: rgb(11, 166, 221);
    margin: 19px auto 0px;
}

#contact #header p {
    font-weight: 700;
    font-size: 18px;
    color: rgb(162, 162, 162);
    margin: 14px 0px 0px;
}

#contact #body p {
    font-size: 17px;
    margin-bottom: 33px;
}

#media {
    display: none;
}

@media only screen and (max-width: 768px) {
    #media {
        display: block;
    }
    #contact {
        display: none;
    }
}
</style>
