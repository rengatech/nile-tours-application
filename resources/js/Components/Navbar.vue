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
                                src="/images/logo-main.png"
                                alt=""
                                srcset=""
                                width="150"
                            />
                        </div>
                    </Link>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#ftco-nav"
                        aria-controls="ftco-nav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="oi oi-menu"></span> Menu
                    </button>

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
                                    route().current('packages') ? 'active' : null,
                                ]"
                            >
                                <Link href="/packages" class="nav-link"
                                    >Packages</Link
                                >
                            </li>
                            <li
                                :class="[
                                    'nav-item',
                                    route().current('destinations') ? 'active' : null,
                                ]"
                            >
                                <Link href="/destinations" class="nav-link"
                                    >Destinations</Link
                                >
                            </li>
                            <li
                                :class="[
                                    'nav-item',
                                    route().current('hotels') ? 'active' : null,
                                ]"
                            >
                                <Link href="/hotels" class="nav-link"
                                    >Hotels</Link
                                >
                            </li>
                            <li
                                :class="[
                                    'nav-item',
                                    route().current('gallery') ? 'active' : null,
                                ]"
                            >
                                <Link href="/gallery" class="nav-link"
                                    >Gallery</Link
                                >
                            </li>
                            <li
                                :class="[
                                    'nav-item',
                                    route().current('reviews') ? 'active' : null,
                                ]"
                            >
                                <Link href="/reviews" class="nav-link"
                                    >Reviews</Link
                                >
                            </li>
                            <li
                                :class="[
                                    'nav-item',
                                    route().current('contact_us') ? 'active' : null,
                                ]"
                            >
                                <Link href="/contact-us" class="nav-link"
                                    >Contact us</Link
                                >
                            </li>
                            <li class="nav-item cta">
                                <Link href="#booknow1" class="nav-link"
                                    ><span>Book Now</span></Link
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </header>

    </main>

</template>
