<script setup>
import { Head } from "@inertiajs/vue3";

import Navbar from "../Components/Navbar.vue";
import Footer from "../Components/Footer.vue";

import { ref, onMounted } from "vue";

defineProps({
    title: String,
    seo_meta_description: String,
});

onMounted(() => {
    setTimeout(appendMain, 100);

    function appendMain() {
        let mainJS = document.getElementById("main-js");
        if (mainJS != null) {
            mainJS.remove();
        }

        let mainScript = document.createElement("script");
        mainScript.setAttribute("src", "/js/main.js");
        mainScript.setAttribute("id", "main-js");
        document.body.appendChild(mainScript);
    }
});
</script>

<template>
    <Head>

         <!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '712534410916745');
    fbq('track', 'PageView');
    </script>
    
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=712534410916745&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    
        <title v-if="title">{{ title }}</title>
        <meta
            name="description"
            v-if="seo_meta_description"
            :content="seo_meta_description"
        />
    </Head>
    <main>
        <article>
            <Navbar />

            <slot />

            <Footer />
        </article>
    </main>
</template>
