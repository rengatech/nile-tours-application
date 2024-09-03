<script setup>
import { Link } from "@inertiajs/vue3";
import HomeLayout from "../Layouts/HomeLayout.vue";

import { onMounted } from "vue";

import { useForm } from "@inertiajs/vue3";

const form = useForm({
    csrf: "",
});

onMounted(() => {
    form.csrf = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
});

// defineProps({ package: Object, Lead: Object });
defineProps({ package: Object, page: Object });

</script>

<template>
    <HomeLayout
        :title="page?.title ? page.title : 'Nile Tours Packages-Details'"
        :seo_meta_description="page?.meta_description"
    >
        <div
            class="hero-wrap js-fullheight"
            v-bind:style="{
                backgroundImage:
                    'url(/storage/' + package.thumbnail_image + ')',
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

        <button class="enquire booknow">ENQUIRE NOW</button>
        <button class="callnow"><a href="tel:+919952787786">CALL NOW</a></button>

        <div style="display: flex; position: sticky; top: 0; z-index: 100000">
            <a href="https://wa.link/tmal22">
                <img src="/images/whatsapp.png" class="whatsapp"
            /></a>
        </div>

        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="ftco-section ftco-destination">
                            <div class="container">
                                <div class="row min-height-400">
                                    <div
                                        class="col-md-7 heading-section ftco-animate"
                                    >
                                        <h3 class="mb-4">
                                            Destinations in
                                            <strong>{{ package.name }}</strong>
                                        </h3>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row mt-2">
                                            <div
                                                class="col-md-4 ftco-animate"
                                                v-for="tourDestination in package.destinations"
                                            >
                                                <div class="destination">
                                                    <Link
                                                        :href="
                                                            '/destinations/' +
                                                            tourDestination.url_slug
                                                        "
                                                        class="img img-2 d-flex justify-content-center align-items-center"
                                                        v-bind:style="{
                                                            backgroundImage:
                                                                'url(/storage/' +
                                                                tourDestination.thumbnail_image +
                                                                ')',
                                                        }"
                                                    >
                                                        <div
                                                            class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                                            :href="
                                                                '/storage/' +
                                                                tourDestination.thumbnail_image
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
                                                                        tourDestination.name
                                                                    }}
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <!-- <p> -->
                                                        <!-- Far far away, behind the word
                                                mountains, far from the
                                                countries -->
                                                        {{
                                                            tourDestination.short_description
                                                        }}
                                                        <!-- </p> -->
                                                        <!-- <p class="days"> -->
                                                        <!-- <span>Oneday -5hours</span> -->
                                                        <!-- </p> -->
                                                        <hr />
                                                        <p
                                                            class="bottom-area-1 d-flex justify-content-center"
                                                        >
                                                            <!-- <span
                                                                ><i
                                                                    class="icon-map-o"
                                                                ></i>
                                                                {{
                                                                    tourDestination.seo_title
                                                                }}</span
                                                            > -->
                                                            <span>
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

                        <div class="row">
                            <div
                                class="col-md-12 heading-section ftco-animate text-center"
                            >
                                <h3 class="mb-4">
                                    <strong>{{ package.name }}</strong> in a
                                    glance
                                </h3>
                            </div>

                            <div class="col-md-12 ftco-animate">
                                <div class="single-slider owl-carousel">
                                    <a
                                        class="item icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                        :href="'/storage/' + image"
                                        v-for="image in package.images"
                                    >
                                        <div
                                            class="hotel-img destination d-flex justify-content-center align-items-center"
                                            v-bind:style="{
                                                backgroundImage:
                                                    'url(/storage/' +
                                                    image +
                                                    ')',
                                            }"
                                        >
                                            <div
                                                class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                                :href="'/storage/' + image"
                                            >
                                                <span
                                                    class="icon-search2"
                                                ></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4 mb-5 ftco-animate">
                                <span>Our curated package</span>
                                <h1 class="my-4">{{ package.name }}</h1>
                                <p v-html="package.description"></p>
                            </div>

                            <div
                                class="col-md-12 ftco-animate mb-3 mt-4"
                                v-if="package?.youtube_embed_video_url != null"
                            >
                                <h4 class="mb-4">Take A Tour</h4>
                                <div class="block-16">
                                    <figure>
                                        <iframe
                                            width="100%"
                                            height="540"
                                            :src="
                                                package?.youtube_embed_video_url
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

        <section class="contact-section">
            <div class="container">
                <div class="text-center">
                    <h4 class="text-success"><b>Contact Us</b></h4>
                </div>
                <div class="row block-9 my-4">
                    <div class="col-md-12">
                        <form method="POST" action="/leads">
                            <input
                                type="hidden"
                                name="_token"
                                :value="form.csrf"
                            />
                            <div class="form-group">
                                <input
                                    placeholder="Name"
                                    type="text"
                                    name="name"
                                    required
                                    class="input_area"
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    placeholder="Email"
                                    type="email"
                                    name="email"
                                    required
                                    class="input_area"
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    placeholder="Mobile Number"
                                    type="text"
                                    name="mobile_number"
                                    required
                                    class="input_area"
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    class="input_area"
                                    placeholder="Package Name"
                                    type="text"
                                    name="package_name"
                                    required
                                    v-model="package.name"
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    placeholder="Travel Date"
                                    type="date"
                                    name="travel_date"
                                    required
                                    class="input_area"
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    placeholder="Number Of Members"
                                    type="number"
                                    name="number_of_members"
                                    required
                                    class="input_area"
                                />
                            </div>
                            <div class="form-group">
                                <textarea
                                    placeholder="Message"
                                    name="message"
                                    class="input_area"
                                ></textarea>
                            </div>
                            <div class="form-group">
                                <input
                                    class="form_Btn my-3 btnsubmit"
                                    type="submit"
                                    value="Get Quote for this Package"
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- .section -->
    </HomeLayout>
</template>