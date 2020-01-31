<template>
<div class="wpcf7-form" novalidate="novalidate">
    <div style="display: none;"> <input type="hidden" name="_wpcf7" value="93">
        <input type="hidden" name="_wpcf7_version" value="5.1.1"> <input type="hidden" name="_wpcf7_locale" value="en_US"> <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f93-p12-o1"> <input type="hidden" name="_wpcf7_container_post" value="12"> <input type="hidden" name="g-recaptcha-response" value="">
    </div>
    <div class="getaquote">
        <div class="row">
            <div class="col-sm-6 col-xs-12 formrow animate anim-fadeIn animate-delay-0 animated fadeIn">
                <div class="input-group"> <span class="input-group-addon" style="background: #e30613;"><i class="fas fa-user"></i></span><span class="wpcf7-form-control-wrap your-name"><input type="text" v-model="form.name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name"></span></div>
            </div>
            <div class="col-sm-6 col-xs-12 formrow animate anim-fadeIn animate-delay-0-25 animated fadeIn">
                <div class="input-group"> <span class="input-group-addon" style="background: #e30613;"><i class="fas fa-envelope"></i></span><span class="wpcf7-form-control-wrap your-email"><input type="email" v-model="form.email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-Mail"></span></div>
            </div>
            <div class="col-sm-6 col-xs-12 formrow animate anim-fadeIn animate-delay-0-50 animated fadeIn">
                <div class="input-group"> <span class="input-group-addon" style="background: #e30613;"><i class="fas fa-arrow-left"></i></span><span class="wpcf7-form-control-wrap departure"><input type="text" v-model="form.pickup_address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Pickup address"></span></div>
            </div>
            <div class="col-sm-6 col-xs-12 formrow animate anim-fadeIn animate-delay-0-75 animated fadeIn">
                <div class="input-group"> <span class="input-group-addon" style="background: #e30613;"><i class="fas fa-arrow-right"></i></span><span class="wpcf7-form-control-wrap arrival"><input type="text" v-model="form.delivery_address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Delivery address"></span></div>
            </div>
            <div class="col-sm-6 col-xs-12 formrow animate anim-fadeIn animate-delay-1 animated fadeIn">
                <div class="input-group"> <span class="input-group-addon" style="background: #e30613;"><i class="fas fa-spinner"></i></span><span class="wpcf7-form-control-wrap cargodesc"><input type="text" v-model="form.courier_description" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Courier Description"></span></div>
            </div>
            <div class="col-sm-6 col-xs-12 formrow animate anim-fadeIn animate-delay-1-25 animated fadeIn">
                <div class="input-group"> <span class="input-group-addon" style="background: #e30613;"><i class="fas fa-cog"></i></span><span class="wpcf7-form-control-wrap transportationmethod"><input type="text" v-model="form.delivery_method" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Delivery Method"></span></div>
            </div>
            <div class="col-sm-8 col-xs-12 formrow animate anim-fadeIn animate-delay-1-50 animated fadeIn">
                <div class="input-group"> <span class="input-group-addon" style="background: #e30613;"><i class="fas fa-star"></i></span><span class="wpcf7-form-control-wrap otherdesc"><input type="text" v-model="form.other_services" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Other Services That You Would Like To Have"></span>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 formrow animate anim-fadeIn animate-delay-1-75 animated fadeIn">
                <input type="submit" value="SEND" class="wpcf7-form-control wpcf7-submit getaquote-button" @click="send"><span class="ajax-loader"></span></div>
        </div>
    </div>
    <div class="wpcf7-response-output wpcf7-display-none"></div>
</div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                name: '',
                email: '',
                subject: '',
                message: '',
            }
        }
    },
    methods: {
        send() {
            eventBus.$emit("progressEvent");
            // eventBus.$emit("loadingRequest");
            axios
                .post('/quote', this.form)
                .then(response => {
                    eventBus.$emit("StopLoadingEvent");
                    eventBus.$emit("alertRequest", "Thank you for contacting us");
                })
                .catch(error => {
                    eventBus.$emit("StopLoadingEvent");
                    this.loading = false;
                    this.errors = error.response.data.errors;
                });
        }
    },
}
</script>

<style scoped>
.vc_custom_1459253199271 {
    padding-top: 250px !important;
    padding-bottom: 250px !important;
    background-image: url(/storage/web/form-left-layer.png) !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: contain !important;
}

.getaquote input[type="submit"] {
    background: #f00 !important;
}

.getaquote input[type="submit"]:hover {
    background: #fff !important;
    color: #000 !important;
}

@media only screen and (max-width: 768px) {
    .vc_row.vc_row-flex {
        width: 100% !important;
    }
}
</style>
