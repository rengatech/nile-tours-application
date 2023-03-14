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

defineProps({ contact_us: Object, page: Object });

// defineProps({ user: Object })
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
                            <span>Contact</span>
                        </p>
                        <h1
                            class="mb-3 bread"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                        >
                            Contact Us
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

        <section class="smart_accordian-section">
            <div class="container">
                <h2 class="sec_title mt-2">FREQUENTLY ASKED QUESTIONS</h2>
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

        <section class="ftco-section contact-section ftco-degree-bg">
            <div class="container">
                <div class="row d-flex mb-5 contact-info">
                    <div class="col-md-12 mb-4">
                        <h2 class="h4">Contact Information</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-3">
                        <p>
                            <span>Address:</span>41/81, GP Road ,Chennai. 600002
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p>
                            <span>Phone:</span>
                            <a href="tel://1234567920">+91 9952 787 786</a>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p>
                            <span>Email:</span>
                            <a href="mailto:Niletours33@gmail.com"
                                >Niletours33@gmail.com</a
                            >
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p>
                            <span>Website</span>
                            <a href="#">WWW.Niletours.com</a>
                        </p>
                    </div>
                </div>
                <div class="row block-9">
                    <div class="col-md-6 pr-md-5">
                        <form action="#">
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Your Name"
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Your Email"
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Subject"
                                />
                            </div>
                            <div class="form-group">
                                <textarea
                                    name=""
                                    id=""
                                    cols="30"
                                    rows="7"
                                    class="form-control"
                                    placeholder="Message"
                                ></textarea>
                            </div>
                            <div class="form-group">
                                <input
                                    type="submit"
                                    value="Send Message"
                                    class="btn btn-primary py-3 px-5"
                                />
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <iframe
                            class="w-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15546.231235952419!2d80.25846386889654!3d13.06379470669923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267484e3bce2d%3A0x48b7e03be81f5a79!2sNile%20Tours!5e0!3m2!1sen!2sin!4v1678802397314!5m2!1sen!2sin"
                            width="600"
                            height="450"
                            style="border: 0"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                    </div>
                </div>
            </div>
        </section>
    </HomeLayout>
</template>
