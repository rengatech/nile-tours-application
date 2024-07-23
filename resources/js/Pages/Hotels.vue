<script setup>
import { Link } from "@inertiajs/vue3";
import HomeLayout from "../Layouts/HomeLayout.vue";


defineProps({ hotels: Object, page: Object });

// defineProps({ user: Object })
</script>

<template>
    <HomeLayout
        :title="page?.title ? page.title : 'Nile Tours Hotels'"
        :seo_meta_description="page?.meta_description"
    >
        <div
            class="hero-wrap js-fullheight"
            v-bind:style="{
                backgroundImage: page?.background_image
                    ? 'url(storage/' + page.background_image + ')'
                    : 'url(/images/bg_8.jpg)',
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
                            <span class="mr-2"><Link href="/">Home</Link></span>
                            <span>Hotel</span>
                        </p>
                        <h1
                            class="mb-3 bread"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                        >
                            Hotels
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: flex; position: sticky; top: 0; z-index: 100000">
            <a href="https://wa.link/tmal22" >
                <img src="/images/whatsapp.png" class="whatsapp"
            /></a>
        </div>
        <div style="display: flex; position: sticky; top: 0; z-index: 100000">
            <a class="nav-link" style="cursor: pointer;">
                <img src="/images/Book-Now.png" class="booknow blink"
            /></a>
        </div>


        <section class="ftco-section  min-height-400">
            <div class="container">
                <div class="row justify-content-start mb-5 pb-3">
                    <div class="col-md-7 heading-section ftco-animate">
                        <span class="subheading">Specially Offers</span>
                        <h2 class="mb-4"><strong>Popular</strong> Hotels</h2>
                    </div>
                </div>
            </div>
            <div class="container">


                <div class="col-lg-12">
                    <div class="row">
                        <div
                            class="col-md-4 ftco-animate"
                            v-for="tourHotel in hotels"
                        >
                            <div class="destination">
                                <Link
                                    :href="'/hotels/' + tourHotel.url_slug"
                                    class="img img-2 d-flex justify-content-center align-items-center"
                                    v-bind:style="{
                                        backgroundImage:
                                            'url(storage/' +
                                            tourHotel.thumbnail_image +
                                            ')',
                                    }"
                                >
                                    <div
                                        class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                        :href="
                                            'storage/' +
                                            tourHotel.thumbnail_image
                                        "
                                    >
                                        <span class="icon-search2"></span>
                                    </div>
                                </Link>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3>
                                                <!-- <a href="#"
                                                            >Mysore, palace</a
                                                        > -->
                                                {{ tourHotel.name }}
                                            </h3>
                                        </div>
                                    </div>
                                    <p>
                                        <!-- Far far away, behind the word
                                                mountains, far from the
                                                countries -->
                                        {{ tourHotel.short_description }}
                                    </p>
                                    <p class="days">
                                        <!-- <span>Oneday -5hours</span> -->
                                    </p>
                                    <hr />
                                    <p class="bottom-area-1  d-flex justify-content-center">
                                        <!-- <span
                                            ><i class="icon-map-o"></i>
                                            {{ tourHotel.seo_title }}</span
                                        > -->
                                        <span class="">
                                            <Link
                                                :href="
                                                    '/hotels/' +
                                                    tourHotel.url_slug
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
            </div>
        </section>
    </HomeLayout>
</template>