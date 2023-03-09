<script setup>
import { Link } from "@inertiajs/vue3";

import Navbar from "../Components/Navbar.vue";
import Footer from "../Components/Footer.vue";
import { ref, onMounted } from 'vue'

defineProps({
    title: String,
    seo_meta_description: String,
 });


onMounted(() => {



setTimeout(appendMain, 100);


function appendMain() {
    let mainJS = document.getElementById('main-js')
    if (mainJS != null) {
        mainJS.remove()
    }

    let mainScript = document.createElement('script')
    mainScript.setAttribute('src', '/js/main.js')
    mainScript.setAttribute('id', 'main-js')
    document.body.appendChild(mainScript)
}
})

</script>

<template>
    <title v-if="title">{{ title }}</title>
    <meta name="description" v-if="seo_meta_description" :content="seo_meta_description"/>
    <main>
        <article>
            <Navbar />

            <slot />

            <Footer />
        </article>
    </main>
</template>
