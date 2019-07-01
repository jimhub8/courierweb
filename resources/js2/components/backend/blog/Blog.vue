<template>
<v-layout row justify-center>
    <v-dialog v-model="dialog" persistent max-width="1200px">
        <v-card>
            <v-card-title>
                <span class="headline">Blog</span>
            </v-card-title>
            <v-card-text>
                <v-layout wrap>
                    <v-flex xs12 sm12>
                        <v-text-field v-model="form.title" color="blue darken-2" label="Title" required></v-text-field>
                    </v-flex>
                    <v-flex xs12 sm12>
                        <v-textarea v-model="form.description" color="blue">
                            <div slot="label">
                                Display content
                            </div>
                        </v-textarea>
                    </v-flex>
                </v-layout>
                <textarea v-model="form.content" class="form-control my-editor"></textarea>
            </v-card-text>
            <v-card-actions>
                <v-btn color="blue darken-1" :loading="loading" :disabled="loading" flat @click="dialog = false">Close</v-btn>
                <v-spacer></v-spacer>
                <v-btn color="blue darken-1" flat @click="save">Submit</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</v-layout>
</template>

<script>
export default {
    data() {
        return {
            loading: false,
            dialog: false,
            form: {},
        };
    },
    methods: {
        save() {
            this.loading = true
            axios.post('/blog', this.form)
                .then(response => {
                    this.loading = false
                    eventBus.$emit("alertRequest");
                    // this.close();
                    //   this.$emit("closeRequest");
                })
                .catch(error => {
                    this.loading = false;
                    if (error.response.status === 500) {
                        eventBus.$emit('errorEvent', error.response.statusText)
                        return
                    } else if (error.response.status === 401 || error.response.status === 409) {
                        eventBus.$emit('reloadRequest', error.response.statusText)
                    }
                    this.errors = error.response.data.errors;
                });
        },
        close() {
            this.dialog = false
        }
    },
    created() {
        eventBus.$on('BlogEvent', data => {
            this.dialog = true
        })
    },
};
</script>

<style>
.theme--light.v-input:not(.v-input--is-disabled) input,
.theme--light.v-input:not(.v-input--is-disabled) textarea {
    border: none !important;
}
</style>
