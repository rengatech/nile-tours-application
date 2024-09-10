<script setup>
import { Link } from "@inertiajs/vue3";
import HomeLayout from "../Layouts/HomeLayout.vue";

defineProps({ packages: Object, page: Object });
</script>

<template>
    <HomeLayout
        :title="page?.title ? page.title : 'Nile Tours Packages'"
        :seo_meta_description="page?.meta_description"
    >
        <div
            class="hero-wrap js-fullheight"
            v-bind:style="{
                backgroundImage: page?.background_image
                    ? 'url(storage/' + page.background_image + ')'
                    : 'url(/images/bg_2.jpg)',
            }"
        >
            <div class="overlay"></div>
            <div class="container">
                <div
                    class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                    data-scrollax-parent="true"
                >
                    <div
                        class="col-md-9 text-center ftco-animate"
                        data-scrollax=" properties: { translateY: '70%' }"
                    >
                        <p
                            class="breadcrumbs"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                        >
                            <span class="mr-2"><Link href="/">Home</Link></span>
                            <span>Packages</span>
                        </p>
                        <h1
                            class="mb-3 bread"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                        >
                            Packages
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="wce">
          <h6><button class="enquire booknow">ENQUIRE NOW</button>
         <button class="call-icon"><a href="tel:+919952787786"> <img src="/images/telephone.png" alt=""> </a></button>


         <div style="display: flex;  top: 0; z-index: 100000">
            <a href="https://wa.link/tmal22">
                <img src="/images/whatsapp.png" class="whatsapp"
            /></a>
        </div></h6>
        
    </div>

        <!-- <div style="display: flex; position: sticky; top: 0; z-index: 100000">
            <a class="nav-link" style="cursor: pointer">
                <img src="/images/Book-Now.png" class="booknow blink"
            /></a>
        </div> -->

        <section class="ftco-section min-height-400">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 heading-section ftco-animate">
                        <span class="subheading">Special Offers</span>
                        <h3 class="mb-4"><strong>Top</strong> Tour Packages</h3>
                    </div>

                    <div class="col-lg-12">
                        <div class="row">
                            <div
                                class="col-md-4 ftco-animate"
                                v-for="tourPackage in packages"
                            >
                                <div class="destination">
                                    <Link
                                        :href="
                                            '/packages/' + tourPackage.url_slug
                                        "
                                        class="img img-2 d-flex justify-content-center align-items-center"
                                        v-bind:style="{
                                            backgroundImage:
                                                'url(storage/' +
                                                tourPackage.thumbnail_image +
                                                ')',
                                        }"
                                    >
                                        <div
                                            class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                            :href="
                                                'storage/' +
                                                tourPackage.thumbnail_image
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
                                                    {{ tourPackage.name }}
                                                </h3>
                                            </div>
                                        </div>
                                        <p>
                                            <!-- Far far away, behind the word
                                                mountains, far from the
                                                countries -->
                                            {{ tourPackage.short_description }}
                                        </p>
                                        <p class="days">
                                            <!-- <span>Oneday -5hours</span> -->
                                        </p>
                                        <hr />
                                        <p class="bottom-area d-flex">
                                            <span>
                                                <i class="icon-map-o mr-2"></i>
                                                {{ tourPackage?.destinations.map(destination => destination.name).join(', ') }}
                                            </span>
                                            <span class="ml-auto">
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
    </HomeLayout>
</template>