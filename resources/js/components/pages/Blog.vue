<template>
<div>
    <div class="translogistic-wrapper" id="general-wrapper" style="transform: none;">
        <div class="page-content-banner" style="background-image:url('/storage/web/default-page-baner.jpg');"></div>
        <div class="site-sub-content clearfix" style="transform: none;">
            <div class="container" style="transform: none;">
                <div class="row" style="transform: none;">
                    <div class="col-lg-8 col-sm-8 col-xs-12 site-content-left">
                        <div class="category-post-list post-list">
                            <!-- <v-btn color="orange" flat @click="getBlogs">blog</v-btn> -->
                            <article v-for="blog in blogs.data" :key="blog.id" id="post-1187" class="post-1187 post type-post status-publish format-standard has-post-thumbnail hentry category-logistic tag-advance tag-blog tag-business tag-cargo tag-carriage tag-cars">
                                <div class="post-wrapper">
                                    <div class="post-header">
                                        <h2><a href="#" title="Trucking Market On Solid Footing Early Into 2016">{{ blog.title }}</a></h2>
                                        <div class="category">
                                            <ul class="post-categories">
                                                <li><a href="#" rel="category tag">Logistic</a></li>
                                            </ul>
                                        </div>
                                        <ul class="post-information">
                                            <li class="author"><a href="#" :title="'Posts by ' + blog.posted_by" rel="author">{{ blog.posted_by }}</a></li>
                                            <li class="date">{{ blog.created_at }}</li>
                                            <li class="comment"><a href="#" title="Trucking Market On Solid Footing Early Into 2016">1 Comment</a></li>
                                        </ul>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-image">
                                            <router-link to="/blog" title="Trucking Market On Solid Footing Early Into 2016"> <img width="800" height="535" :src="blog.image" class="attachment-translogistic-blog-post-image size-translogistic-blog-post-image wp-post-image" alt=""> </router-link>
                                        </div>
                                        <div class="post-excerpt">
                                            <p>{{ blog.description }}</p>
                                        </div>
                                    </div>
                                    <div class="post-bottom"> <a href="#" title="Trucking Market On Solid Footing Early Into 2016" class="more" @click="showBlog(blog)">More</a>
                                        <div class="post-share">
                                            <ul>
                                                <li>
                                                <div class="fb-share-button" data-href="https://boxleo.co.ke" data-layout="button_count" data-size="small">
                                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fboxleo.co.ke%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore share-facebook">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                                </div>
                                                </li>
                                                <!-- <li>
                                                    <a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fboxleo.co.ke%2F&amp;src=sdkpreparse" title="Share toFacebook" target="_blank">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li> -->
                                                <li><a class="share-twitter" href="#" title="Share toTwitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a class="share-linkedin" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>

                        </div>
                        <nav class="post-pagination">
                            <ul>
                                <li><span>Page 1 of 2</span></li>
                                <li><a href="http://demo.gloriathemes.com/wp/translogistic/blog/page/2/">&gt;</a></li>
                            </ul>
                        </nav>
                        <!-- <v-btn flat color="red" style="border-radius: 20px; border: 1px solid;" @click="openBlog">Post</v-btn> -->
                    </div>

                    <div class="col-lg-4 col-sm-4 col-xs-12 site-content-right fixedrightSidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                        <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static;">
                            <div class="sidebar-general sidebar">
                                <Section :blogs="blogs"></Section>
                                <!-- <Posts></Posts> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <Article></Article> -->
    </div>
</div>
</template>

<script>
// import Posts from "./blog/Posts";
import Section from "./blog/Section";
// import Article from './blog/Article'
export default {
    components: {
        // Posts,
        Section,
        // Article
    },
    data() {
        return {
            blogs: [],
        }
    },
    methods: {
        openBlog() {
            // eventBus.$emit("BlogEvent");
        },
        getBlogs() {
            axios.get('/blog')
                .then(response => {
                    this.blogs = response.data
                })
                .catch(error => {
                    this.loading = false;
                    if (error.response.status === 500) {
                        eventBus.$emit('errorEvent', error.response.statusText)
                        return
                    } else if (error.response.status === 401 || error.response.status === 409 || error.response.status === 419) {
                        eventBus.$emit('reloadRequest', error.response.statusText)
                    }
                    this.errors = error.response.data.errors;
                });
        },
        showBlog(data) {
            console.log(data.id);

            // eventBus.$emit('blogEvent', data)
            this.$router.push({
                name: "blogarticle",
                params: {
                    id: data.id
                }
            });
        }
    },
    mounted() {
        this.getBlogs()
    },

    beforeRouteLeave(to, from, next) {
        eventBus.$emit("loaderEvent");
        next();
    }
};
</script>
