<script setup>
import { Link } from "@inertiajs/vue3";
import HomeLayout from "../Layouts/HomeLayout.vue";

import { useForm } from "@inertiajs/vue3";
import { onMounted } from "vue";

const form = useForm({
    csrf: "",
});

onMounted(() => {
    form.csrf = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
});

defineProps({ contact_us: Object, page: Object });

</script>

<template>
    <HomeLayout
        :title="page?.title ? page.title : 'Nile Tours Contact-us'"
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

         <button class="enquire booknow">ENQUIRE NOW</button>
         <button class="call-icon"><a href="tel:+919952787786"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="22" fill="white"  class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
</svg> </a></button>

          <div style="display: flex; top: 0; z-index: 100000">
            <a href="https://wa.link/tmal22">
                <img src="/images/whatsapp.png" class="whatsapp"
            /></a>
        </div>
        <!-- <div style="display: flex; position: sticky; top: 0; z-index: 100000">
            <a class="nav-link" style="cursor: pointer;">
                <img src="/images/Book-Now.png" class="booknow blink"
            /></a>
        </div>   -->

        <!-- <section class="smart_accordian-section my-3">
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
                           
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="ftco-section contact-section ftco-degree-bg ">
            <div class="container">
                <div
                    class="row d-flex justify-content-around mb-5 contact-info"
                >
                    <div class="mb-4">
                        <h3>Contact Information</h3>
                    </div>
                    <div class="w-100"></div>
                    <div class=" ">
                        <h6>
                            <span><b>Address :</b></span> 41/81, GP Road
                            ,Chennai. 600002
                        </h6>
                    </div>
                    <div class=" ">
                        <h6>
                            <span><b>Phone :</b></span>
                            <a href="tel:+91 9952 787 786" class="text-success"
                                >+91 9952 787 786</a
                            >
                        </h6>
                    </div>
                    <div class="">
                        <h6>
                            <span><b>Email :</b></span>
                            <a
                                href="mailto:Niletours33@gmail.com"
                                class="text-success"
                                >niletours33@gmail.com</a
                            >
                        </h6>
                    </div>
                    <!-- <div class="col-md-3">
                        <p>
                            <span>Website</span>
                            <a href="#">WWW.Niletours.com</a>
                        </p>
                    </div> -->
                </div>
                <div class="row block-9 my-4">
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
                    <div class="col-md-6 pr-md-5">

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
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    placeholder="Email"
                                    type="email"
                                    name="email"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    placeholder="Mobile Number"
                                    type="text"
                                    name="mobile_number"
                                    required
                                />
                            </div>
                            <!-- <div class="form-group">
                                <input
                                    placeholder="From City"
                                    type="text"
                                    name="from_city"
                                    required
                                />
                            </div> -->
                            <div class="form-group">
                                <input
                                    placeholder="Travel Date"
                                    type="text"
                                    name="travel_date"
                                    onfocus="(this.type='date')"
                                    onblur="(this.type='text')"
                                    id="travel_date"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    placeholder="Number Of Members"
                                    type="number"
                                    name="number_of_members"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <textarea
                                    placeholder="Message"
                                    name="message"
                                ></textarea>
                            </div>
                            <div class="form-group">
                                <input
                                    class="formBtn my-3 d-block btnsubmit"
                                    type="submit"
                                />
                            </div>
                            <!-- <input class="formBtn" type="reset" /> -->
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </HomeLayout>
</template>