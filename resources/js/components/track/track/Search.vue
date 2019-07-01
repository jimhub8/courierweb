<template>
<div style="margin-top: 40px;">
    <div class="vc_row wpb_row vc_row-fluid container vc_custom_1458484580454" v-if="shipments.data.length > 0">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cargo-tracking-list-form" v-for="shipment in shipments.data" :key="shipment.id">
                        <v-btn raised color="primary" @click="timeline(shipment.id)">See Events</v-btn>
                        <div class="cargo-tracking-list-form-header themethreecolor three-column hidden-xs">
                            <div class="cargo-tracking-list-form-col">Shipper</div>
                            <div class="cargo-tracking-list-form-col">Receiver</div>
                            <div class="cargo-tracking-list-form-col">Barcode</div>
                        </div>
                        <div class="cargo-tracking-list-form-body two-column" v-for="shipment in shipments.data" :key="shipment.id">
                            <div class="cargo-tracking-list-form-col">
                                <strong class="mobile-text">Shipper</strong>
                                {{ shipment.sender_name }}
                                <br>{{ shipment.sender_phone }}
                                <br>{{ shipment.sender_email }}
                                <br><address>{{ shipment.sender_address }}</address>
                                <br>
                        </div>
                                <div class="cargo-tracking-list-form-col">
                                    <strong class="mobile-text">Receiver</strong>
                                    {{ shipment.client_name }}
                                    <br>{{ shipment.client_phone }}
                                    <br>{{ shipment.client_email }}
                                    <br><address>{{ shipment.client_address }}</address>
                                </div>
                                <div class="cargo-tracking-list-form-col"><img
                                src="/storage/web/static_qr_code_without_logo.png"
                                height="100" width="100" alt="Barcode"></div>
                                </div>
                                <div class="cargo-tracking-list-form-header themethreecolor hidden-xs">
                                    <div class="cargo-tracking-list-form-col">Origin</div>
                                    <div class="cargo-tracking-list-form-col">Cargo Release Date</div>
                                    <div class="cargo-tracking-list-form-col">Destination</div>
                                    <div class="cargo-tracking-list-form-col">Cargo Delivery Date</div>
                                </div>
                                <div class="cargo-tracking-list-form-body">
                                    <div class="cargo-tracking-list-form-col">
                                        <strong class="mobile-text">Origin</strong>
                                        {{ shipment.from_city }}
                                    </div>
                                    <div class="cargo-tracking-list-form-col">
                                        <strong class="mobile-text">Cargo Release
                                Date</strong>{{ shipment.dispatch_date }}</div>
                                    <div class="cargo-tracking-list-form-col">
                                        <strong class="mobile-text">Destination</strong>
                                        {{ shipment.to_city }}
                                    </div>
                                    <div class="cargo-tracking-list-form-col">
                                        <strong class="mobile-text">Cargo Delivery
                                Date</strong>{{ shipment.delivery_date }}</div>
                                </div>
                                <div class="cargo-tracking-list-form-header themethreecolor hidden-xs">
                                    <div class="cargo-tracking-list-form-col">Qty</div>
                                    <div class="cargo-tracking-list-form-col">Weight</div>
                                    <div class="cargo-tracking-list-form-col">Height</div>
                                    <div class="cargo-tracking-list-form-col">Shipping Status</div>
                                </div>
                                <div class="cargo-tracking-list-form-body">
                                    <div class="cargo-tracking-list-form-col">
                                        <strong class="mobile-text">Qty</strong>{{ shipment.amount_ordered }}
                                    </div>
                                    <div class="cargo-tracking-list-form-col">
                                        <strong class="mobile-text">Weight</strong>{{ shipment.weight }}
                                    </div>
                                    <!-- <div class="cargo-tracking-list-form-col">
                                        <strong class="mobile-text">Height</strong>359
                                    </div> -->
                                    <div class="cargo-tracking-list-form-col">
                                        <strong class="mobile-text">Shipping Status</strong>{{ shipment.status }}
                                    </div>
                                </div>
                                <div class="cargo-tracking-list-form-header themethreecolor hidden-xs">
                                    <div class="cargo-tracking-list-form-col">Carrier</div>
                                    <div class="cargo-tracking-list-form-col">Product(s)</div>
                                    <div class="cargo-tracking-list-form-col">Total Freight</div>
                                    <div class="cargo-tracking-list-form-col">Payment Mode</div>
                                </div>
                                <div class="cargo-tracking-list-form-body">
                                    <div class="cargo-tracking-list-form-col">
                                        <strong class="mobile-text">Carrier</strong>{{ shipment.driver }}</div>
                                    <div class="cargo-tracking-list-form-col">
                                        <strong
                                class="mobile-text">Product(s)</strong>{{ shipment.airway_bill_no }}</div>
                                    <div class="cargo-tracking-list-form-col">
                                        <strong class="mobile-text">Total Freight</strong>{{ shipment.amount_ordered }}
                                    </div>
                                    <div class="cargo-tracking-list-form-col">
                                        <strong class="mobile-text">Payment
                                Mode</strong>Credit Card</div>
                                </div>
                                <div class="cargo-tracking-list-form-header themethreecolor one-column hidden-xs">
                                    <div class="cargo-tracking-list-form-col">Additional Note</div>
                                </div>
                                <div class="cargo-tracking-list-form-body one-column">
                                    <div class="cargo-tracking-list-form-col"><strong class="mobile-text">Additional
                                Note</strong>{{ shipment.speciial_instruction }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="text-center text-danger" v-else>No search results</h3>
        </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                search: this.$route.params.search,
            },
            shipments: [],
        }
    },
    methods: {
        searchShipment() {
            eventBus.$emit("loaderEvent");
            axios.post('/search', this.$data.form)
                .then((response) => {
                    // this.loading = false
                    console.log(response);
                    this.shipments = response.data
                })
                .catch((error) => {
                    // this.loading = false
                    console.log(error);
                    
                    // if (error.response.status === 500) {
                    //     eventBus.$emit('errorEvent', error.response.statusText)
                    //     return
                    // }
                    // this.errors = error.response.data.errors
                })
        },

        redirect(data) {
            // alert('oooo')
            this.searchShipment()
            this.$router.push({
                name: "search",
                params: {
                    search: data 
                }
            });
        },
        timeline(data) {
            // eventBus.$emit("loaderEvent");
            this.$router.push({
                name: "timeline",
                params: {
                    timeline: data
                }
            });
        }
    },
    created() {
        eventBus.$on('searchEvent', data => {
            this.redirect(data)
            // this.searchpage = true
            this.form.search = data
        })
    },
    mounted() {
        this.searchShipment()
    },
}
</script>
