<script setup>
import { Link } from "@inertiajs/vue3";
import HomeLayout from "../Layouts/HomeLayout.vue";



defineProps({faq: Object, page: Object });

</script>

<template>
    <HomeLayout
        :title="page?.title ? page.title : 'Nile Tours FAQ'"
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
                        class="col-md-9 ftco-animate text-center"
                        data-scrollax=" properties: { translateY: '70%' }"
                    >
                        <p
                            class="breadcrumbs"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                        >
                            <span class="mr-2"><Link href="/">Home</Link></span>
                            <span>FAQ</span>
                        </p>
                        <h1
                            class="mb-3 bread"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                        >
                            FAQ
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

        <section class="smart_accordian-section my-5 min-height-400">
            <div class="container">
                <h2 class="sec_title mt-4">FREQUENTLY ASKED QUESTIONS</h2>
                <div class="accourdian" >
                    <div class="accordian-item item1" v-for="tourfaq in faq" >
                        <div  class="accordian-link "
                        >
                        {{ tourfaq.question }}
                            <i class="icon ion-md-add"></i>
                        </div>
                        <div class="answer">
                            <p>
                                {{ tourfaq.answer }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </HomeLayout>
</template>