<template>
<div style="margin-top: 100px;">
    <div class="page-content-bottom">
        <Carousel></Carousel>
        <Section></Section>
        <Section1></Section1>
        <Section2></Section2>
        <Section3></Section3>
        <Section4></Section4>
        <Section5></Section5>

    </div>
</div>
</template>

<script>
import Section from './home/Section';
import Section1 from './home/Section1';
import Section2 from './home/Section2';
import Section3 from './home/Section3';
import Section4 from './home/Section4';
import Section5 from './home/Section5';
import Carousel from './home/Carousel';
export default {
    components: {
        Section, Section1, Section2, Section3, Section4, Section5, Carousel
        // 
    },
    
    beforeRouteLeave(to, from, next) {
        eventBus.$emit("loaderEvent");
        next();
    },
}
</script>