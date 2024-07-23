<script setup>
import { Link } from "@inertiajs/vue3";
import HomeLayout from "../Layouts/HomeLayout.vue";



defineProps({faq: Object, page: Object });
gtag('event', 'conversion', {'send_to': 'AW-11147814777/_Kf0CNqC1-wYEPnO2MMp'});
</script>

<template>
    <HomeLayout
        :title="page?.title ? page.title : 'Nile Tours Thank you page'"
        :seo_meta_description="page?.meta_description"
    >

    <section class="jumbotron text-center">
        <div class="container">
        <h1>Thanks for your interest in Nile Tours. <br>Your message has been received successfully.</h1>
        </div>
    </section>


    </HomeLayout>
</template>