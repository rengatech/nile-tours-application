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

defineProps({ hotels: Object , page: Object  });

// defineProps({ user: Object })
</script>

<template>
    <HomeLayout
    :title="page.title"
    :seo_meta_description="page.meta_description"
    >
        <div
            class="hero-wrap js-fullheight"
            v-bind:style="{
                backgroundImage: 'url(storage/' + page.background_image + ')',
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

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-start mb-5 pb-3">
                    <div class="col-md-7 heading-section ftco-animate">
                        <span class="subheading">Special Offers</span>
                        <h2 class="mb-4"><strong>Popular</strong> Hotels</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="bookForm">
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
                        <input
                            placeholder="Name"
                            type="text"
                            name="name"
                            required
                        />
                        <input
                            placeholder="Email"
                            type="email"
                            name="email"
                            required
                        />
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
                        <textarea
                            placeholder="Message"
                            name="message"
                        ></textarea>
                        <input class="formBtn btnsubmit" type="submit" />
                        <!-- <input class="formBtn" type="reset" /> -->
                    </form>
                </div>

                <div class="col-lg-12">
                    <div class="row">
                        <div
                            class="col-md-4 ftco-animate"
                            v-for="tourHotel in hotels"
                        >
                            <div class="destination">
                                <a
                                    href="#"
                                    class="img img-2 d-flex justify-content-center align-items-center"
                                    v-bind:style="{
                                        backgroundImage:
                                            'url(storage/' +
                                            tourHotel.image +
                                            ')',
                                    }"
                                >
                                    <div
                                        class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                        :href="'storage/' + tourHotel.image"
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
                                    <p class="bottom-area d-flex">
                                        <span
                                            ><i class="icon-map-o"></i>
                                            {{ tourHotel.seo_title }}</span
                                        >
                                        <span class="ml-auto">
                                            <a href="#booknow1" class="book"
                                                >Book Now</a
                                            >
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
