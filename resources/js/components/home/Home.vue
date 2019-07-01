<template>
<div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/storage/web/truck1.jpg" class="d-block w-100" alt="..." style="height: 85vh;">
                <div class="carousel-caption d-none d-md-block">
                    <div class="row">
                        <div class="col-md-8" style="margin-top: 150px;">
                            <img src="/storage/web/slider-2-2.png" alt="" style="margin-left: -300px;">
                            <Cargo></Cargo>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/storage/web/truck2.jpg" class="d-block w-100" alt="..." style="height: 85vh;">
                <div class="carousel-caption d-none d-md-block">
                    <div class="row">
                        <div class="col-md-8" style="margin-top: 150px;">
                            <img src="/storage/web/slider1-layer2.png" alt="" style="margin-left: -400px;">
                            <Cargo></Cargo>
                        </div>
                        <div class="col-md-3">
                    <img src="/storage/web/slider1-layer1.png" alt="" style="float: right;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/storage/web/home2-slider1.jpg" class="d-block w-100" alt="..." style="height: 85vh;">
                <div class="carousel-caption d-none d-md-block">
                    <div class="row">
                        <div class="col-md-8" style="margin-top: 150px;">
                            <Cargo></Cargo>
                        </div>
                        <div class="col-md-3">
                    <img src="/storage/web/home-1-layer-1.png" alt="" style="float: right;">
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
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <v-layout row>
            <v-flex sm4>
                <v-layout wrap class="vc_row">
                    <v-flex sm2 style="margin-top: 20px;">
                        <div class="icon-list-icon" style="border-color:#0ba6dd;color:#0ba6dd;"><i
                                class="fa fa-bus"></i></div>
                    </v-flex>

                    <v-flex sm9 style="margin-top: 20px;">
                        <h2>Express Courier</h2>
                        <p>We offer pickup and same-day delivery, on time, every time – across town or across the country – whether on-demand, scheduled or overnight.</p>
                    </v-flex>
                    <v-flex sm2 style="margin-top: 20px;">
                        <div class="icon-list-icon" style="border-color:#0ba6dd;color:#0ba6dd;"><i
                                class="fas fa-shield-alt"></i></div>
                    </v-flex>

                    <v-flex sm9 style="margin-top: 20px;">
                        <h2>Order Fulfillment</h2>
                        <p>Ac eleifend tellus ultrices sit amet. Fusce a quam a urna sollicitudin vestibulum viverra vel
                            felis. Vestibulum ante ipsum.</p>
                    </v-flex>
                </v-layout>
            </v-flex>

            <v-flex sm3>
                <img src="/storage/web/home3-services.jpg" alt="boxleo" style="width: 100%; border-radius: 7px">
            </v-flex>

            <v-flex sm4 offset-sm-1>
                <v-layout wrap class="vc_row">
                    <v-flex sm2 style="margin-top: 20px;">
                        <div class="icon-list-icon" style="border-color:#0ba6dd;color:#0ba6dd;"><i
                                class="fas fa-external-link-square-alt"></i></div>
                    </v-flex>

                    <v-flex sm9 style="margin-top: 20px;">
                        <h2>Medical Courier</h2>
                        <p>Ac eleifend tellus ultrices sit amet. Fusce a quam a urna sollicitudin vestibulum viverra vel
                            felis. Vestibulum ante ipsum.</p>
                    </v-flex>
                    <v-flex sm2 style="margin-top: 20px;">
                        <div class="icon-list-icon" style="border-color:#0ba6dd;color:#0ba6dd;"><i
                                class="fa fa-cube"></i></div>
                    </v-flex>

                    <v-flex sm9 style="margin-top: 20px;">
                        <h2>Third Party Logistics</h2>
                        <p>Ac eleifend tellus ultrices sit amet. Fusce a quam a urna sollicitudin vestibulum viverra vel
                            felis. Vestibulum ante ipsum.</p>
                    </v-flex>
                </v-layout>
            </v-flex>
        </v-layout>

        <v-layout wrap>
            <v-flex sm4>
                <v-card style="background: #0BA6DD; color: #fff;">
                    <v-img src="/storage/web/Customer-care.png" aspect-ratio="1.2"></v-img>

                    <div class="feature-box-icon" id="hand" style="margin-top: 316px;"><i
                            class="fa fa-hand-pointer-o"></i></div>
                    <v-card-title primary-title style="margin-top: 23px;">
                        <div>
                            <h3 class="headline mb-0">SECURE TRANSPORTATION</h3>
                            <div> Suspendisse cursus, nisl at venenatis malesuada, ex tortor vestibulum arcu, quis
                                imperdiet neque eros quis Morbi eget tempus tellus. Aenean eu tempus tellus. </div>
                        </div>
                    </v-card-title>

                    <v-card-actions style="text-align: center">
                        <v-btn round style="border: 1px solid;margin: auto;" flat color="white">
                            <router-link to="/faqs">more</router-link>
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-flex>

            <v-flex sm4>
                <v-card style="background: #0BA6DD; color: #fff;">

                    <v-card-title primary-title>
                        <div>
                            <h3 class="headline mb-0">SECURE TRANSPORTATION</h3>
                            <div> Suspendisse cursus, nisl at venenatis malesuada, ex tortor vestibulum arcu, quis
                                imperdiet neque eros quis Morbi eget tempus tellus. Aenean eu tempus tellus. </div>
                        </div>
                        <div class="feature-box-icon" id="truck" style="margin-top: 235px;"><i class="fa fa-truck"></i>
                        </div>
                    </v-card-title>
                    <v-card-actions style="text-align: center; margin-bottom: 50px;">
                        <v-btn round style="border: 1px solid;margin: auto;" flat color="white">
                            <router-link to="/faqs">more</router-link>
                        </v-btn>
                    </v-card-actions>
                    <v-img src="/storage/web/Cargo-boxes_Website.png" aspect-ratio="1.2"></v-img>
                </v-card>
            </v-flex>

            <v-flex sm4>
                <v-card style="background: #0BA6DD; color: #fff;">
                    <v-img src="/storage/web/Warehouse_Website.png" aspect-ratio="1.2"></v-img>
                    <v-card-title primary-title style="margin-top: 23px;">
                        <div>
                            <h3 class="headline mb-0">SECURE TRANSPORTATION</h3>
                            <div> Suspendisse cursus, nisl at venenatis malesuada, ex tortor vestibulum arcu, quis
                                imperdiet neque eros quis Morbi eget tempus tellus. Aenean eu tempus tellus. </div>
                        </div>
                    </v-card-title>

                    <v-card-actions style="text-align: center">
                        <v-btn round style="border: 1px solid;margin: auto;" flat color="white">
                            <router-link to="/faqs">more</router-link>
                        </v-btn>
                    </v-card-actions>
                    <div class="feature-box-icon" style="margin-top: 316px;" id="dropbox"><i class="fab fa-dropbox"></i>
                    </div>
                </v-card>
            </v-flex>
        </v-layout>
        <v-layout wrap>
            <v-flex sm8>
                <h1 style="color: #0cdf82;font-size: 36px;">Cum sociis natoque penatibus et magnis dis parturient
                    montes.</h1>
                <p>Nascetur ridiculus mus. Donec quis risus ut nisi gravida volutpat. Fusce hendrerit quam eget bibendum
                    finibus In euismod rhoncus dapibus. Integer tincidunt vel neque vel rhoncus. Quisque fermentum,
                    sapien non porttitor sodales, neque velit eleifend augue, vitae aliquam nibh velit id nisi. In
                    euismod.</p>
                <br>
                <p>Rhoncus dapibus. Integer tincidunt vel neque vel rhoncus. Quisque fermentum, sapien non porttitor
                    sodales, neque velit eleifend augue, vitae aliquam nibh velit id nisi. Vestibulum non lobortis
                    sapien. Aenean rhoncus porta vehicula. Mauris quam erat, mattis vitae arcu id, tincidunt posuere
                    justo. Nulla viverra ipsum id semper dignissim. nteger tincidunt vel.</p>
            </v-flex>
            <v-flex sm3 offset-sm-1>
                <img src="/storage/web/slider1-layer1.png" alt="Boxleo" style="height: 45vh">
            </v-flex>
        </v-layout>
    </div>

    <v-layout wrap class="container icon_sq">
        <v-flex sm3>
            <div class="icon-list-icon" style="border-color:#0cdf82;color:#0cdf82;border-width:2px;"><i
                    class="far fa-plus-square"></i></div>
        </v-flex>

        <v-flex sm3>
            <div class="icon-list-icon" style="border-color:#0cdf82;color:#0cdf82;border-width:2px;"><i
                    class="fa fa-paperclip"></i></div>
        </v-flex>
        <v-flex sm3>
            <div class="icon-list-icon" style="border-color:#0cdf82;color:#0cdf82;border-width:2px;"><i
                    class="fa fa-bars"></i></div>
        </v-flex>
        <v-flex sm3>
            <div class="icon-list-icon" style="border-color:#0cdf82;color:#0cdf82;border-width:2px;"><i
                    class="fa fa-object-ungroup"></i></div>
        </v-flex>
    </v-layout>

            <div style="color:#fff; background: url('/storage/web/home3-bg.jpg');align-items: center;padding: 60px;background-attachment: fixed;background-position: center;">
            <v-layout wrap class="container">
                <v-flex sm2>
                    <h1 style="margin: 0px 0px 4px;padding: 0px;font-size: 40px;">256</h1>
                    <p style="margin: 0px 0px 4px;padding: 0px;font-size: 13px;">SED FERMENTUM NISL</p>
                </v-flex>
                <v-flex sm2>
                    <h1 style="margin: 0px 0px 4px;padding: 0px;font-size: 40px;">154</h1>
                    <p style="margin: 0px 0px 4px;padding: 0px;font-size: 13px;">DONEC AUCTOR NISL VEL ODIO</p>
                </v-flex>
                <v-flex sm2>
                    <h1 style="margin: 0px 0px 4px;padding: 0px;font-size: 40px;">5000</h1>
                    <p style="margin: 0px 0px 4px;padding: 0px;font-size: 13px;">PHASELLUS AC VOLUTPAT SAPIEN</p>
                </v-flex>
                <v-flex sm2>
                    <h1 style="margin: 0px 0px 4px;padding: 0px;font-size: 40px;">919</h1>
                    <p style="margin: 0px 0px 4px;padding: 0px;font-size: 13px;">CRAS VULPUTATE NEQUE</p>
                </v-flex>
                <v-flex sm2>
                    <h1 style="margin: 0px 0px 4px;padding: 0px;font-size: 40px;">76</h1>
                    <p style="margin: 0px 0px 4px;padding: 0px;font-size: 13px;">HAC HABITASSE PLATEA DICTUMST</p>
                </v-flex>
                <v-flex sm2>
                    <h1 style="margin: 0px 0px 4px;padding: 0px;font-size: 40px;">4706</h1>
                    <p style="margin: 0px 0px 4px;padding: 0px;font-size: 13px;">FUSCE A QUAM</p>
                </v-flex>
            </v-layout>
                </div>

    <v-layout wrap class="container">
        <v-flex sm8>
            <h2 style="color: #0cdf82; font-size: 15px;font-weight: 700;">NASCETUR RIDICULUS MUS</h2>
            <p>Donec quis risus ut nisi gravida volutpat. Fusce hendrerit quam eget bibendum finibus In euismod rhoncus
                dapibus. Integer tincidunt vel neque vel rhoncus. Quisque fermentum, sapien non porttitor sodales, neque
                velit eleifend augue, vitae aliquam nibh velit id nisi. In euismod</p><br>
            <p>rhoncus dapibus. Integer tincidunt vel neque vel rhoncus. Quisque fermentum, sapien non porttitor
                sodales, neque velit eleifend augue, vitae aliquam nibh velit id nisi. Vestibulum non lobortis sapien.
                Nunc pretium posuere tempus. Donec et odio eget erat finibus interdum. Nulla facilisi. Vestibulum
                porttitor dolor massa, ac sodales ligula interdum vitae. Integer tempus nisl in sem lobortis, eu posuere
                lorem aliquam. Integer justo orci, viverra vitae efficitur quis, volutpat vitae mi. Fusce at neque sem.
            </p>
        </v-flex>
        <v-flex sm3 offset-sm-1>

           <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1458338603548">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="translogistic-progress-bar">
                                        <div class="percent">
                                            <span>%</span>
                                            <label class="counter-1605380840">20</label>
                                        </div>
                                        <div class="progress-content" style="font-size: 12px;">
                                            <div class="title" style="color:#a4a4a4; font-size: 12px !important;">Curabitur vitae sapien quis lacus congue
                                            </div>
                                            <div id="progress-wrap-1605380840" class="progress-wrap progress"
                                                data-progress-percent="20">
                                                <div id="progress-bar-1605380840" class="progress-bar progress" style="width: 20%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1458338633966">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="translogistic-progress-bar">
                                        <div class="percent"><span>%</span><label class="counter-320698228">82</label>
                                        </div>
                                        <div class="progress-content" style="font-size: 12px;">
                                            <div class="title" style="color:#a4a4a4; font-size: 12px !important;">Vestibulum pharetra, sem in condimentum
                                            </div>
                                            <div id="progress-wrap-320698228" class="progress-wrap progress" data-progress-percent="82">
                                                <div id="progress-bar-320698228" class="progress-bar progress" style="width: 82%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="translogistic-progress-bar">
                                        <div class="percent"><span>%</span><label class="counter-7392438100">100</label>
                                        </div>
                                        <div class="progress-content" style="font-size: 12px;">
                                            <div class="title" style="color:#a4a4a4; font-size: 12px !important;">Curabitur vitae sapien quis lacus congue
                                            </div>
                                            <div id="progress-wrap-7392438100" class="progress-wrap progress"
                                                data-progress-percent="100">
                                                <div id="progress-bar-7392438100" class="progress-bar progress" style="width: 100%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </v-flex>
    </v-layout>

    <v-layout wrap
        style="background: url('/storage/web/home3-layer3.jpg');align-items: center;height: 400px;background-attachment: fixed;background-position: center;">
        <v-flex sm5>

        </v-flex>
        <v-flex sm7>
            <p style="font-size: 36px; line-height: 35px; margin-bottom: 38px;"><strong><span
                        style="color: #04bdff;">Suspendisse nec velit vitae urna aliquet accumsan. Donec vitae
                        turpis</span></strong></p>
            <p style="font-size: 22px; line-height: 30px; margin-bottom: 65px;"><span style="color: #ffffff;">Donec quis
                    risus ut nisi gravida volutpat. Fusce hendrerit quam eget bibendum finibus In euismod rhoncus
                    dapibus. Integer tincidunt vel neque vel rhoncus. Quisque.</span></p>
            <br>
            <v-btn flat color="primary" style="border: 1px solid;" round>More</v-btn>
        </v-flex>
    </v-layout>

    <!-- <div>
                    <h3>TESTIMONIAL</h3>
                    <p>Praesent magna felis, mattis vel egestas vel, tempus et erat. Pellentesque euismodtincidunt neque, sit amet fermentum est facilisis ac.</p>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active row">
                                <div class="col-md-4">
                                    <img src="/storage/web/yY3Z0i2yrEXgQzmUk4m58Fzg5SwgTuP0ipLiG4sl.jpeg" style="width: 100px !important; border-radius: 50%;height:100px;" class="d-block w-100" alt="...">
                                </div>

                                <div class="col-md-4">
                                    <img src="/storage/web/yY3Z0i2yrEXgQzmUk4m58Fzg5SwgTuP0ipLiG4sl.jpeg" style="width: 100px !important; border-radius: 50%;height:100px;" class="d-block w-100" alt="...">
                                </div>

                                <div class="col-md-4">
                                    <img src="/storage/web/yY3Z0i2yrEXgQzmUk4m58Fzg5SwgTuP0ipLiG4sl.jpeg" style="width: 100px !important; border-radius: 50%;height:100px;" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/web/yY3Z0i2yrEXgQzmUk4m58Fzg5SwgTuP0ipLiG4sl.jpeg" style="width: 100px !important; border-radius: 50%;height:100px;" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/web/yY3Z0i2yrEXgQzmUk4m58Fzg5SwgTuP0ipLiG4sl.jpeg" style="width: 100px !important; border-radius: 50%;height:100px;" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div> -->
    <div style="height:300px" class="container text-center">
        <h1>TESTIMONIAL</h1>
        <p>Praesent magna felis, mattis vel egestas vel, tempus et erat. Pellentesque euismod
            tincidunt neque, sit amet fermentum est facilisis ac.</p>
    </div>

    <v-layout wrap style="background: #0cde81 url('/storage/web/form-bg.png');align-items: center;height: 400px;background-attachment: fixed;background-position: center;padding: 10px;height: 100%;">
        <v-flex sm5>
            <img src="/storage/web/box.png" alt="">
        </v-flex>
        <v-flex sm7 style="color: #fff;text-align: right">
            <div class="wpb_wrapper"> <p style="text-align: right; margin-bottom: 0px; font-size: 49px; line-height: 44px; letter-spacing: -0.25px;">
                <span style="color: #ffffff;">get a&nbsp;quote</span><br> 
                <span style="color: #ffffff;"> 
                <strong>for&nbsp;best price</strong>
                </span><br> <span style="color: #ffffff;"> <strong>and service</strong>
                </span>
            </p>
            </div>
            <form action="" class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Departure">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Cargo description">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Other services">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Arrival">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Transportation method">
                    </div>
                    <v-btn flat color="white" style="border: 1px solid;" round>Send</v-btn>
                </div>
            </form>
        </v-flex>
    </v-layout>
</div>
</template>

<script>
import Cargo from "./Cargo";
export default {
  components: {
    Cargo
  },

  beforeRouteLeave(to, from, next) {
    eventBus.$emit("loaderEvent");
    next();
  }
};
</script>

<style scoped>
/* @import '../css/app.css'; */

.carousel-control-prev-icon,
.carousel-control-next-icon {
  background: rgba(255, 255, 255, 0.75);
  padding: 5px;
  transition: all 0.3s;
  -webkit-transition: all 0.3s;
  width: 50px;
  height: 50px;
  box-sizing: border-box;
  cursor: pointer;
  top: 50%;
  transform: matrix(1, 0, 0, 1, -171, -25);
  left: 100%;
  cursor: pointer;
  /* background: #000; */
  /* background: rgba(0,0,0,0.5); */
  position: absolute;
  display: block;
  z-index: 1000;
}

.carousel-control-prev-icon:before,
.carousel-control-next-icon:before {
  color: rgb(0, 0, 0);
  transition: all 0.3s;
  -webkit-transition: all 0.3s;
}

.carousel-control-prev-icon:before,
.carousel-control-next-icon:before {
  content: "\e825";
}

.carousel-control-prev-icon:before,
.carousel-control-next-icon:before {
  font-family: "revicons";
  font-size: 15px;
  color: #fff;
  display: block;
  line-height: 40px;
  text-align: center;
}

:after,
:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.container .flex .icon-list-icon {
  border-color: #0ba6dd;
  color: #0ba6dd;
  width: 57px;
  height: 57px;
  line-height: 54px;
  margin-right: 30px;
  font-size: 24px;
}

@media (min-width: 768px) .marginbottom30px .icon-list-number,
  .marginbottom30px .icon-list-icon {
  margin-bottom: 30px;
}

.container .flex .icon-list-icon {
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

.vc_row {
  margin-left: -15px;
  margin-right: -15px;
}

.feature-box-icon {
  color: #0ba6dd;
  bottom: -33px;
  top: inherit;
  width: 64px;
  height: 64px;
  line-height: 64px;
  background: #ffffff;
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

.wrap {
  margin-top: 30px !important;
}

.vc_col-sm-3 .icon-list .icon-list-icon {
  margin: 0 auto 45px;
  float: none;
}

#icon_sq .icon-list-icon {
  width: 57px;
  height: 57px;
  line-height: 54px;
  margin-right: 30px;
  font-size: 24px;
}

#icon_sq .icon-list-icon {
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
</style>
