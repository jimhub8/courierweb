<template>
<div>
    <div class="page-content-banner" style="background-image:url('/storage/web/warehouse.jpg');"></div>
    <div class="container" id="warehouse">
        <div id="header">
            <h2 class="text-center">WAREHOUSE</h2>
            <p style="text-align: center;"> </p>
        </div>
        <div id="body" style="margin-top: 40px;">
            <p style="text-align: left ;">Boxleo Courier's Warehousing Service is the logistics answer you've been looking for. Our warehouse is strategically located in Westlands - Nairobi, allowing for fast access for clients when needed and quick delivery of products by our delivery team. </p>
            <p>Whether you have an urgent, temporary or long term storage need, our warehousing team is equipped to create an individual plan for you. We offer customized solutions to each client including Last Mile deliveries for residential and commercial customers, product fulfillment services, cross dock logistics and much more. From basic storage needs to intricate warehousing and daily route deliveries, Boxleo Courier & Fulfillment Services will be your trusted partner.</p><br>
            <!-- <h4 style="text-center font-size: 19px;color: #858585;text-align: center">NASCETUR RIDICULUS MUS</h4> -->
            <p style="text-align: left; font-size: 16px;margin-top: -40px;">With our wide range of pick-up and drop-off capabilities (bikes, cars, pick-up trucks, standard vans, refrigerated vans, standard straight trucks, refrigerated straight trucks and flat beds), our team will handle your warehousing needs from start to finish.</p>

            <v-layout wrap>
                <v-flex sm4 style="padding: 10px;">
                    <v-card>
                        <v-img src="/storage/web/home2-department1.jpg" aspect-ratio="1.2"></v-img>
                        <div class="department-icon" style="border-color:rgb(0, 118, 192);"><i class="fas fa-shield-alt" style="color:rgb(0, 118, 192);"></i></div>
                        <v-card-title primary-title style="margin-top: 30px;">
                            <div>
                                <h3 class="headline mb-0" style="font-size: 14px!important; line-height: 30px!important;"><strong>Storage Space and Efficiency in Warehousing</strong></h3>
                                <div> We offer flexible storage types such as bulk, pallet, rack storage, and more. By adjusting storage approaches to your product’s unique shapes and needs, efficiency can be found in both space used and in warehousing costs overall. </div>
                            </div>
                        </v-card-title>

                        <v-card-actions style="margin: auto;">
                            <v-btn round style="border: 1px solid;" flat :color="color">
                                <router-link to="/faqs">more</router-link>
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-flex>

                <v-flex sm4 style="padding: 10px;">
                    <v-card>
                        <v-img src="/storage/web/home2-department2.jpg" aspect-ratio="1.2"></v-img>
                        <div class="department-icon" style="border-color:rgb(0, 118, 192);"><i class="fa fa-umbrella" style="color:rgb(0, 118, 192);"></i></div>
                        <v-card-title primary-title style="margin-top: 30px;">
                            <div>
                                <h3 class="headline mb-0" style="font-size: 14px!important; line-height: 30px!important;"><strong>Warehousing Security</strong></h3>
                                <div> Not only are our warehouses secure from trespassers and thieves, but we take personal security and safety very seriously. Every measure is taken to ensure that warehouse employees and visitors are able to carry out their business in a safe and secure manner.</div>
                            </div>
                        </v-card-title>
                        <v-card-actions style="margin: auto;">
                            <v-btn round style="border: 1px solid;" flat :color="color">
                                <router-link to="/faqs">more</router-link>
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-flex>

                <v-flex sm4 style="padding: 10px;">
                    <v-card>
                        <v-img src="/storage/web/home2-department3.jpg" aspect-ratio="1.2"></v-img>
                        <div class="department-icon" style="border-color:rgb(0, 118, 192);"><i class="fas fa-exchange-alt" style="color:rgb(0, 118, 192);"></i></div>
                        <v-card-title primary-title style="margin-top: 30px;">
                            <div>
                                <h3 class="headline mb-0" style="font-size: 14px!important; line-height: 30px!important;"><strong>WMS – Warehouse Management System</strong></h3>
                                <div> Not only are our warehouses secure from trespassers and thieves, but we take personal security and safety very seriously. Every measure is taken to ensure that warehouse employees and visitors are able to carry out their business in a safe and secure manner</div>
                            </div>
                        </v-card-title>

                        <v-card-actions style="margin: auto;">
                            <v-btn round style="border: 1px solid;" flat :color="color">
                                <router-link to="/faqs">more</router-link>
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-flex>
            </v-layout>

            <v-layout wrap>
                <v-flex sm6>
                    <h3 style="text-center">Warehousing Storage Solutions</h3>
                    <p style="text-align: left;">Boxleo Courier & Fulfillment Services Ltd. is able to fully support and provide for your business’s warehousing needs. Our warehouse, located in Westlands, Nairobi, offers customizable solutions for your individual storage, distribution, and product transportation needs. Boxleo Courier offers an extensive range of warehousing storage solutions for all types of products, including:</p>
                    <ul style="font-weight: 600;color: #0ba6dd;list-style-type: circle;font-size: 15px;">
                        <li><span style="color: #858585; font-weight: 500;list-style-type: none;">Nutraceuticals</span></li>
                        <li><span style="color: #858585; font-weight: 500;">Supplements and Vitamins</span></li>
                        <li><span style="color: #858585; font-weight: 500;">Nutritional and Sports Beverages</span></li>
                        <li><span style="color: #858585; font-weight: 500;">Beauty and Skincare Products</span></li>
                        <li><span style="color: #858585; font-weight: 500;">Media and Books</span></li>
                        <li><span style="color: #858585; font-weight: 500;">Promotional Items</span></li>
                        <li><span style="color: #858585; font-weight: 500;">Dry Goods</span></li>
                        <li><span style="color: #858585; font-weight: 500;">Small Electronics</span></li>
                        <li><span style="color: #858585; font-weight: 500;">Apparel</span></li>
                    </ul>
            </v-flex>
            <v-flex sm6>
                <img src="/storage/web/warehouse-layer-2.jpg" class="d-block w-100" alt="..." style="height: 60vh;">
                <img src="" alt="">
            </v-flex>
            </v-layout>
            

        </div>

    </div>

    <Warehouse></Warehouse>

    <v-layout wrap class="container">
        <!-- <h3 style="text-center">NASCETUR RIDICULUS MUS</h3> -->
        <v-flex sm5>
                    <p>
                                <span class="wow fadeIn" style="color: rgb(0, 118, 192); font-size: 36px;"  data-wow-duration="700ms" data-wow-delay="300ms">
                                    <strong style="font-size: 28px;">Why Use Boxleo Courier & Fulfillment Services Ltd?</strong></span></p>
                    <p style="text-align: left;">When dealing with warehousing operations, or any part of a supply chain, efficiency is crucial. Even small savings in one element can translate into huge savings when applied to hundreds or even thousands of products. This sort of agility lets businesses become more competitive, expand, offer new products or services to customers, and more.</p>
                    <p style="text-align: left;">Getting the most effective and efficient warehousing solutions means skilled workers, a warehouse management system, integration with the logistics and fulfillment network, and other involved steps. For a small business, it can be daunting to try and set up these elements from scratch, which is why <a href="http://courierapp.test" target="_blank" style="color: #0076c0;">third-party companies</a> like Boxleo Courier exist. We provide professional, advanced warehousing storage solutions so you can focus on your core business and growth.</p>
            </v-flex>
            <v-flex sm6 offset-sm-1>
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1459337992542">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1459337997536">
                                <div class="animate anim-fadeIn animate-delay-0 wpb_column vc_column_container vc_col-sm-6 animated fadeIn">
                                    <div class="vc_column-inner vc_custom_1459360541683">
                                        <div class="wpb_wrapper">
                                            <div class="list-box">
                                                <div class="list-box-icon"><i class="fa fa-search-plus"></i></div>
                                                <h3 style="font-size: 17px;">Receiving & Put-Away</h3>
                                                <p>The act of handling products into a warehouse and onto a system. Put-away staff are then notified that stock is in staging waiting to be transported to a storage location.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="animate anim-fadeIn animate-delay-0-25 wpb_column vc_column_container vc_col-sm-6 animated fadeIn">
                                    <div class="vc_column-inner vc_custom_1459360549279">
                                        <div class="wpb_wrapper">
                                            <div class="list-box">
                                                <div class="list-box-icon"><i class="fab fa-dropbox"></i></div>
                                                <h3 style="font-size: 17px;">Picking & Packing</h3>
                                                <p>Primary and Secondary picking are done here. Goods are then packed within distribution centres following strict packing rules for successful packing.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1458574449629">
                                <div class="animate anim-fadeIn animate-delay-0-50 wpb_column vc_column_container vc_col-sm-6 animated fadeIn">
                                    <div class="vc_column-inner vc_custom_1459360551870">
                                        <div class="wpb_wrapper">
                                            <div class="list-box">
                                                <div class="list-box-icon"><i class="fa fa-truck"></i></div>
                                                <h3 style="font-size: 17px;">Dispatching & Returns</h3>
                                                <p>This is the ability to have goods ready for departure, just in time for carriers to load their trucks and bikes. Goods that are not successfully delivered must be returned to the warehouse.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="animate anim-fadeIn animate-delay-0-75 wpb_column vc_column_container vc_col-sm-6 animated fadeIn">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="list-box">
                                                <div class="list-box-icon"><i class="fa fa-road"></i></div>
                                                <h3 style="font-size: 17px;">Value-Adding</h3>
                                                <p>The value adding part is about performing work on the product to make it ‘ready for sale’. This is where products are produced, kitted, assembled, relabeled, modified, ‘burnt’in’, or subject to some other value adding process.</p>
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
</div>
</template>

<script>
import Headerpartial from "../include/Headerpartial";
import Warehouse from "./warehouse/Section";
export default {
  components: {
    Headerpartial,
    Warehouse
  },
  data() {
    return {
      color: "rgb(0, 118, 192)"
    };
  },

  beforeRouteLeave(to, from, next) {
    eventBus.$emit("loaderEvent");
    next();
  }
};
</script>

<style scoped>
#warehouse #header h2::before {
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

#warehouse #header p::after {
  max-width: 75px;
  height: 1px;
  content: "";
  display: block;
  background: rgb(11, 166, 221);
  margin: 19px auto 0px;
}

#warehouse #header p {
  font-weight: 700;
  font-size: 18px;
  color: rgb(162, 162, 162);
  margin: 14px 0px 0px;
}

#warehouse #body p {
  font-size: 17px;
  margin-bottom: 33px;
}

.department-icon {
  position: absolute;
  margin: auto;
  right: 0;
  left: 0;
  width: 65px;
  font-size: 31px;
  line-height: 63px;
  height: 65px;
  border-radius: 5px;
  background: #fff;
  color: #06ab74;
  border: 2px solid rgb(0, 118, 192);
  transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  text-align: center;
  margin-top: -30px;
}
</style>
