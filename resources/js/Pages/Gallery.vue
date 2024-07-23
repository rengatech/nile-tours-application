<script setup>
import { Link } from "@inertiajs/vue3";
import HomeLayout from "../Layouts/HomeLayout.vue";

defineProps({ gallery: Object, page: Object  });
</script>

<template>
    <HomeLayout
    :title="page?.title ? page.title : 'Nile Tours Gallery'"
        :seo_meta_description="page?.meta_description"
    >
        <div
            class="hero-wrap js-fullheight"
            v-bind:style="{
                backgroundImage: page?.background_image ? 'url(storage/' + page.background_image + ')' : 'url(/images/bg_6.jpg)',
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
                            <span class="mr-2"
                                ><Link href="/">Home</Link></span
                            >
                            <span>Gallery</span>
                        </p>
                        <h1
                            class="mb-3 bread"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                        >
                            Gallery
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: flex; position: sticky; top: 0; z-index: 100000">
            <a href="https://wa.link/tmal22">
                <img src="/images/whatsapp.png" class="whatsapp"
            /></a>
        </div>
        <div style="display: flex; position: sticky; top: 0; z-index: 100000">
            <a class="nav-link" style="cursor: pointer;">
                <img src="/images/Book-Now.png" class="booknow blink"
            /></a>
        </div>

        <!-- Gallery Start-->
        <section class=" min-height-400">
            <div class="container mt-4">
                <span class="subheading">Gallery</span>
                <h3 class="mb-4"><strong>Gallery</strong> Place and Hotels</h3>
            </div>

            <div class="container container--gallery" >
                <div class="row">
                    <div class="col-sm-4" v-for="tourgallery in gallery">
                        <a class="photo-zoom"
                        :href="'storage/' +tourgallery.image">
                            <img
                            v-bind:src="'storage/' +tourgallery.image"

                                         />
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!-- Gallery End-->
    </HomeLayout>
</template>