<template>
<div>
    <v-app id="inspire">
        <!-- temporary -->
        <vue-topprogress ref="topProgress"></vue-topprogress>
        <v-navigation-drawer right temporary v-model="right" fixed></v-navigation-drawer>
        <!-- temporary -->
        <v-navigation-drawer fixed :color="color" :clipped="$vuetify.breakpoint.lgAndUp" app v-model="drawer">
            <v-list dense id="navigation">
                <v-img :aspect-ratio="16/9" :src="user.profile">
                    <v-layout pa-2 column fill-height class="lightbox white--text">
                        <v-spacer></v-spacer>
                        <!-- <img :src="user.profile" alt=""> -->
                        <v-flex shrink>
                            <div class="subheading">{{ user.name }}</div>
                            <div class="body-1">{{ user.email }}</div>
                        </v-flex>
                    </v-layout>
                </v-img>
                <template>
                    <v-card>
                        <!-- <v-card style="background: url('storage/ps/landS.jpg')"> -->
                        <router-link to="/dashboard" class="v-list__tile v-list__tile--link">
                            <div class="v-list__tile__action">
                                <i aria-hidden="true" class="icon material-icons">dashboard</i>
                            </div>
                            <div class="v-list__tile__content">
                                <div class="v-list__tile__title">Dashboard</div>
                            </div>
                        </router-link>
                        <router-link to="/rinders" class="v-list__tile v-list__tile--link" v-for="roleR in user.roles" :key="roleR.id" v-if="roleR.name === 'Rider'">
                            <div class="v-list__tile__action">
                                <i aria-hidden="true" class="icon material-icons">local_shipping</i>
                            </div>
                            <div class="v-list__tile__content">
                                <div class="v-list__tile__title">My Shipments</div>
                            </div>
                        </router-link>
                        <router-link to="/Shipments" class="v-list__tile v-list__tile--link" v-if="user.can['view shipments']">
                            <div class="v-list__tile__action">
                                <i aria-hidden="true" class="icon material-icons">local_shipping</i>
                            </div>
                            <div class="v-list__tile__content">
                                <div class="v-list__tile__title">Manage Shipments</div>
                            </div>
                        </router-link>
                        <router-link to="/profile" class="v-list__tile v-list__tile--link">
                            <div class="v-list__tile__action">
                                <i aria-hidden="true" class="icon material-icons">account_circle</i>
                            </div>
                            <div class="v-list__tile__content">
                                <div class="v-list__tile__title">My Profile</div>
                            </div>
                        </router-link>
                        <!--  -->
                        <router-link to="/reports" class="v-list__tile v-list__tile--link" v-if="user.can['view reports']">
                            <div class="v-list__tile__action">
                                <i aria-hidden="true" class="icon material-icons">book</i>
                            </div>
                            <div class="v-list__tile__content">
                                <div class="v-list__tile__title">Reports</div>
                            </div>
                        </router-link>

                        <a href="/blog/create" class="v-list__tile v-list__tile--link" target="_blank">
                            <div class="v-list__tile__action">
                                <i aria-hidden="true" class="icon material-icons">book</i>
                            </div>
                            <div class="v-list__tile__content">
                                <div class="v-list__tile__title">Blog</div>
                            </div>
                        </a>
                    </v-card>
                </template>
            </v-list>
        </v-navigation-drawer>
        <v-toolbar dark app :color="color" :clipped-left="$vuetify.breakpoint.lgAndUp" fixed>
            <v-toolbar-title style="width: 600px" class="ml-0 pl-3">
                <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
                <img
            src="/storage/Boxleo.png"
            alt
            style="width: 25%;"
          >
        </v-toolbar-title>
                <v-spacer></v-spacer>
                <v-tooltip bottom style="margin-right: 10px;">
                    <v-btn icon class="mx-0" @click="openShipment" slot="activator">
                        <v-icon color="white darken-2" large>add</v-icon>
                    </v-btn>
                    <span>Add Shipment</span>
                </v-tooltip>
                <v-divider vertical></v-divider>
                <Notifications :user="user"></Notifications>
                <v-divider vertical></v-divider>
            <Logout :user="user"></Logout>

        </v-toolbar>
    </v-app>

    <v-snackbar :timeout="timeout" bottom="bottom" :color="Snackcolor" left="left" v-model="snackbar">
        {{ message }}
        <v-icon dark right>check_circle</v-icon>
    </v-snackbar>
    <AddShipment :adddialog="dialog" @closeRequest="close" @alertRequest="showalert" :Allcustomer="Allcustomers" :user="user" :role="role" :AllBranches="AllBranches" :AllDrivers="AllDrivers"></AddShipment>
</div>
</template>

<script>
import Notifications from "../notification/Notification";
// import AddShipment from"../shipments/create/Create";
import { vueTopprogress } from "vue-top-progress";
import Logout from "./Logout";
// import chattyNoty from '../notification/chattyNoty'
export default {
  components: {
    Notifications,
    // AddShipment,
    vueTopprogress,
    Logout
    //  chattyNoty
  },
  props: ["user"],
  data() {
    return {
      role: "",
      Snackcolor: '',
      color: "#1a76c0",
      dialog: false,
      drawer: true,
      drawerRight: false,
      right: null,
      mode: "",
      notifications: [],
      company: {},
      AllBranches: [],
      Allcustomers: [],
      AllDrivers: [],
      snackbar: false,
      timeout: 5000,
      message: "Success",
    };
  },
  methods: {
    openShipment() {
      this.dialog = true;
      this.getBranch();
      this.getCustomer();
      this.getDrivers();
    },

    getCustomer() {
      axios
        .get("/getCustomer")
        .then(response => {
          this.Allcustomers = response.data;
        })
        .catch(error => {
          this.errors = error.response.data.errors;
        });
    },
    getDrivers() {
      axios
        .get("/getDrivers")
        .then(response => {
          this.AllDrivers = response.data;
        })
        .catch(error => {
          console.log(error);
          this.errors = error.response.data.errors;
        });
    },
    getBranch() {
      axios
        .get("/getBranchEger")
        .then(response => {
          this.AllBranches = response.data;
        })
        .catch(error => {
          console.log(error);
          this.errors = error.response.data.errors;
        });
    },
    close() {
      this.dialog = false;
    },

    showalert(data) {
      this.message = data;
      this.Snackcolor = "indigo";
      this.snackbar = true;
    },
    showerror(data) {
        this.message = data;
        this.Snackcolor = "red";
        this.snackbar = true;
    }
  },
  created() {
    eventBus.$on("progressEvent", data => {
      this.$refs.topProgress.start();
    });
    eventBus.$on("StoprogEvent", data => {
      this.$refs.topProgress.done();
    });
    eventBus.$on("alertRequest", data => {
      this.showalert(data)
    });
    eventBus.$on("reloadRequest", data => {
      this.showalert(data)
      window.location.reload()

    });

        eventBus.$on("errorEvent", data => {
            this.showerror(data);
        });
  },
  mounted() {
    // axios.post('/getLogo')
    //     .then((response) => {
    //         this.company = response.data
    //     })
    //     .catch((error) => {
    //         this.errors = error.response.data.errors
    //     })
  }
};
</script>

<style scoped>
.v-expansion-panel__container:hover {
  border-radius: 10px !important;
  width: 90% !important;
  margin-left: 15px !important;
  background: #e3edfe !important;
  color: #1a73e8 !important;
}

.theme--light {
  background-color: #212120 !important;
  /* background: url('storage/logo1.jpg') !important; */
  color: #fff !important;
}
</style>
