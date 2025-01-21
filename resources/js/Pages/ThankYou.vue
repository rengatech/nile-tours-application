<script setup>
import HomeLayout from "../Layouts/HomeLayout.vue";
import { onMounted, ref } from 'vue';
import { usePage } from '@inertiajs/vue3';

const page = usePage().props;
const userData = ref({
    name: '',
    email: '',
    mobile_number: '',
   
});

onMounted(() => {
    // Get data from Inertia props
    userData.value = {
        name: page.name,
        email: page.email,
        mobile_number: page.mobile_number,
        
    };

    gtag('event', 'conversion', {
        'send_to': 'AW-11147814777/_Kf0CNqC1-wYEPnO2MMp',
        'user_data': {
            'email': userData.value.email,
            'name': userData.value.name,
            'phone_number': userData.value.mobile_number
        },
        
    });
});
</script>

<template>
    <HomeLayout
        :title="'Nile Tours Thank You Page'"
        :seo_meta_description="'Thank you for contacting Nile Tours'"
    >
  
        <section class="jumbotron text-center">
            <div class="container">
                <h1>Thanks for your interest in Nile Tours.</h1>
                <p>Your message has been received successfully.</p>
                
                <!-- Display submitted form data -->
                <div v-if="userData.name">
                    <p><strong>Name:</strong> {{ userData.name }}</p>
                    <p><strong>Email:</strong> {{ userData.email }}</p>
                    <a :href="'tel:' + userData.mobile_number">
                        <strong>Mobile Number:</strong> {{ userData.mobile_number }}
                    </a>
                </div>
            </div>
        </section>
    </HomeLayout>
</template>