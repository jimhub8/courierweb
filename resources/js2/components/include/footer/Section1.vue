<template>
<div class="wpb_column vc_column_container vc_col-sm-4">
    <div class="vc_column-inner vc_custom_1458226623360">
        <div class="wpb_wrapper">
            <div class="content-widget-title small text-left">
                <h3 style="font-size:14px;">SUBSCRIBE TO OUR NEWSLETTER</h3>
            </div>
            <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
            <div class="wpb_text_column wpb_content_element">
                <div class="wpb_wrapper">
                    <div id="mc4wp-form-1" class="mc4wp-form mc4wp-form-237" data-id="237" data-name="Translogistic Footer Newsletter">
                        <div class="mc4wp-form-fields">
                            <div class="footer-newsletter">
                                <i class="fa fa-envelope"></i>
                                <input type="submit" value="SUBSCRIBE" style="width: 5vw;padding: 1px 6px !important;font-size: 10px;" @click="subscribe">
                                <input type="email" v-model="form.email" placeholder="Your Email" required="" @keyup.enter="subscribe">
                            </div>
                            </div>
                            <label style="display: none !important;">Leave this field empty if you're human: 
                            <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off">
                            </label>
                            <input type="hidden" name="_mc4wp_timestamp" value="1556215903">
                            <input type="hidden" name="_mc4wp_form_id" value="237">
                            <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                            <div class="mc4wp-response"></div>
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
                email: '',
            }
        }
    },
    methods: {
        subscribe() {
            eventBus.$emit("progressEvent");
            // eventBus.$emit("loadingRequest");
            axios
                .post('/subscribers', this.form)
                .then(response => {
                    eventBus.$emit("StopLoadingEvent");
                    eventBus.$emit("alertRequest", "Thank you for subscribing");
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
@media only screen and (max-width: 768px) {
    .footer-newsletter input[type="submit"] {
        width: 30% !important;
    }

    .footer-newsletter input[type="email"][data-v-182a5f9e] {
        max-width: 200px !important;
    }
}
</style>
