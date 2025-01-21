<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <main>
        <header>
            <nav
                class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light"
                id="ftco-navbar"
            >
                <div class="container">
                    <Link href="/">
                        <div class="navbar-brand">
                            <img
                                src="/images/logo-main1.png"
                                alt=""
                                srcset=""
                                width="150"
                                height="140"
                            />
                        </div>
                    </Link>

                    <!-- <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#ftco-nav"
                        aria-controls="ftco-nav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >

                        <span class="oi oi-menu"></span> Menu
                    </button> -->

                    <div class=" navbar-toggler" onclick="myFunction(this)" data-toggle="collapse"  data-target="#ftco-nav"  aria-controls="ftco-nav">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                    </div>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                            <li
                                :class="[
                                    'nav-item',
                                    route().current('home') ? 'active' : null,
                                ]"
                            >
                                <Link href="/" class="nav-link">Home</Link>
                            </li>
                            <li
                                :class="[
                                    'nav-item',
                                    route().current('packages')
                                        ? 'active'
                                        : null,
                                    route().current('package.detail')
                                        ? 'active'
                                        : null,
                                ]"
                            >
                                <Link href="/packages" class="nav-link"
                                    >Packages</Link
                                >
                            </li>
                            <li
                                :class="[
                                    'nav-item',
                                    route().current('destinations')
                                        ? 'active'
                                        : null,
                                    route().current('destination.detail')
                                        ? 'active'
                                        : null,
                                ]"
                            >
                                <Link href="/destinations" class="nav-link"
                                    >Destinations</Link
                                >
                            </li>
                            <!-- <li
                                :class="[
                                    'nav-item',
                                    route().current('hotels') ? 'active' : null,
                                    route().current('hotel.detail')
                                        ? 'active'
                                        : null,
                                ]"
                            >
                                <Link href="/hotels" class="nav-link"
                                    >Hotels</Link
                                >
                            </li> -->
                            <li
                                :class="[
                                    'nav-item',
                                    route().current('gallery')
                                        ? 'active'
                                        : null,
                                ]"
                            >
                                <Link href="/gallery" class="nav-link"
                                    >Gallery</Link
                                >
                            </li>
                            <li
                                :class="[
                                    'nav-item',
                                    route().current('reviews')
                                        ? 'active'
                                        : null,
                                ]"
                            >
                                <Link href="/reviews" class="nav-link"
                                    >Reviews</Link
                                >
                            </li>
                            <li
                                :class="[
                                    'nav-item',
                                    route().current('contact_us')
                                        ? 'active'
                                        : null,
                                ]"
                            >
                                <Link href="/contact-us" class="nav-link"
                                    >Contact us</Link
                                >
                            </li>
                            <li class="nav-item cta">
                                <a class="nav-link"><span>Book Now</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </main>
</template>
