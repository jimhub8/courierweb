<template>
<div class="wpb_wrapper" style="margin-top: 40px;    margin-left: -50px;">
    <div class="cargo-tracking-form slideversionv1">
        <div>
            <div class="cargo-tracking-form-wrapper white" style="margin-left: -100px;width: 100%;background: #ffffffb5 !important;">
                <h3 style="color:rgb(0, 118, 192);">COURIER TRACKING</h3>
                <p style="color:#45575e;">You can find out the location of your products by entering the courier tracking
                    number.
                    <p>Courier tracking form test code: <strong>BL_00000001</strong></p>
                </p>
                <div class="input-group"> <span class="input-group-addon" style="background: #0076c0"><i class="fa fa-info-circle"></i></span>
                    <input type="text" v-model="search" placeholder="Courier Tracking Number"  @keyup.enter="redirect" style="width: 70%; margin-left: -60px;">
                    <!-- <input type="submit" value="Track"></div> -->
                    <v-btn :color="color" style="border: 1px solid;border-radius: 20px;color:#fff;" @click="redirect">Search</v-btn>
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
            search: "",
            color: "#e30613"
        };
    },
    methods: {
        redirect() {
            // alert('oooo')
            this.$router.push({
                name: "search",
                params: {
                    search: this.search
                }
            });
        }
    }
};
</script>

<style scoped>
.cargo-tracking-form-wrapper.white {
    background: transparent;
}

.cargo-tracking-form-wrapper {
    padding: 21px 25px 30px;
    display: table;
    border-radius: 3px;
}

.cargo-tracking-form-wrapper.white[data-v-24fc188c] {
    width: 70%;
    height: 30vh;
    background: #ffffffc9 !important;
}

.input-group>.form-control:not(:first-child),
.input-group>.custom-select:not(:first-child) {
    width: 300px;
    max-width: 100%;
    display: inline-block;
    margin-right: 10px;
    padding: 11px 11px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    letter-spacing: 0.75px;
    color: #b8b8b8;
    font-size: 12px;
    border: 1px solid #e1e1e1;
}

@media only screen and (max-width: 768px) {
    .cargo-tracking-form-wrapper.white {
        margin-left: 20px !important;
        /* width: 0 !important;; */
        margin-left: 5vw;
        padding: 20px;
    }

    .cargo-tracking-form .cargo-tracking-form-wrapper input[type="text"] {
        margin-left: 0px !important;
    }

}
</style>
