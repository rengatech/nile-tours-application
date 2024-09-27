<script setup>
import HomeLayout from "../Layouts/HomeLayout.vue";
import { defineProps } from 'vue';

// Define props to receive the form data
const props = defineProps({
    faq: Object,
    page: Object,
    name: String,
    email: String,
    mobile_number: String,
    travel_date: String,
    number_of_members: Number,
    message: String
});

// Log the props to the console
console.log(props);

gtag('event', 'conversion', {'send_to': 'AW-11147814777/_Kf0CNqC1-wYEPnO2MMp'});
</script>

<template>
    <HomeLayout
        :title="page?.title ? page.title : 'Nile Tours Thank You Page'"
        :seo_meta_description="page?.meta_description"
    >
        <section class="jumbotron text-center">
            <div class="container">
                <h1>Thanks for your interest in Nile Tours.</h1>
                <p>Your message has been received successfully.</p>

                <!-- Display submitted form data -->
                <div>
                    <p><strong>Name:</strong> {{ props.name }}</p>
                    <p>
                        <strong>Email:</strong>
                        <a :href="'mailto:' + props.email">{{ props.email }}</a>
                    </p>
                    <a :href="'tel:' + props.mobile_number"><strong>Mobile Number:</strong> {{ props.mobile_number }}</a>
                    <!-- <p><strong>Travel Date:</strong> {{ props.travel_date }}</p>
                    <p><strong>Number of Members:</strong> {{ props.number_of_members }}</p>
                    <p><strong>Message:</strong> {{ props.message }}</p> -->
                </div>
            </div>
        </section>
    </HomeLayout>
</template>
