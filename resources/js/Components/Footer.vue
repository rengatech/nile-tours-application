<script setup>
import { Link } from "@inertiajs/vue3";
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
</script>

<template>
    
    <div v-if="route().current() != leads" class="bookForm">
        <div class="d-flex justify-content-end">
            <img src="/images/close-outline.svg" width="50" class="call-btn" />
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

            <!-- <input
                placeholder="From City"
                type="text"
                name="from_city"
                required
            /> -->
            <input
            placeholder="Travel Date"
            type="text"
            name="travel_date"
            onfocus="(this.type='date')"
            onblur="(this.type='text')"
            id="travel_date"
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

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Nile Tours</h2>
                        <p>
                            <!-- “Travelling is like flirting with life. It’s like
                            saying, ‘I would stay and love you, but I have to
                            go; this is my station.'” -->

                            “Life is a journey, enjoy the trip. Aim for the sky, but move slowly, enjoying every step along the way. It is all those little steps that make the journey complete. The journey is a reward.”
                        </p>
                        <ul
                            class="ftco-footer-social list-unstyled float-md-left float-lft mt-5"
                        >
                            <li class="ftco-animate">
                                <a href="https://www.youtube.com/@niletours5818"
                                    ><span class="icon-youtube"></span
                                ></a>
                            </li>
                            <li class="ftco-animate">
                                <a href="https://www.facebook.com/niletours33/"
                                    ><span class="icon-facebook"></span
                                ></a>
                            </li>
                            <li class="ftco-animate">
                                <a href="https://www.instagram.com/niletours33/"
                                    ><span class="icon-instagram"></span
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            <li>
                                <Link href="/destinations" class="py-2 d-block"
                                    >Destinations</Link
                                >
                            </li>
                            <li>
                                <Link href="/packages" class="py-2 d-block"
                                    >Packages</Link
                                >
                            </li>
                            <li>
                                <Link href="/hotels" class="py-2 d-block"
                                    >Hotels</Link
                                >
                            </li>
                            <li>
                                <Link href="/reviews" class="py-2 d-block"
                                    >Reviews</Link
                                >
                            </li>
                            <li>
                                <Link href="/gallery" class="py-2 d-block"
                                    >Gallery</Link
                                >
                            </li>
                            <!-- <li>
                                <a href="#" class="py-2 d-block"
                                    >Privacy and Policy</a
                                >
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Customer Support</h2>
                        <ul class="list-unstyled">
                            <li>
                                <Link
                                    href="/privacy-policy"
                                    class="py-2 d-block"
                                    >Privacy Policy</Link
                                >
                            </li>
                            <li>
                                <Link href="/faq" class="py-2 d-block"
                                    >FAQ</Link
                                >
                            </li>
                            <!-- <li>
                                <a href="#" class="py-2 d-block"
                                    >Payment Option</a
                                >
                            </li>
                            <li>
                                <a href="#" class="py-2 d-block"
                                    >Booking Tips</a
                                >
                            </li>
                            <li>
                                <a href="#" class="py-2 d-block"
                                    >How it works</a
                                >
                            </li> -->
                            <li>
                                <Link href="/contact-us" class="py-2 d-block"
                                    >Contact Us</Link
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li>
                                    <span class="icon icon-map-marker"></span
                                    ><span class="text"
                                        >41/81, GP Road ,Chennai. 600002</span
                                    >
                                </li>
                                <li>
                                    <a href="tel:+91 9952 787 786"
                                        ><span class="icon icon-phone"></span
                                        ><span class="text"
                                            >+91 9952 787 786</span
                                        ></a
                                    >
                                </li>
                                <li>
                                    <a href="mailto:Niletours33@gmail.com"
                                        ><span class="icon icon-envelope"></span
                                        ><span class="text"
                                            >niletours33@gmail.com</span
                                        ></a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>
