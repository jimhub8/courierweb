<template>
<div class="text-xs-center">
    <v-menu v-model="menu" :close-on-content-click="false" :nudge-width="200" offset-y transition="slide-y-transition">
        <v-btn icon slot="activator" dark>
            <v-icon color="grey lighten-1" large>
                account_circle
            </v-icon>
        </v-btn>
        <v-card>
            <v-list>
                <v-list-tile avatar>
                    <v-list-tile-avatar>
                        <!-- <Avatar :username="user.name" style="font-size: 20px;margin: auto;padding: 0px;"></Avatar> -->
                        <!-- <img :src="user.profile" alt="user.name"> -->
                        <div class="imagecontainer">
                            <img src="/storage/noimage.png" alt="" class="image">
                            <!-- <img :src="user.profile" alt="" class="image"> -->
                            <!-- <img src="img_avatar.png" alt="Avatar" class="image"> -->
                            <!-- <div class="middle">
                                <div class="text">John Doe</div>
                            </div> -->
                            <v-btn class="middle" flat color="primary">Update</v-btn>
                        </div>
                    </v-list-tile-avatar>
                    <v-spacer></v-spacer>
                    <v-list-tile-content>
                        <v-list-tile-title>{{ user.name }}</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <v-divider></v-divider>
                <a href="/apilogin" class="v-list__tile v-list__tile--link">
                    <div class="v-list__tile__action"><i aria-hidden="true" class="icon material-icons">account_circle</i></div>
                    <div class="v-list__tile__content">
                        <div class="v-list__tile__title">
                             Courier Dashboard
                        </div>
                    </div>
                </a>
            </v-list>
            <v-divider></v-divider>
            <v-card-actions>
                <form action="/logout" method="post">
                    <input type="hidden" name="_token" :value="csrf">
                    <v-tooltip bottom>
                        <v-btn flat slot="activator" color="primary" icon class="mx-0" type="submit">
                            <i class="fa fa-user"></i>
                        </v-btn>
                        <span>Logout from this device</span>
                    </v-tooltip>
                </form>
                <form action="/logoutOther" method="get">
                    <input type="hidden" name="_token" :value="csrf">
                    <v-tooltip bottom>
                        <v-btn flat slot="activator" color="orange" icon class="mx-0" type="submit">
                            <i class="fa fa-users"></i>
                        </v-btn>
                        <span>Logout from other devices</span>
                    </v-tooltip>
                </form>
                <v-spacer></v-spacer>
                <v-btn flat @click="menu = false">close</v-btn>
            </v-card-actions>
        </v-card>
    </v-menu>
    <!-- <div v-else> -->
        <!-- <v-menu v-model="menu" :close-on-content-click="false" :nudge-width="200" offset-y transition="slide-y-transition">
            <v-btn icon slot="activator" dark>
                <v-icon color="grey lighten-1" large>
                    account_circle
                </v-icon>
            </v-btn>
            <v-card>
                <v-list>
                    <a href="/login" class="v-list__tile v-list__tile--link">
                    <div class="v-list__tile__action"><i aria-hidden="true" class="icon material-icons">account_circle</i></div>
                    <div class="v-list__tile__content">
                        <div class="v-list__tile__title">
                             Login
                        </div>
                    </div>
                </a>
                    <a href="/register" class="v-list__tile v-list__tile--link">
                    <div class="v-list__tile__action"><i aria-hidden="true" class="icon material-icons">account_circle</i></div>
                    <div class="v-list__tile__content">
                        <div class="v-list__tile__title">
                             Register
                        </div>
                    </div>
                </a>
                </v-list>
                <v-divider></v-divider>
                <v-card-actions>
                    <v-btn flat @click="menu = false">close</v-btn>
                </v-card-actions>
            </v-card>
        </v-menu> -->
        <!-- <a href="/login" class="v-list__tile v-list__tile--link">
            <div class="v-list__tile__content">
                <div class="v-list__tile__title">
                    Login
                </div>
            </div>
        </a>
    </div> -->
</div>
</template>

<script>
// import Avatar from 'vue-avatar'
export default {
    props: ['user'],
    computed: {
        // Avatar
    },
    data() {
        return {
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
            menu: false,
            slider: 56,
            tile: false,
        }
    },
};
</script>

<style scoped>
.imagecontainer {
    position: relative;
    /* width: 50%; */
}

.image {
    opacity: 1;
    display: block;
    /* width: 100%; */
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
}

.middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
}

.imagecontainer:hover .image {
    opacity: 0.3;
}

.imagecontainer:hover .middle {
    opacity: 1;
}

.text {
    background-color: #4CAF50;
    color: white;
    font-size: 10px;
    /* padding: 16px 32px; */
}
</style>
