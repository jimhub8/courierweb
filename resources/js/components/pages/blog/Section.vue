<template>
<div id="translogistic_latest_latest_posts_widget-2" class="general-sidebar-wrap widget-box widget_translogistic_latest_latest_posts_widget">
    <div class="widget-title">
        <h4>Latest Posts</h4>
    </div>
    <div class="widget-content">
        <div class="translogistic-latest-posts-widget">
            <ul>
                <li v-for="blog in blogs.data" :key="blog.id">
                    <div class="image"> <a href="#" title="Trucking Market On Solid Footing Early Into 2016"> <img width="360" height="213" :src="blog.image" class="attachment-translogistic-latest-posts-widget-image size-translogistic-latest-posts-widget-image wp-post-image" alt=""> </a></div>
                    <div class="desc">
                        <div class="category"><a href="#" rel="category tag">Logistic</a></div>
                        <div class="date">{{ blog.created_at }}</div>
                    </div>
                    <h3><a href="#" title="Trucking Market On Solid Footing Early Into 2016">{{ blog.description }}</a></h3>
                </li>
            </ul>
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: ['blogs']
}
</script>