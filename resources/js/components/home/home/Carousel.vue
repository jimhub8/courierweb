<template>
<div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/storage/web/offer.jpg" class="d-block w-100" alt="..." style="height: 75vh;">
                <div class="carousel-caption d-md-block">
                    <div class="row">
                        <div class="col-md-8" style="margin-top: -130px;">
                            <!-- <img src="/storage/web/slider-2-2.png" alt="" style="margin-left: -300px;" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="500ms"> -->
                            <Cargo></Cargo>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/storage/web/truck2.jpg" class="d-block w-100" alt="..." style="height: 75vh;">
                <div class="carousel-caption d-md-block">
                    <div class="row" style="margin-top: -130px;">
                        <div class="col-md-8">
                            <img src="/storage/web/slider1-layer2.png" alt="" style="margin-top: 160px;margin-left: -300px;width: 400px;" class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="500ms">
                            <Cargo></Cargo>
                        </div>
                        <div class="col-md-3">
                            <img src="/storage/web/slider1-layer1.png" alt="" style="float: right;margin-top: 180px;" class="wow bounceInRight" data-wow-duration="1s" data-wow-delay="500ms">
                        </div>
                        </div>
                    </div>
                </div>
            <div class="carousel-item">
                <img src="/storage/web/truck2.jpg" class="d-block w-100" alt="..." style="height: 75vh;">
                <div class="carousel-caption d-md-block">
                    <div class="row" style="margin-top: -130px;">
                        <div class="col-md-8">
                            <img src="/storage/web/slider1-layer2.png" alt="" style="margin-top: 160px;margin-left: -300px;width: 400px;" class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="500ms">
                            <Cargo></Cargo>
                        </div>
                        <div class="col-md-3">
                            <img src="/storage/web/slider1-layer1.png" alt="" style="float: right;margin-top: 180px;" class="wow bounceInRight" data-wow-duration="1s" data-wow-delay="500ms">
                        </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/storage/web/home2-slider1.jpg" class="d-block w-100" alt="..." style="height: 75vh;">
                    <div class="carousel-caption d-md-block">
                        <div class="row">
                            <div class="col-md-8" style="margin-top: -130px;">
                                <Cargo></Cargo>
                            </div>
                            <div class="col-md-3">
                                <img src="/storage/web/home-1-layer-1.png" alt="" style="float: right;height: 568px;margin-top: -480px;max-width: 400px;" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="500ms">
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
import Cargo from '../Cargo'
export default {
    components: {
        Cargo
    },

    beforeRouteLeave(to, from, next) {
        eventBus.$emit("loaderEvent");
        next();
    },
};
</script>

<style scoped>
.carousel-control-prev-icon[data-v-f8217dea] {
    opacity: 1;
    color: #000 !important;

}

.carousel-control-next-icon[data-v-f8217dea] {
    opacity: 1;
    color: #000 !important;
}

a,
a:visited {
    height: 30px;
    margin: auto;
    width: 30px;
    background: #e40613;
    /* padding: 10px; */
    margin-left: 50px;
    margin-right: 50px;
}

@media only screen and (max-width: 768px) {
    .carousel-caption img {
        display: none !important;
    }

    a[data-v-f8217dea],
    a[data-v-f8217dea]:visited {
        display: none;
    }

    .marginbottom30px .icon-list-number,
    .marginbottom30px .icon-list-icon {
        margin-bottom: 30px;
    }

    .carousel-item img {
        height: 50vh !important;
    }

}
</style>
