<script setup>
import { Link } from "@inertiajs/vue3";
import HomeLayout from "../Layouts/HomeLayout.vue";
import { onMounted } from 'vue';



defineProps({
    packages: Object,
    page: Object,
    hotels: Object,
    destinations: Object,
    faq: Object,

});

onMounted(() => {
    const script = document.createElement('script');
    script.src = "https://static.elfsight.com/platform/platform.js";
    script.defer = true;
    script.setAttribute('data-use-service-core', '');
    document.body.appendChild(script);
});
</script>

<style>
    @media (max-width: 1200px) {
            .elfsight-app-aecc14e0-72e2-4a2e-80e4-5ebb11ddadd7 {
                right: 20%;
                width: 600px;
                height: 250px;
            }
        }

        @media (max-width: 992px) {
            .elfsight-app-aecc14e0-72e2-4a2e-80e4-5ebb11ddadd7 {
                right: 15%;
                width: 500px;
                height: 200px;
            }
        }

        @media (max-width: 768px) {
            .elfsight-app-aecc14e0-72e2-4a2e-80e4-5ebb11ddadd7 {
                right: 10%;
                width: 400px;
                height: 150px;
            }
        }

        @media (max-width: 576px) {
            .elfsight-app-aecc14e0-72e2-4a2e-80e4-5ebb11ddadd7 {
                right: 5%;
                width: 100%;
                height: 100px;
                top: -60px;
            }
        }

        @media (max-width: 1200px) {
            .elfsight-app-c0e6f263-c0d5-4a42-a276-4cb2f6547da9 {
                width: 600px;
                left: 50%;
                margin-top: -300px;
                top: -25%;
            }
        }

        /* For devices with a maximum width of 992px */
        @media (max-width: 992px) {
            .elfsight-app-c0e6f263-c0d5-4a42-a276-4cb2f6547da9 {
                width: 500px;
                left: 40%;
                margin-top: -250px;
                top: -20%;
            }
        }

        /* For devices with a maximum width of 768px */
        @media (max-width: 768px) {
            .elfsight-app-c0e6f263-c0d5-4a42-a276-4cb2f6547da9 {
                width: 400px;
                left: 30%;
                margin-top: -200px;
                top: -15%;
            }
        }

        /* For devices with a maximum width of 576px */
        @media (max-width: 576px) {
            .elfsight-app-c0e6f263-c0d5-4a42-a276-4cb2f6547da9 {
                width: 100px;
                height: 500px;
                margin-top: -150px;
                top: -10%;
                bottom: -400px;
                position: absolute;
                right: 600px;
                left: 20%;
                margin-left: -300px
 
            }
        }

</style>


<template>
    <HomeLayout
        :title="page?.title ? page.title : 'Nile Tours Home'"
        :seo_meta_description="page?.meta_description"
    >
        <div
            class="hero-wrap js-fullheight"
            v-bind:style="{
                backgroundImage: page?.background_image
                    ? 'url(storage/' + page.background_image + ')'
                    : 'url(/images/bg_1.jpg)',
            }"
        >
            <div class="overlay"></div>
            <div class="container">
                <div
                    class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                    data-scrollax-parent="true"
                >
                    <div
                        class="col-md-9 ftco-animate"
                        data-scrollax=" properties: { translateY: '70%' }"
                    >
                        <h1
                            class="mb-4"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                        >
                            <strong>Explore <br /></strong> your amazing city <br> </h1>
                                                       
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


        <section class="ftco-section services-section bg-light">
            <div class="container">
                <div class="row d-flex">
                    <div
                        class="col-md-3 d-flex align-self-stretch ftco-animate"
                    >
                        <div class="media block-6 services d-block text-center">
                            <div class="d-flex justify-content-center">
                                <div class="icon">
                                    <span class="flaticon-guarantee"></span>
                                </div>
                            </div>
                            <div class="media-body p-2 mt-2">
                                <h3 class="heading mb-3">
                                    Best Price Guarantee
                                </h3>
                                <p>
                                    Our team is here to provide you with the support you need, including assistance to make your trip enjoyable and more.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-3 d-flex align-self-stretch ftco-animate"
                    >
                        <div class="media block-6 services d-block text-center">
                            <div class="d-flex justify-content-center">
                                <div class="icon">
                                    <span class="flaticon-like"></span>
                                </div>
                            </div>
                            <div class="media-body p-2 mt-2">
                                <h3 class="heading mb-3">Travellers Love Us</h3>
                                <p>
                                    Our goal is for you to experience worry-free trips, each time you travel with Nile Travel.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-3 d-flex align-self-stretch ftco-animate"
                    >
                        <div class="media block-6 services d-block text-center">
                            <div class="d-flex justify-content-center">
                                <div class="icon">
                                    <span class="flaticon-detective"></span>
                                </div>
                            </div>
                            <div class="media-body p-2 mt-2">
                                <h3 class="heading mb-3">Best Travel Agent</h3>
                                <p>
                                    Our services enable simplified and improved relationships between travel agencies to better serve customers.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-3 d-flex align-self-stretch ftco-animate"
                    >
                        <div class="media block-6 services d-block text-center">
                            <div class="d-flex justify-content-center">
                                <div class="icon">
                                    <span class="flaticon-support"></span>
                                </div>
                            </div>
                            <div class="media-body p-2 mt-2">
                                <h3 class="heading mb-3">
                                    Our Dedicated Support
                                </h3>
                                <p>
                                    Price guarantee pays you the difference between the flight price when you book and the lowest ticket price.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-destination">
            <div class="container">
                <div class="row justify-content-start mb-3">
                    <div class="col-md-7 heading-section ftco-animate">
                        <span class="subheading">Spotlight</span>
                        <h2 class="mb-4">
                            <strong>Featured</strong> Destinations
                        </h2>
                    </div>
                </div>
                <div class="row justify-content-center ftco-animate">
                    <div class="col-lg-12">
                        <div class="row">
                            <div
                                class="col-md-4 ftco-animate"
                                v-for="tourdestination in destinations"
                            >
                                <div class="destination">
                                    <Link
                                        :href="
                                            '/destinations/' +
                                            tourdestination.url_slug
                                        "
                                        class="img img-2 d-flex justify-content-center align-items-center"
                                        v-bind:style="{
                                            backgroundImage:
                                                'url(storage/' +
                                                tourdestination.thumbnail_image +
                                                ')',
                                        }"
                                    >
                                        <div
                                            class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                            :href="
                                                'storage/' +
                                                tourdestination.thumbnail_image
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
                                                    {{ tourdestination.name }}
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- <p> -->
                                        <!-- Far far away, behind the word
                                                mountains, far from the
                                                countries -->
                                        {{ tourdestination.short_description }}
                                        <!-- </p> -->
                                        <!-- <p class="days"> -->
                                        <!-- <span>Oneday -5hours</span> -->
                                        <!-- </p> -->
                                        <hr />
                                        <p class="bottom-area-1 d-flex justify-content-center">
                                            <!-- <span
                                                ><i class="icon-map-o"></i>
                                                {{
                                                    tourdestination.seo_title
                                                }}</span
                                            > -->
                                            <span >
                                                <Link
                                                    :href="
                                                        '/destinations/' +
                                                        tourdestination.url_slug
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
                    <Link v-if="destinations?.length > 6" href="/destinations">
                        <button type="button" class="btn btn-success explore">
                            Explore More Destinations
                        </button>
                    </Link>
                </div>
            </div>
        </section>

        <!-- //////////////////////////////////////////////////////////// -->
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row justify-content-start mb-3">
                    <div class="col-md-7 heading-section ftco-animate">
                        <span class="subheading">Top packages</span>
                        <h2 class="mb-4"><strong>Specially Curated</strong> Tour Packages</h2>
                    </div>
                </div>
                <div class="row justify-content-center ftco-animate">
                    <div class="col-lg-12">
                        <div class="row">
                            <div
                                class="col-md-4 ftco-animate"
                                v-for="tourPackage in packages"
                            >
                                <div class="destination">
                                    <Link
                                        :href="
                                            'packages/' + tourPackage.url_slug
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
                                            <span
                                                ><i class="icon-map-o"></i>
                                                {{ tourPackage.name }}</span
                                            >
                                            <span class="ml-auto">
                                                <Link
                                                    :href="
                                                        'packages/' +
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
                    <Link v-if="packages?.length > 6" href="/packages">
                        <button type="button" class="btn btn-success explore">
                            Explore More Packages
                        </button>
                    </Link>
                </div>
            </div>
        </section>

        <!-- //////////////////////////////// -->
        <section
            class="ftco-section ftco-counter img"
            id="section-counter"
            style="background-image: url(images/bg_1.jpg)"
        >
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
                    <div
                        class="col-md-7 text-center heading-section heading-section-white ftco-animate"
                    >
                        <h2 class="mb-4">Nile Tours</h2>
                        <!-- <span class="subheading">More than 100,000 websites hosted</span> -->
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div
                                class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate"
                            >
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong
                                            class="number"
                                            data-number="2000"
                                            >0</strong
                                        >
                                        <span>Happy Customers</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate"
                            >
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="40"
                                            >0</strong
                                        >
                                        <span>Destination Places</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate"
                            >
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="20"
                                            >0</strong
                                        >
                                        <span>Hotels</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate"
                            >
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="45"
                                            >0</strong
                                        >
                                        <span>Restaurant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                <div class="row justify-content-center ftco-animate">
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
                                        <p class="bottom-area-1 d-flex justify-content-center">
                                            <!-- <span
                                                ><i class="icon-map-o"></i>
                                                {{ tourHotel.seo_title }}</span
                                            > -->
                                            <span>
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

                    <Link v-if="hotels?.length > 6" href="/hotels">
                        <button type="button" class="btn btn-success explore">
                            Explore More Hotels
                        </button>
                    </Link>
                </div>
            </div>
        </section>

        <!-- instagram Post Start-->
        <section class="ftco-section">
            <div class="container col-md-7 heading-section ftco-animate">
                <span class="subheading">Recent activity</span>
                <h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
            </div>

            <div class="container1">
                <div class="content">
                    <a
                        href="https://www.instagram.com/niletours33/"
                        target="_blank"
                    >
                        <div class="content-overlay"></div>
                        <img
                            class="content-image"
                            src="images/nile-tour insta img (1).jpeg"
                            alt=""
                        />
                        <div class="content-details fadeIn-bottom fadeIn-left">
                            <img
                                src="images/insta.png"
                                alt=""
                                srcset=""
                                width="50"
                            />
                        </div>
                    </a>
                </div>
                <div class="content">
                    <a
                        href="https://www.instagram.com/niletours33/"
                        target="_blank"
                    >
                        <div class="content-overlay"></div>
                        <img
                            class="content-image"
                            src="images/nile-tour insta img (4).jpeg"
                            alt=""
                        />
                        <div class="content-details fadeIn-bottom fadeIn-left">
                            <img
                                src="images/insta.png"
                                alt=""
                                srcset=""
                                width="50"
                            />
                        </div>
                    </a>
                </div>
                <div class="content">
                    <a
                        href="https://www.instagram.com/niletours33/"
                        target="_blank"
                    >
                        <div class="content-overlay"></div>
                        <img
                            class="content-image"
                            src="/images/nile-tour insta img (3).jpeg"
                            alt=""
                        />
                        <div class="content-details fadeIn-bottom fadeIn-left">
                            <img
                                src="/images/insta.png"
                                alt=""
                                srcset=""
                                width="50"
                            />
                        </div>
                    </a>
                </div>
                <div class="content">
                    <a
                        href="https://www.instagram.com/niletours33/"
                        target="_blank"
                    >
                        <div class="content-overlay"></div>
                        <img
                            class="content-image"
                            src="/images/nile-tour insta img (2).jpeg"
                            alt=""
                        />
                        <div class="content-details fadeIn-bottom fadeIn-left">
                            <img
                                src="/images/insta.png"
                                alt=""
                                srcset=""
                                width="50"
                            />
                        </div>
                    </a>
                </div>
                <div class="content">
                    <a
                        href="https://www.instagram.com/niletours33/"
                        target="_blank"
                    >
                        <div class="content-overlay"></div>
                        <img
                            class="content-image"
                            src="/images/insta5.jpeg"
                            alt=""
                        />
                        <div class="content-details fadeIn-bottom fadeIn-left">
                            <img
                                src="/images/insta.png"
                                alt=""
                                srcset=""
                                width="50"
                            />
                        </div>
                    </a>
                </div>
                <div class="content">
                    <a
                        href="https://www.instagram.com/niletours33/"
                        target="_blank"
                    >
                        <div class="content-overlay"></div>
                        <img
                            class="content-image"
                            src="/images/insta6.jpeg"
                            alt=""
                        />
                        <div class="content-details fadeIn-bottom fadeIn-left">
                            <img
                                src="/images/insta.png"
                                alt=""
                                srcset=""
                                width="50"
                            />
                        </div>
                    </a>
                </div>
                <div class="content">
                    <a
                        href="https://www.instagram.com/niletours33/"
                        target="_blank"
                    >
                        <div class="content-overlay"></div>
                        <img
                            class="content-image"
                            src="/images/insta7.jpeg"
                            alt=""
                        />
                        <div class="content-details fadeIn-bottom fadeIn-left">
                            <img
                                src="/images/insta.png"
                                alt=""
                                srcset=""
                                width="50"
                            />
                        </div>
                    </a>
                </div>
                <div class="content">
                    <a
                        href="https://www.instagram.com/niletours33/"
                        target="_blank"
                    >
                        <div class="content-overlay"></div>
                        <img
                            class="content-image"
                            src="/images/insta8.jpeg"
                            alt=""
                        />
                        <div class="content-details fadeIn-bottom fadeIn-left">
                            <img
                                src="/images/insta.png"
                                alt=""
                                srcset=""
                                width="50"
                            />
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- instagram Post End-->

        <section class="smart_accordian-section my-5">
            <div class="container">
                <h2 class="sec_title">FREQUENTLY ASKED QUESTIONS </h2><br>
                
               <div class="elfsight-app-aecc14e0-72e2-4a2e-80e4-5ebb11ddadd7" style="right: 6%; width:690px; height: 330px" data-elfsight-app-lazy></div> 
               <div class="elfsight-app-c0e6f263-c0d5-4a42-a276-4cb2f6547da9" style="width: 600px; position: relative; left: 60%; margin-top: -350px; top: -30%;" data-elfsight-app-lazy></div>
                <div class="accourdian">
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

        <!-- <section class="ftco-section-parallax">
            <div class="parallax-img d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div
                            class="col-md-7 text-center heading-section heading-section-white ftco-animate"
                        >
                            <h2>Subcribe to our Newsletter</h2>
                            <p>
                                Far far away, behind the word mountains, far
                                from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live
                                in
                            </p>
                            <div class="row d-flex justify-content-center mt-5">
                                <div class="col-md-8">
                                     <form action="#" class="subscribe-form">
                                        <div class="form-group d-flex">
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Enter email address"
                                                name="enter_email_address"
                                            />
                                            <input
                                                type="submit"
                                                value="Subscribe"
                                                class="submit px-3"
                                            />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    </HomeLayout>
</template>