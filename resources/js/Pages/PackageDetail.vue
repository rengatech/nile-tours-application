<script setup>
import { Link } from "@inertiajs/vue3";
import HomeLayout from "../Layouts/HomeLayout.vue";


defineProps({ package: Object });
</script>

<template>
    <HomeLayout
        :title="package.seo_title"
        :seo_meta_description="package.seo_meta_description"
    >
        <div
            class="hero-wrap js-fullheight"
            v-bind:style="{
                backgroundImage: 'url(/storage/' + package.thumbnail_image + ')',
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
                            <span class="mr-2">
                                <Link href="/"> Home </Link>
                            </span>
                            <span class="mr-2">
                                <Link href="/packages"> Packages </Link>
                            </span>
                            <span>{{ package.name }}</span>
                        </p>
                        <h1
                            class="mb-3 bread"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                        >
                            {{ package.name }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="ftco-section ftco-degree-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12 ftco-animate">
                                <div class="single-slider owl-carousel">
                                    <div class="item" v-for="image in package.images">
                                        <div
                                            class="hotel-img"
                                            v-bind:style="{
                                                backgroundImage:
                                                    'url(/storage/' +
                                                    image +
                                                    ')',
                                            }"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md-12 hotel-single mt-4 mb-5 ftco-animate"
                            >
                                <span>Our curated packages</span>
                                <h1 class="my-4">{{ package.name }}</h1>
                                <p v-html="package.description"></p>
                                <!-- <div class="d-md-flex mt-5 mb-5">
                                    <ul>
                                        <li>Gardens and parks</li>
                                        <li>Lakes and dams</li>
                                        <li>Tribal huts and museum</li>
                                        <li>Nilgiri Mountain Railway</li>
                                    </ul>
                                    <ul class="ml-md-5">
                                        <li>Historical buildings</li>
                                        <li>Tea Factory</li>
                                        <li>Radio Telescope</li>
                                        <li>
                                            Headline of Alphabet Village and the
                                            subline
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    When she reached the first hills of the
                                    Italic Mountains, she had a last view back
                                    on the skyline of her hometown
                                    Bookmarksgrove, the headline of Alphabet
                                    Village and the subline of her own road, the
                                    Line Lane. Pityful a rethoric question ran
                                    over her cheek, then she continued her way.
                                </p> -->
                            </div>
                            <div
                                class="col-md-12 hotel-single ftco-animate mb-5 mt-4"
                            >
                                <h4 class="mb-4">Take A Tour</h4>
                                <div class="block-16">
                                    <figure>
                                        <iframe width="960" height="540" :src="package?.youtube_embed_video_url" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                                    </figure>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-8 -->
                </div>
            </div>
        </section>
        <!-- .section -->
    </HomeLayout>
</template>
