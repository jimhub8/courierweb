<template>
<v-container id="scroll-target" style="background: #f8fafc;max-height: 80vh;margin-top: 160px;" class="scroll-y">
    <v-timeline v-if="timeline.length > 0">
        <v-timeline-item v-for="status in timeline" :key="status.id" :color="status.color" small>
            <template v-slot:opposite>
                <span class="`headline font-weight-bold ${status.color}--text`" v-text="status.created_at"></span>
            </template>
            <div class="py-3">
                <h2 class="`headline font-weight-light mb-3 ${status.color}--text`">{{ status.status }}</h2>
                <div>
                    {{ status.location }}
                    {{ status.remark }}
                </div>
            </div>
        </v-timeline-item>
    </v-timeline>
    <div v-else>
        <h3 class="text-center" style="color: red;">No events</h3>
    </div>
</v-container>
</template>

<script>
const COLORS = [
    'info',
    'warning',
    'error',
    'success'
  ]
export default {
    data: () => ({
        years: [{
                color: 'cyan',
                year: '1960'
            },
            {
                color: 'green',
                year: '1970'
            },
            {
                color: 'pink',
                year: '1980'
            },
            {
                color: 'amber',
                year: '1990'
            },
            {
                color: 'orange',
                year: '2000'
            }
        ],
        timeline: []
    }),
    methods: {
        getStatus(data) {
            axios.get(`/status/${data}`)
                .then((response) => {
                    // this.loading = false
                    console.log(response);
                    this.timeline = response.data
                })
                .catch((error) => {
                    // this.loading = false
                    if (error.response.status === 500) {
                        eventBus.$emit('errorEvent', error.response.statusText)
                        return
                    }
                    this.errors = error.response.data.errors
                })
        }
        // col() {

        //     const previousColor = this.timeline[0].color

        //     while (previousColor === color) {
        //         color = this.genColor()
        //     }
        // },
        // genColor() {
        //     return COLORS[Math.floor(Math.random() * 3)]
        // },
    },
    created() {
        eventBus.$on('timelineEvent', data => {
            this.timeline = data
        })
    },
    mounted() {
        // alert('timeline')
        this.getStatus(this.$route.params.timeline)
        // this.timeline = this.$route.params.timeline
    },

    beforeRouteLeave(to, from, next) {
        eventBus.$emit("loaderEvent");
        next();
    },
}
</script>


<style scoped>
    .v-timeline {
    width: 80vh;
    margin: auto;
}
</style>
