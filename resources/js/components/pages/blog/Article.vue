<template>
<div>
    <div class="vc_row wpb_row vc_row-fluid container vc_custom_1458484580454" style="margin-top:140px">
        <div v-html="blogs.content"> </div>
    </div>
    <!-- <h3 class="text-center text-danger" v-else>No search results</h3> -->
</div>
</template>

<script>
export default {
    name: 'blogarticle',
    data() {
        return {
            id: this.$route.params.id,
            blogs: [],
        }
    },
    methods: {
        getBlog(id) {
            eventBus.$emit("loaderEvent");
            axios.get(`/blog/${id}`)
                .then((response) => {
                    // this.loading = false
                    console.log(response.data.content);
                    this.blogs = response.data
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

        // redirect(data) {
        //     // alert('oooo')
        //     this.getBlog()
        //     this.$router.push({
        //         name: "article",
        //         params: {
        //             search: data
        //         }
        //     });
        // },
    },
    created() {
        eventBus.$on('blogEvent', data => {
            console.log(data);
            
            this.blogs = data

            // this.redirect(data)
            // this.searchpage = true
            // this.form.search = data
        })
    },
    mounted() {
        // this.getBlog(id)
        this.getBlog(this.$route.params.id)
    },
}
</script>
