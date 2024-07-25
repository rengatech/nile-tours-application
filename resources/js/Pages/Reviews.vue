<script setup>
import { onMounted } from 'vue';
import { Link } from "@inertiajs/vue3";
import HomeLayout from "../Layouts/HomeLayout.vue";
defineProps({ page: Object });
onMounted(() => {
    const script = document.createElement('script');
    script.src = "https://static.elfsight.com/platform/platform.js";
    script.defer = true;
    script.setAttribute('data-use-service-core', '');
    document.body.appendChild(script);
});
</script>
<template>
   
    <HomeLayout
        :title="page?.title ? page.title : 'Nile Tours Reviews'"
        :seo_meta_description="page?.meta_description"
    >
        <div
            class="hero-wrap js-fullheight"
            v-bind:style="{
                backgroundImage: page?.background_image ? 'url(storage/' + page.background_image + ')' : 'url(/images/bg_5.jpg)'
                
                
                ,
            }"
        >
            <div class="overlay"></div>
            <div class="container">
                <div
                    class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                    data-scrollax-parent="true"
                >
                    <div
                        class="col-md-9 ftco-animate text-center"
                        data-scrollax=" properties: { translateY: '70%' }"
                    >
                        <p
                            class="breadcrumbs"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                        >
                            <span class="mr-2"><a href="/">Home</a></span>
                            <span>Packages</span>
                        </p>
                        <h1
                            class="mb-3 bread"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                        >
                            Reviews <br> <br>
                           
                          
                          


                            
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- reviews Start-->
        <div style="display: flex; position: sticky; top: 0; z-index: 100000">
            <a href="https://wa.link/tmal22">
                <img src="/images/whatsapp.png" class="whatsapp"/>
            </a>
        </div>
        <div style="display: flex; position: sticky; top: 0; z-index: 100000">
            <a class="nav-link" style="cursor: pointer;">
                <img src="/images/Book-Now.png" class="booknow blink"/>
            </a>
        </div>
        <section id="testimonials">
            <!--heading--->
            <h4>Client Says</h4>
            <!-- Elfsight widget -->
           
            <div class="elfsight-app-93e8f684-45c8-4d1f-9333-bd7eb050827a" data-elfsight-app-lazy></div> <br>
        </section>
        <!-- reviews end-->
    </HomeLayout>
</template>