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

})

defineProps({ packages: Object });

// defineProps({ user: Object })
</script>

<template>
    <HomeLayout>
        <div
            class="hero-wrap js-fullheight"
            style="background-image: url('images/bg_1.jpg')"
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
                            <strong>Explore <br /></strong> your amazing city
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: flex; position: sticky; top: 0; z-index: 100000">
            <a href="https://wa.link/zt2tjo">
                <img src="/images/whatsapp.png" class="whatsapp"
            /></a>
        </div>
        <div style="display: flex; position: sticky; top: 0; z-index: 100000">
            <a href="#booknow1">
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
                                    A small river named Duden flows by their
                                    place and supplies.
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
                                    A small river named Duden flows by their
                                    place and supplies.
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
                                    A small river named Duden flows by their
                                    place and supplies.
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
                                    A small river named Duden flows by their
                                    place and supplies.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-destination">
            <div class="container">
                <div class="row justify-content-start mb-5 pb-3">
                    <div class="col-md-7 heading-section ftco-animate">
                        <span class="subheading">Featured</span>
                        <h2 class="mb-4">
                            <strong>Featured</strong> Destination
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="destination-slider owl-carousel ftco-animate"
                        >
                            <div class="item">
                                <div class="destination">
                                    <a
                                        href="#"
                                        class="img d-flex justify-content-center align-items-center"
                                        style="
                                            background-image: url(images/destination-1.jpg);
                                        "
                                    >
                                        <div
                                            class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                            href="images/destination-1.jpg"
                                        >
                                            <!-- <a class="photo-zoom" href="images/destination-1.jpg">
											<img src="images/destination-1.jpg" alt="" />
										  </a> -->
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <h3><a href="#">Ooty</a></h3>
                                        <span class="listing">Place name</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="destination">
                                    <a
                                        href="#"
                                        class="img d-flex justify-content-center align-items-center"
                                        style="
                                            background-image: url(images/destination-2.jpg);
                                        "
                                    >
                                        <div
                                            class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                            href="images/destination-2.jpg"
                                        >
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <h3><a href="#">Ooty</a></h3>
                                        <span class="listing"> Place name</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="destination">
                                    <a
                                        href="#"
                                        class="img d-flex justify-content-center align-items-center"
                                        style="
                                            background-image: url(images/destination-2.jpg);
                                        "
                                    >
                                        <div
                                            class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                            href="images/destination-2.jpg"
                                        >
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <h3><a href="#">Ooty</a></h3>
                                        <span class="listing"> Place name</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="destination">
                                    <a
                                        href="#"
                                        class="img d-flex justify-content-center align-items-center"
                                        style="
                                            background-image: url(images/destination-3.jpg);
                                        "
                                    >
                                        <div
                                            class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                            href="images/destination-3.jpg"
                                        >
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <h3><a href="#">Mysore</a></h3>
                                        <span class="listing">Place name</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="destination">
                                    <a
                                        href="#"
                                        class="img d-flex justify-content-center align-items-center"
                                        style="
                                            background-image: url(images/destination-4.png);
                                        "
                                    >
                                        <div
                                            class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                            href="images/destination-4.png"
                                        >
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <h3><a href="#">Ooty</a></h3>
                                        <span class="listing">Place name</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="destination">
                                    <a
                                        href="#"
                                        class="img d-flex justify-content-center align-items-center"
                                        style="
                                            background-image: url(images/destination-5.jpg);
                                        "
                                    >
                                        <div
                                            class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                            href="images/destination-5.jpg"
                                        >
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <h3><a href="#">Mysore</a></h3>
                                        <span class="listing">Place name</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="destination">
                                    <a
                                        href="#"
                                        class="img d-flex justify-content-center align-items-center"
                                        style="
                                            background-image: url(images/destination-6.jpg);
                                        "
                                    >
                                        <div
                                            class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                            href="images/destination-6.jpg"
                                        >
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <h3><a href="#">Ooty</a></h3>
                                        <span class="listing">Place name</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- ////// -->



        <section class="ftco-section bg-light">
            <div class="container-fluid">
                <div class="row justify-content-start mb-5 pb-3">
                    <div class="col-md-7 heading-section ftco-animate">
                        <span class="subheading">Special Offers</span>
                        <h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="destination">
                            <a
                                href="#"
                                class="img img-2 d-flex justify-content-center align-items-center"
                                style="
                                    background-image: url(images/destination-2.jpg);
                                "
                            >
                                <div
                                    class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                    href="images/destination-2.jpg"
                                >
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Mysore</a></h3>
                                        <!-- <p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<span>5 Rating</span>
		    						</p> -->
                                    </div>
                                    <!-- <div class="two">
	    							<span class="price">₹700</span>
    							</div> -->
                                </div>
                                <p>
                                    Far far away, behind the word mountains, far
                                    from the countries
                                </p>
                                <p class="days"><span>2 days 3 nights</span></p>
                                <hr />
                                <p class="bottom-area d-flex">
                                    <span
                                        ><i class="icon-map-o"></i>Mysore</span
                                    >
                                    <span class="ml-auto"
                                        ><a href="#">Discover</a></span
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="destination">
                            <a
                                href="#"
                                class="img img-2 d-flex justify-content-center align-items-center"
                                style="
                                    background-image: url(images/destination-3.jpg);
                                "
                            >
                                <div
                                    class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                    href="images/destination-3.jpg"
                                >
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Mysore</a></h3>
                                        <!-- <p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>4 Rating</span>
		    						</p> -->
                                    </div>
                                    <!-- <div class="two">
	    							<span class="price">₹1200</span>
    							</div> -->
                                </div>
                                <p>
                                    Far far away, behind the word mountains, far
                                    from the countries
                                </p>
                                <p class="days"><span>2 days 3 nights</span></p>
                                <hr />
                                <p class="bottom-area d-flex">
                                    <span
                                        ><i class="icon-map-o"></i> Mysore</span
                                    >
                                    <span class="ml-auto"
                                        ><a href="#">Discover</a></span
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="destination">
                            <a
                                href="#"
                                class="img img-2 d-flex justify-content-center align-items-center"
                                style="
                                    background-image: url(images/destination-4.png);
                                "
                            >
                                <div
                                    class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                    href="images/destination-4.png"
                                >
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Ooty</a></h3>
                                        <!-- <p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<span>5 Rating</span>
		    						</p> -->
                                    </div>
                                    <!-- <div class="two">
	    							<span class="price">₹500</span>
    							</div> -->
                                </div>
                                <p>
                                    Far far away, behind the word mountains, far
                                    from the countries
                                </p>
                                <p class="days"><span>2 days 3 nights</span></p>
                                <hr />
                                <p class="bottom-area d-flex">
                                    <span><i class="icon-map-o"></i> Ooty</span>
                                    <span class="ml-auto"
                                        ><a href="#">Discover</a></span
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="destination">
                            <a
                                href="#"
                                class="img img-2 d-flex justify-content-center align-items-center"
                                style="
                                    background-image: url(images/destination-5.jpg);
                                "
                            >
                                <div
                                    class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                    href="images/destination-5.jpg"
                                >
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Mysore</a></h3>
                                        <!-- <p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<span>5 Rating</span>
		    						</p> -->
                                    </div>
                                    <!-- <div class="two">
	    							<span class="price">₹1000</span>
    							</div> -->
                                </div>
                                <p>
                                    Far far away, behind the word mountains, far
                                    from the countries
                                </p>
                                <p class="days"><span>2 days 3 nights</span></p>
                                <hr />
                                <p class="bottom-area d-flex">
                                    <span
                                        ><i class="icon-map-o"></i> Mysore</span
                                    >
                                    <span class="ml-auto"
                                        ><a href="#">Discover</a></span
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="destination">
                            <a
                                href="#"
                                class="img img-2 d-flex justify-content-center align-items-center"
                                style="
                                    background-image: url(images/destination-5.jpg);
                                "
                            >
                                <div
                                    class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                    href="images/destination-5.jpg"
                                >
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Mysore</a></h3>
                                        <!-- <p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<span>5 Rating</span>
		    						</p> -->
                                    </div>
                                    <!-- <div class="two">
	    							<span class="price">₹1000</span>
    							</div> -->
                                </div>
                                <p>
                                    Far far away, behind the word mountains, far
                                    from the countries
                                </p>
                                <p class="days"><span>2 days 3 nights</span></p>
                                <hr />
                                <p class="bottom-area d-flex">
                                    <span
                                        ><i class="icon-map-o"></i> Mysore</span
                                    >
                                    <span class="ml-auto"
                                        ><a href="#">Discover</a></span
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- //////////////////////////////////////////////////////////// -->
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 heading-section ftco-animate">
                        <span class="subheading">Special Offers</span>
                        <h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
                    </div>

                    <div class="col-lg-12">
                        <div class="row">
                            <div
                                class="col-md-4 ftco-animate"
                                v-for="tourPackage in packages"
                            >
                                <div class="destination">
                                    <a
                                        href="#"
                                        class="img img-2 d-flex justify-content-center align-items-center"
                                        v-bind:style="{
                                            backgroundImage:
                                                'url(storage/' +
                                                tourPackage.image +
                                                ')',
                                        }"
                                    >
                                        <div
                                            class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                            :href="'storage/' +tourPackage.image"
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
                                                {{ tourPackage.name}}</span
                                            >
                                            <span class="ml-auto">
                                                <Link :href="'packages/'+tourPackage.url_slug" > Discover </Link>
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
                        <h2 class="mb-4">
                            <strong>Popular</strong> Hotels &amp; Rooms
                        </h2>
                    </div>
                </div>
            </div>
            <div class="bookForm" id="#booknow1">
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
                    <input type="hidden" name="_token" :value="form.csrf"/>
                    <input placeholder="Name" type="text" name="name" required />
                    <input placeholder="Email" type="email" name="email" required />
                    <input placeholder="Mobile Number" type="text" name="mobile_number" required />
                    <input placeholder="Travel Date" type="date" name="travel_date" required />
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
            <div class="container">
                <div class="row">
                    <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="destination">
                            <a
                                href="#"
                                class="img img-2 d-flex justify-content-center align-items-center"
                                style="
                                    background-image: url(images/hotel-2.jpg);
                                "
                            >
                                <div
                                    class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                    href="images/hotel-2.jpg"
                                >
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Hotel, Mysore</a></h3>
                                        <!-- <p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p> -->
                                    </div>
                                    <!-- <div class="two">
	    							<span class="price per-price">₹500<br><small>/night</small></span>
    							</div> -->
                                </div>
                                <p>
                                    Far far away, behind the word mountains, far
                                    from the countries
                                </p>
                                <hr />
                                <p class="bottom-area d-flex">
                                    <span><i class="icon-map-o"></i> Ooty</span>
                                    <span class="ml-auto"
                                        ><a href="#booknow1" class="book"
                                            >Book Now</a
                                        ></span
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="destination">
                            <a
                                href="#"
                                class="img img-2 d-flex justify-content-center align-items-center"
                                style="
                                    background-image: url(images/hotel-3.jpg);
                                "
                            >
                                <div
                                    class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                    href="images/hotel-3.jpg"
                                >
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Hotel, Ooty</a></h3>
                                        <!-- <p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p> -->
                                    </div>
                                    <!-- <div class="two">
	    							<span class="price per-price">₹600<br><small>/night</small></span>
    							</div> -->
                                </div>
                                <p>
                                    Far far away, behind the word mountains, far
                                    from the countries
                                </p>
                                <hr />
                                <p class="bottom-area d-flex">
                                    <span><i class="icon-map-o"></i> Ooty</span>
                                    <span class="ml-auto"
                                        ><a href="#booknow1" class="book"
                                            >Book Now</a
                                        ></span
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="destination">
                            <a
                                href="#"
                                class="img img-2 d-flex justify-content-center align-items-center"
                                style="
                                    background-image: url(images/hotel-4.jpg);
                                "
                            >
                                <div
                                    class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                    href="images/hotel-4.jpg"
                                >
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Hotel, Mysore</a></h3>
                                        <!-- <p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p> -->
                                    </div>
                                    <!-- <div class="two">
	    							<span class="price per-price">₹1000<br><small>/night</small></span>
    							</div> -->
                                </div>
                                <p>
                                    Far far away, behind the word mountains, far
                                    from the countries
                                </p>
                                <hr />
                                <p class="bottom-area d-flex">
                                    <span
                                        ><i class="icon-map-o"></i> Mysore</span
                                    >
                                    <span class="ml-auto"
                                        ><a href="#booknow1" class="book"
                                            >Book Now</a
                                        ></span
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="destination">
                            <a
                                href="#"
                                class="img img-2 d-flex justify-content-center align-items-center"
                                style="
                                    background-image: url(images/hotel-5.jpg);
                                "
                            >
                                <div
                                    class="icon d-flex justify-content-center align-items-center image-popup-vertical-fit"
                                    href="images/hotel-5.jpg"
                                >
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Hotel, Mysore</a></h3>
                                        <!-- <p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p> -->
                                    </div>
                                    <!-- <div class="two">
	    							<span class="price per-price">₹700<br><small>/night</small></span>
    							</div> -->
                                </div>
                                <p>
                                    Far far away, behind the word mountains, far
                                    from the countries
                                </p>
                                <hr />
                                <p class="bottom-area d-flex">
                                    <span><i class="icon-map-o"></i> Ooty</span>
                                    <span class="ml-auto"
                                        ><a href="#booknow1" class="book"
                                            >Book Now</a
                                        ></span
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- instagram Post Start-->
        <section class="ftco-section">
            <div class="container col-md-7 heading-section ftco-animate">
                        <span class="subheading">Recent activity</span>
                        <h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
                    </div>

            <div class=" container1">
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

        <section class="smart_accordian-section">
            <div class="container">
                <h2 class="sec_title">FREQUENTLY ASKED QUESTIONS</h2>
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

        <section class="ftco-section-parallax">
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
        </section>
    </HomeLayout>
</template>
