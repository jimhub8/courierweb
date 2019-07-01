<template>
<div class="container">
    <table class="table table-bordered table-hover">
        <thead>
            <th>Waybill No</th>
            <th>Client Name</th>
            <th>Client email</th>
            <th>Client Phone</th>
        </thead>
        <tbody>
            <tr v-for="shipment in shipments.data">
                <td>{{ shipment.airway_bill_no }}</td>
                <td>{{ shipment.client_name }}</td>
                <td>{{ shipment.client_email }}</td>
                <td>{{ shipment.client_phone }}</td>
            </tr>
        </tbody>
    </table>
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
                    if (error.response.status === 500) {
                        eventBus.$emit('errorEvent', error.response.statusText)
                        return
                    }
                    this.errors = error.response.data.errors
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
    },
    created() {
        eventBus.$on('searchEvent', data => {
            this.redirect(data)
            this.form.search = data
        })
    },
    mounted() {
        // this.searchShipment()
    },
}
</script>
