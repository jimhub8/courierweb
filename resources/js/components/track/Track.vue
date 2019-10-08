<template>
<div>
    <div class="page-content-banner" style="background-image:url('/storage/web/default-page-baner.jpg');"></div>
    <div class="container" id="track">
        <div class="text-center" id="header">
            <h2>TRACK YOUR SHIPMENT</h2>
            <p style="text-align: center;">Did you know you can track your Boxleo parcels at Courier Tracking?
And, by doing so you can use our new range of delivery options so you can get your parcel delivered first time. Visit our Services page to find out more.
</p>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cargo-tracking-form querypageversion">
                        <div>
                            <h3 style="color:#0ba6dd;">COURIER TRACKING</h3>
                            <p style="color:#7c7c7c;">You can find out the location of your products by entering the cargo tracking number.<i>Cargo tracking form test code: BL_00000001</i></p>
                            <div class="input-group">
                                <span class="input-group-addon">
                                <i class="fa fa-info-circle"></i
                                ></span>
                                <input type="text" v-model="search" placeholder="COURIER Tracking Number" @keyup.enter="redirect">
                                <!-- <input value="Track"> -->
                                <v-btn @click="redirect" flat style="border: 1px solid; border-radius: 3px;" color="primary">Track</v-btn>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Search></Search>
        <div class="vc_row wpb_row vc_row-fluid container vc_custom_1463483358445 vc_row-o-content-bottom vc_row-flex">
            <div class="wpb_column vc_column_container vc_col-sm-8">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                              <h3><strong>Easy online shipment tracking options:</strong></h3>
                                <ol style="font-weight: 600; color: #0ba6dd;text-align: left;">
                                    <li><span style="color: #858585; font-weight: 500;">By tracking number</span></li>
                                <p style="color: rgb(152, 154, 154);">Online, enter the 10-digit tracking number shown on your Boxleo Courier Waybill/ Receipt and click on ‘Track’ to follow the progress of your shipment/delivery. You can track without a tracking number because we provide proactive shipment notifications and monitor all your shipment.</p>
                                    <li><span style="color: #858585; font-weight: 500;">Via email</span></li>
                                    <p style="color: rgb(152, 154, 154);">Send an email to <a href="mailto:tracking@boxleo.co.ke " target="_blank" style="color: #0076c0;">tracking@boxleo.co.ke</a>  with the tracking number and receive an email back within few minutes.</p>
                                    <!-- <li><span style="color: #858585; font-weight: 500;">Proin tincidunt, justo vel molestie accumsan.</span></li> -->
                                </ol>
                                <p>Running a business is stressful enough. When you run a company that routinely ships documents or products to clients or customers you will experience even more stress. An excellent way to lower the stress is to use Boxleo Courier on every single item shipped out by your company. Our tracking technology benefits companies and clients alike.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="animate anim-fadeInRight wpb_column vc_column_container vc_col-sm-4 animated fadeInRight">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1459082781309">
                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper vc_box_border_grey">
                                    <img width="274" height="457" src="/storage/web/cargo-tracking-layer.jpg" class="vc_single_image-img attachment-full" alt="" sizes="(max-width: 274px) 100vw, 274px"></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Track></Track>
    <div class="wpb_wrapper container">
        <div class="wpb_text_column wpb_content_element">
            <div class="wpb_wrapper">
                <p>One of the biggest benefits of using a Boxleo tracking is that it helps to minimize customer anxiety and buyer remorse. Customers who are unable to track their packages tend to stress over where it is located and when it will arrive. They might also experience buyer’s remorse and consider cancelling their order since they don’t know when it will arrive. Boxleo reduces this negligible levels with our robust tracking technology. We help our clients achieve the below:</p>
                <ol style="font-weight: 600; color: #0ba6dd;text-align: left;">
                    <li><span style="color: #858585; font-weight: 500;">Minimize Customer Anxiety </span></li>
                    <li><span style="color: #858585; font-weight: 500;">Reduce Pressure on Customer Service </span></li>
                    <li><span style="color: #858585; font-weight: 500;">Recover Lost Package</span></li>
                    <li><span style="color: #858585; font-weight: 500;">Transparency </span></li>
                    <li><span style="color: #858585; font-weight: 500;">Provide Delivery Information </span></li>
                </ol>
                <p>A package tracking number makes it easier for us to provide transparency to our customers. We are as transparent as possible because it helps build trust with our clients. Our clients can always track a package and know their purchase is on the way and will arrive in the estimated time provided, helping to build a lasting relationship.</p>
                <p>Boxleo tracking of a shipment can do much more than tell our customers when the package is en route. It can provide them with a host of added information. When a customer clicks on the “Track” button he or she will be able to see an estimated delivery date, each stop along the way and if the delivery date has been changed. Once the package has been delivered. In addition, we provide instantaneous notifications at every stage of the delivery process helping our clients have more faith in our services. </p>
            </div>
        </div>
    </div>

</div>
</template>

<script>
import Headerpartial from "../include/Headerpartial";
import Track from "./track/Section";
import Search from "./track/Search";
export default {
  components: {
    Headerpartial,
    Search,
    Track
  },
  data() {
    return {
      search: ""
    };
  },
  methods: {
    redirect() {
      search: "",
      eventBus.$emit("searchEvent", this.search);
      this.$router.push({
        name: "search",
        params: {
          search: this.search
        }
      });
    }
  },

  beforeRouteLeave(to, from, next) {
    eventBus.$emit("loaderEvent");
    // alert('leave')
    next();
  }
};
</script>

<style scoped>
#track #header h2::before {
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

#track #header p::after {
  max-width: 75px;
  height: 1px;
  content: "";
  display: block;
  background: rgb(11, 166, 221);
  margin: 19px auto 0px;
}

#track #header p {
  font-weight: 700;
  font-size: 18px;
  color: rgb(162, 162, 162);
  margin: 14px 0px 0px;
}

#track #body p {
  font-size: 17px;
  margin-bottom: 33px;
}

.services-box-icon.icontitlecenterparagraphleft {
  margin-left: auto;
  margin-right: auto;
}

.services-box-icon {
  width: 56px;
  height: 56px;
  line-height: 51px;
  font-size: 25px;
  padding-left: 0px;
}

.services-box-icon {
  width: 77px;
  height: 77px;
  line-height: 77px;
  font-size: 35px;
  color: rgb(11, 166, 221);
  text-align: center;
  margin-bottom: 30px;
  transform: rotate(45deg);
  margin-left: 14px;
  margin-top: 14px;
  border-radius: 5px;
  border-width: 2px;
  border-style: solid;
  border-color: rgb(11, 166, 221);
  border-image: initial;
  transition: all 0.3s ease 0s;
}

.services-box-icon i {
  transform: rotate(-45deg);
}

.chronologyitem-text .year {
  font-size: 14.5px;
  font-family: "Source Sans Pro";
  line-height: 1.7em;
  font-weight: 700;
}
</style>
