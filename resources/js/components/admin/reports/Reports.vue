<template>
<v-content>
    <div v-show="loader" style="text-align: center">
        <v-progress-circular :width="3" indeterminate color="blue" style="margin: 1rem"></v-progress-circular>
    </div>
    <v-container fluid fill-height v-show="!loader">
        <!-- <div> -->
        <v-layout justify-center align-center>
            <!-- <v-layout row>
                <v-flex xs6 sm6>
                </v-flex>
            </v-layout> -->
            <v-layout wrap>
                <!-- <v-divider vertical></v-divider> -->
                <v-flex xs4 sm3 style="margin-top: 40px;margin-left: 10px;">
                    <v-card style="padding: 5px;border-radius: 10px;">
                        <h1>Status Reports</h1>
                        <hr>
                        <form action="displayReport" method="post">
                            <div>
                                <label for="">Status</label>
                                <select v-model="statusR.status" class="custom-select custom-select-md col-md-12">
                                    <option value=""></option>
                                    <option v-for="status in statuses" :key="status.id" :value="status.name">{{ status.name }}</option>
                                </select>
                            </div>
                            <hr>
                            <v-flex xs12 sm12>
                                <v-text-field v-model="statusR.start_date" label="start date" type="date" color="blue darken-2" required></v-text-field>
                            </v-flex>
                            <v-flex xs12 sm12>
                                <v-text-field v-model="statusR.end_date" label="End Date" type="date" color="blue darken-2" required></v-text-field>
                            </v-flex>
                            <v-card-actions>
                                <v-btn flat @click="AllStatusR" :loading="Sload" :disabled="Sload" success color="black">Get Data</v-btn>
                                <v-spacer></v-spacer>
                                <v-btn flat color="orange">{{ AllStatus.length }} </v-btn>
                                <v-divider></v-divider>
                            </v-card-actions>
                            <!-- <download-excel :data="AllStatus" :fields="json_fields" v-show="Sdown">
                                Export
                                <img src="/storage/csv.png" style="width: 30px; height: 30px; cursor: pointer;">
                        </download-excel> -->
                        </form>
                    </v-card>
                </v-flex>

            </v-layout>
        </v-layout>

        <!-- </div> -->
    </v-container>
</v-content>
</template>

<script>
export default {
    props: ['user'],
    data() {
        return {
            statusR: {},
            AllStatus: [],
            
      DeliveryR: {
        branch_id: ""
      },
            AllDeliveryR: [],
            statuses: [],
            Sload: false,
            Dload: false,
            Sdown: false,
            loader: false,
            snackbar: false,
            timeout: 5000,
            message: "Success",
            color: "black",
            json_fields: {
                "Order Id": "order_id",
                "Sender Name": "sender_name",
                "Sender Email": "sender_email",
                "Sender Phone": "sender_phone",
                "Sender City": "sender_city",
                "Sender Address": "sender_address",
                Driver: "driver",
                "Client Name": "client_name",
                "Client Email": "client_email",
                "Client Phone": "client_phone",
                "Client City": "client_city",
                "Client Address": "client_address",
                "Derivery Status": "status",
                From: "sender_address",
                To: "client_address",
                "Derivery Date": "derivery_date",
                "Derivery Time": "derivery_time",
                Quantity: "amount_ordered",
                "COD Amount": "cod_amount",
                "Booking Date": "booking_date",
                "Special Instructions": "speciial_instruction"
            }
        };
    },
    methods: {
        ClientReport() {
            eventBus.$emit("progressEvent");
            this.Cload = true;
            this.AllClientR = [];
            axios
                .post("/userDateExpo", this.$data.Client)
                .then(response => {
                    this.Cload = false;
                    this.AllClientR = response.data;
                    if (this.AllClientR.length < 1) {
                        this.message = "no data";
                        this.color = "red";
                        this.snackbar = true;
                        this.Cdown = false;
                    } else {
                        this.Cdown = true;
                        this.message = "success";
                        this.color = "black";
                        this.snackbar = true;
                    }
                    eventBus.$emit("StoprogEvent");
                })
                .catch(error => {
                    eventBus.$emit("StoprogEvent");
                    this.Cload = false;
                    this.errors = error.response.data.errors;
                });
        },

        AllStatusR() {
            eventBus.$emit("progressEvent");
            this.Sload = true;
            this.AllStatus = [];
            axios
                .post("/statusReport", this.$data.statusR)
                .then(response => {
                    this.Sload = false;
                    this.AllStatus = response.data;
                    // console.log(response.data)
                    if (this.AllStatus.length < 1) {
                        this.message = "no data";
                        this.color = "red";
                        this.snackbar = true;
                        this.Sdown = false;
                    } else {
                        this.Sdown = true;
                        this.message = "success";
                        this.color = "black";
                        this.snackbar = true;
                    }
                    eventBus.$emit("StoprogEvent");
                })
                .catch(error => {
                    eventBus.$emit("StoprogEvent");
                    this.Sload = false;
                    this.errors = error.response.data.errors;
                });
        },

        AllDeliveryRR() {
            eventBus.$emit("progressEvent");
            this.Dload = true;
            this.AllDeliveryR = [];
            axios
                .post("/DelivReport", this.$data.DeliveryR)
                .then(response => {
                    this.Dload = false;
                    this.AllDeliveryR = response.data;
                    if (this.AllDeliveryR.length < 1) {
                        this.message = "no data";
                        this.color = "red";
                        this.snackbar = true;
                        this.Ddown = false;
                    } else {
                        this.Ddown = true;
                        this.message = "success";
                        this.color = "black";
                        this.snackbar = true;
                    }
                    eventBus.$emit("StoprogEvent");
                })
                .catch(error => {
                    eventBus.$emit("StoprogEvent");
                    this.Rload = false;
                    this.errors = error.response.data.errors;
                });
        },
    },
    mounted() {
        this.loader = true;
        axios
            .get("/getStatuses")
            .then(response => {
                this.loader = false;
                this.statuses = response.data;
            })
            .catch(error => {
                this.loader = false;
                this.errors = error.response.data.errors;
            });
    }
};
</script>

<style scoped>
.theme--light.v-card {
    background-color: rgba(158, 158, 158, 0.08);
    height: 550px;
}
</style>
