<script setup>
import { Link } from "@inertiajs/vue3";
import HomeLayout from "../Layouts/HomeLayout.vue";

defineProps({ destination: Object });
</script>

<template>
    <HomeLayout
        :title="destination.seo_title"
        :seo_meta_description="destination.seo_meta_description"
    >
        <div
            class="hero-wrap js-fullheight"
            v-bind:style="{
                backgroundImage:
                    'url(/storage/' + destination.thumbnail_image + ')',
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
                                <Link href="/destinations"> Destinations </Link>
                            </span>
                            <span>{{ destination.name }}</span>
                        </p>
                        <h1
                            class="mb-3 bread"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                        >
                            {{ destination.name }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="ftco-section ftco-degree-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="ftco-section min-height-400">
                            <div class="container">
                                <div class="row">
                                    <div
                                        class="col-md-7 heading-section ftco-animate"
                                    >
                                        <span class="subheading"
                                            >Curated packages</span
                                        >
                                        <h3 class="mb-4">
                                            <strong>Popular</strong> packages
                                            for <span>{{ destination.name }}</span>
                                        </h3>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div
                                                class="col-md-4 ftco-animate"
                                                v-for="tourPackage in destination.packages"
                                            >
                                                <div class="destination">
                                                    <Link
                                                        :href="
                                                            '/packages/' +
                                                            tourPackage.url_slug
                                                        "
                                                        class="img img-2 d-flex justify-content-center align-items-center"
                                                        v-bind:style="{
                                                            backgroundImage:
                                                                'url(/storage/' +
                                                                tourPackage.thumbnail_image +
                                                                ')',
                                                        }"
                                                    >
                                                        <div
                                                            class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                                            :href="
                                                                '/storage/' +
                                                                tourPackage.thumbnail_image
                                                            "
                                                        >
                                                            <span
                                                                class="icon-search2"
                                                            ></span>
                                                        </div>
                                                    </Link>
                                                    <div class="text p-3">
                                                        <div class="d-flex">
                                                            <div class="one">
                                                                <h3>
                                                                    <!-- <a href="#"
                                                            >Mysore, palace</a
                                                        > -->
                                                                    {{
                                                                        tourPackage.name
                                                                    }}
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            <!-- Far far away, behind the word
                                                mountains, far from the
                                                countries -->
                                                            {{
                                                                tourPackage.short_description
                                                            }}
                                                        </p>
                                                        <p class="days">
                                                            <!-- <span>Oneday -5hours</span> -->
                                                        </p>
                                                        <hr />
                                                        <p
                                                            class="bottom-area d-flex"
                                                        >
                                                            <span
                                                                ><i
                                                                    class="icon-map-o"
                                                                ></i>
                                                {{ tourPackage?.destinations.map(destination => destination.name).join(', ') }}


                                                                </span
                                                            >
                                                            <span
                                                                class="ml-auto"
                                                            >
                                                                <Link
                                                                    :href="
                                                                        '/packages/' +
                                                                        tourPackage.url_slug
                                                                    "
                                                                >
                                                                    Discover
                                                                </Link>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-md-8 -->
                                </div>
                            </div>
                        </section>
                        <div class="row">

                            <div class="col-md-12 heading-section ftco-animate text-center">
                                <h3 class="mb-4">
                                    <strong>{{ destination.name }}</strong> in a glance
                                </h3>
                            </div>

                            <div class="col-md-12 ftco-animate">
                                <div class="single-slider owl-carousel">
                                    <div
                                        class="item"
                                        v-for="image in destination.images"
                                    >
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
                                <span>Our  curated Destination </span>
                                <h1 class="my-4">{{ destination.name }}</h1>
                                <p v-html="destination.description"></p>
                            </div>
                            <div
                                class="col-md-12 hotel-single ftco-animate mb-5 mt-4"
                                v-if="
                                    destination?.youtube_embed_video_url != null
                                "
                            >
                                <h4 class="mb-4">Take A Tour</h4>
                                <div class="block-16">
                                    <figure>
                                        <iframe
                                            width="100%"
                                            height="540"
                                            :src="
                                                destination?.youtube_embed_video_url
                                            "
                                            title="YouTube video player"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen
                                        ></iframe>
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
