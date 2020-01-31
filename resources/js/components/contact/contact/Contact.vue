<template>
<div>
    <div class="vc_row wpb_row vc_row-fluid container vc_custom_1458657054047">
        <div class="wpb_column vc_column_container vc_col-sm-8">
            <div class="vc_column-inner vc_custom_1458659403439">
                <div class="wpb_wrapper">
                    <h2 style="font-size: 15px;color: #858585;text-align: left" class="vc_custom_heading vc_custom_1458658247024">SEND A MESSAGE</h2>
                    <div role="form" class="wpcf7" id="wpcf7-f753-p31-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response">

                        </div>
                        <div class="wpcf7-form" novalidate="novalidate">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="753">
                                <input type="hidden" name="_wpcf7_version" value="5.1.1">
                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f753-p31-o1">
                                <input type="hidden" name="_wpcf7_container_post" value="31">
                                <input type="hidden" name="g-recaptcha-response" value="">
                                </div>
                                <div class="contactPageForm">
                                    <div class="row wow fadeIn">
                                        <div class="col-sm-4 col-xs-12 formrow">
                                            <div class="form-group">
                                                <span class="wpcf7-form-control-wrap your-name">
                                                    <input type="text" v-model="form.name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="NAME">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12 formrow">
                                            <div class="form-group">
                                                <span class="wpcf7-form-control-wrap your-email">
                                                    <input type="email" v-model="form.email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-MAIL">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <span class="wpcf7-form-control-wrap subject">
                                                    <input type="text" v-model="form.subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="SUBJECT">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-12 wow fadeIn 25">
                                            <div class="form-group"> <span class="wpcf7-form-control-wrap your-message">     <textarea v-model="form.message" cols="40" rows="8" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="MESSAGE" style="border: 1px solid #C2C2C2;">
                                                </textarea>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <p id="submit">
                                        <input type="submit" value="SEND MESSAGE" class="wpcf7-form-control wpcf7-submit alternative-button wow fadeIn" style="color: #0ba6dd; background: transparent; border: 1px solid;" @click="send">
                                        <span class="ajax-loader">

                                    </span>
                                    </p>
                                </div>
                                <div class="wpcf7-response-output wpcf7-display-none">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wow fadeIn wpb_column vc_column_container vc_col-sm-4">
                <div class="vc_column-inner vc_custom_1459362534421">
                    <div class="wpb_wrapper">
                        <h2 style="font-size: 15px;color: #858585;text-align: left" class="vc_custom_heading vc_custom_1458658597432">INFORMATIONS</h2>
                        <div class="contact-information themethreecolor">
                            <div class="contact-information-row">
                                <div class="contact-information-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-information-content">
                                    <strong>Address:</strong>Timshack House, Ngong Road, <br> 5th Floor, Office Suite 5F </div>
                            </div>
                            <div class="contact-information-row">
                                <div class="contact-information-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-information-content">
                                    <strong>Telephone:</strong>
                                    + 254 743 332 743
                                    <br>
                                    <span>+ 254 743 332 754</span>
                                </div>
                            </div>
                            <div class="contact-information-row">
                                <div class="contact-information-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="contact-information-content">
                                    <strong>E-Mail:</strong> info@boxleo.co.ke
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
                .post('/message', this.form)
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
#submit input:hover {
    color: #fff;
    background: #0ba6dd;
}
</style>
