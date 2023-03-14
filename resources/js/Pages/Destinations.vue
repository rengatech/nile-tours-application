<script setup>
import { Head, Link } from "@inertiajs/vue3";
import HomeLayout from "../Layouts/HomeLayout.vue";
import { useForm } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";

const form = useForm({
    project_name: "",
    sitemap_path: "",
    csrf: "",
});

onMounted(() => {
    form.csrf = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
});
defineProps({ destinations: Object, page: Object });
</script>

<template>
    <HomeLayout
    :title="page?.title ? page.title : 'Nile Tours Destinations'"
        :seo_meta_description="page?.meta_description"
    >
        <div
            class="hero-wrap js-fullheight"
            v-bind:style="{
                backgroundImage: page?.background_image ? 'url(storage/' + page.background_image + ')' : 'url(/images/bg_3.jpg)',
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
                            <span>Destinations</span>
                        </p>
                        <h1
                            class="mb-3 bread"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                        >
                            Destination
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
            <a href="#booknow1">
                <img src="/images/Book-Now.png" class="booknow blink"
            /></a>
        </div>
        <div class="bookForm" id="booknow1">
            <div class="d-flex justify-content-end">
                <img
                    src="/images/close-outline.svg"
                    width="50"
                    class="call-btn"
                />
            </div>

            <h2 style="color: #0d7a3b">GET A CALL BACK</h2>
            <small>I'll get back to you as quickly as possible</small>

            <form method="POST" action="/leads">
                <input type="hidden" name="_token" :value="form.csrf" />
                <input placeholder="Name" type="text" name="name" required />
                <input placeholder="Email" type="email" name="email" required />
                <input
                    placeholder="Mobile Number"
                    type="text"
                    name="mobile_number"
                    required
                />
                <input
                    placeholder="Travel Date"
                    type="date"
                    name="travel_date"
                    required
                />
                <input
                    placeholder="Number Of Members"
                    type="number"
                    name="number_of_members"
                    required
                />
                <textarea placeholder="Message" name="message"></textarea>
                <input class="formBtn btnsubmit" type="submit" />
                <!-- <input class="formBtn" type="reset" /> -->
            </form>
        </div>
        <!-- destination Start-->
        <section class="ftco-section ftco-destination">
            <div class="container">
                <!-- <div class="row justify-content-start mb-5 pb-3">
                    <div class="col-md-7 heading-section ftco-animate">
                        <span class="subheading">Featured</span>
                        <h2 class="mb-4">
                            <strong>Featured</strong> Destination
                        </h2>
                    </div>
                </div> -->
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div
                            class="destination-slider owl-carousel ftco-animate"
                        >
                            <div
                                class="item"
                                v-for="tourdestination in destinations"
                            >
                                <div class="destination">
                                    <a
                                        href="/"
                                        class="img d-flex justify-content-center align-items-center"
                                        v-bind:style="{
                                            backgroundImage:
                                                'url(storage/' +
                                                tourdestination.image +
                                                ')',
                                        }"
                                    >
                                        <div
                                            class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                            :href="
                                                'storage/' +
                                                tourdestination.image
                                            "
                                        >
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <h3> -->
                                            <!-- <a href="#">Ooty</a> -->
                                            <!-- {{ tourdestination.name }}
                                        </h3> -->
                                        <!-- <span class="listing">Place name</span> -->
                                        <!-- <Link
                                            :href="
                                                '/destination/' +
                                                tourdestination.url_slug
                                            "
                                        >
                                            Discover
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-md-7 heading-section ftco-animate">
                        <span class="subheading">Featured</span>
                        <h2 class="mb-4">
                            <strong>Featured</strong> Destination
                        </h2>
                    </div>

                    <div class="col-lg-12">
                        <div class="row">
                            <div
                                class="col-md-4 ftco-animate"
                                v-for="tourDestination in destinations"
                            >
                                <div class="destination">
                                    <a
                                        href="#"
                                        class="img img-2 d-flex justify-content-center align-items-center"
                                        v-bind:style="{
                                            backgroundImage:
                                                'url(storage/' +
                                                tourDestination.thumbnail_image +
                                                ')',
                                        }"
                                    >
                                        <div
                                            class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                            :href="
                                                'storage/' + tourDestination.thumbnail_image
                                            "
                                        >
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3>
                                                    <!-- <a href="#"
                                                            >Mysore, palace</a
                                                        > -->
                                                    {{ tourDestination.name }}
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- <p> -->
                                            <!-- Far far away, behind the word
                                                mountains, far from the
                                                countries -->
                                            {{ tourDestination.short_description }}
                                        <!-- </p> -->
                                        <!-- <p class="days"> -->
                                            <!-- <span>Oneday -5hours</span> -->
                                        <!-- </p> -->
                                        <hr />
                                        <p class="bottom-area d-flex">
                                            <span
                                                ><i class="icon-map-o"></i>
                                                {{
                                                    tourDestination.seo_title
                                                }}</span
                                            >
                                            <span class="ml-auto">
                                                <Link
                                                    :href="
                                                        '/destinations/' +
                                                        tourDestination.url_slug
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
        <!-- destination end -->
    </HomeLayout>
</template>
