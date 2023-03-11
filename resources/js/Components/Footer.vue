<script setup>
import { Head, Link } from "@inertiajs/vue3";
</script>

<template>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Nile Tours</h2>
                        <p>
                            “Travelling is like flirting with life. It’s like
                            saying, ‘I would stay and love you, but I have to
                            go; this is my station.'”
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
                                    >Destination</Link
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
                                <Link href="/contact-us" class="py-2 d-block">FAQ</Link>
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
                                    <a href="#"
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
                                            >Niletours33@gmail.com</span
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
