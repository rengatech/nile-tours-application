<script setup>
import { Head } from "@inertiajs/vue3";
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


// defineProps({ user: Object })
</script>

<template>
    <HomeLayout>
        <div
            class="hero-wrap js-fullheight"
            style="background-image: url('images/bg_8.jpg')"
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
                                ><a href="/">Home</a></span
                            >
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
                        <h2 class="mb-4">
                            <strong>Popular</strong> Hotels &amp; Rooms
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
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

                    <form action="#">
                        <input placeholder="Name" type="text" required />
                        <input placeholder="Email" type="email" required />
                        <input
                            placeholder="Mobile Number"
                            type="text"
                            required
                        />
                        <input placeholder="Travel Date" type="date" required />
                        <input
                            placeholder="Number Of Members"
                            type="number"
                            required
                        />
                        <textarea placeholder="Message"></textarea>
                        <input class="formBtn" type="submit" />
                        <input class="formBtn" type="reset" />
                    </form>
                </div>
                <div class="row">
                    <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="destination">
                            <a
                                href="hotel-single.html"
                                class="img img-2 d-flex justify-content-center align-items-center"
                                style="
                                    background-image: url(images/hotel-1.jpg);
                                "
                            >
                                <div
                                    class="icon d-flex justify-content-center align-items-center"
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
		    							<i class="icon-star"></i>
		    							<span>5 Rating</span>
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
    </HomeLayout>
</template>
