<script setup>
import { Link } from "@inertiajs/vue3";
import HomeLayout from "../Layouts/HomeLayout.vue";



defineProps({ page: Object });

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
            <a href="#booknow1">
                <img src="/images/Book-Now.png" class="booknow blink"
            /></a>
        </div>

        <section class="smart_accordian-section my-5">
            <div class="container">
                <h2 class="sec_title mt-4">FREQUENTLY ASKED QUESTIONS</h2>
                <div class="accourdian">
                    <div class="accordian-item item1">
                        <div class="accordian-link">
                            What Do You Take On Your Trips?
                            <i class="icon ion-md-add"></i>
                        </div>
                        <div class="answer">
                            <p>
                                Everyone is different and every trip is
                                different, but almost wherever I go there are
                                certain items I always take along with me. As
                                far as technology goes, I travel with an iPhone,
                                iPad, DSLR camera and all of the associated
                                equipment for everything.
                            </p>
                        </div>
                    </div>
                    <div class="accordian-item item2">
                        <div class="accordian-link">
                            How Do I Sleep on Planes?
                            <i class="icon ion-md-add"></i>
                        </div>
                        <div class="answer">
                            <p>
                                I’m not the best person to answer this one since
                                I have a terrible track record of sleeping on
                                planes. But, although I can’t manage it most of
                                the time, I do know the best tips to help you
                                get a good night’s sleep on a long flight. It
                                starts before you leave home for the airport.
                            </p>
                        </div>
                    </div>
                    <div class="accordian-item item3">
                        <div class="accordian-link">
                            How Do I Travel and Stay Healthy?
                            <i class="icon ion-md-add"></i>
                        </div>
                        <div class="answer">
                            <p>
                                We all joke about gaining weight when we travel,
                                but it really is important to try to stay
                                healthy in order to better enjoy the experience.
                            </p>
                        </div>
                    </div>
                    <div class="accordian-item item4">
                        <div class="accordian-link">
                            Do I Need Travel Insurance?
                            <i class="icon ion-md-add"></i>
                        </div>
                        <div class="answer">
                            <p>
                                Short answer, yes. Longer answer is that there
                                are many options when it comes to travel
                                insurance. What’s important is getting the most
                                appropriate plan for the type of trip you’re
                                taking. Most commonly you will need to make sure
                                that it includes flight cancellation/trip
                                interruption, lost bags and theft.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </HomeLayout>
</template>
