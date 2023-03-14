<script setup>
import { Head } from "@inertiajs/vue3";
import HomeLayout from "../Layouts/HomeLayout.vue";

import { useForm } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";

const form = useForm({
    project_name: "",
    sitemap_path: "",
    csrf: "",
});

onMounted(() => {
    form.csrf = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
});

defineProps({ page: Object });
</script>

<template>
    <HomeLayout
    :title="page?.title ? page.title : 'Nile Tours Reviews'"
        :seo_meta_description="page?.meta_description"
    >
        <div
            class="hero-wrap js-fullheight"
            v-bind:style="{
                backgroundImage: page?.background_image ? 'url(storage/' + page.background_image + ')' : 'url(/images/bg_5.jpg)',
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
                            <span class="mr-2"><a href="/">Home</a></span>
                            <span>Packages</span>
                        </p>
                        <h1
                            class="mb-3 bread"
                            data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                        >
                            Reviews
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- reviews Start-->
        <div style="display: flex; position: sticky; top: 0; z-index: 100000">
            <a href="https://wa.link/tmal22">
                <img src="/images/whatsapp.png" class="whatsapp"
            /></a>
        </div>
        <div style="display: flex; position: sticky; top: 0; z-index: 100000">
            <a href="#booknow1">
                <img src="/images/Book-Now.png" class="booknow blink"
            /></a>
        </div>
        <div class="bookForm" id="booknow1">
            <div class="d-flex justify-content-end">
                <img
                    src="/images/close-outline.svg"
                    width="50"
                    class="call-btn"
                />
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
                <input
                    placeholder="Travel Date"
                    type="date"
                    name="travel_date"
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
        <body>
            <section id="testimonials">
                <!--heading--->
                <div class="testimonial-heading">
                    <span>Customer Reviews</span>
                    <h4>Clients Says</h4>
                </div>
                <!-- <div class="review-widget_net" data-uuid="bfafaa3d-4e46-49d1-ab8b-bb7f09c52ce6" data-template="10" data-filter="" data-lang="en" data-theme="light"><center><a href="https://www.review-widget.net/" target="_blank" rel="noopener"><img src="https://grwapi.net/assets/spinner/spin.svg" title="Google Review Widget" alt="Google Review Widget"></a></center></div><script async type="text/javascript" src="https://grwapi.net/widget.min.js"></script> -->
                <!--testimonials-box-container------>
                <div class="testimonial-box-container">
                    <!--BOX-1-------------->
                    <div class="testimonial-box">
                        <!--top------------------------->
                        <div class="box-top">
                            <!--profile----->
                            <div class="profile">
                                <!--img---->
                                <div class="profile-img">
                                    <img
                                        src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png"
                                    />
                                </div>
                                <!--name-and-username-->
                                <div class="name-user">
                                    <strong>Sakthi vel</strong>
                                    <span>@psvel</span>
                                </div>
                            </div>
                            <!--reviews------>
                            <div class="reviews">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div>
                        </div>
                        <!--Comments---------------------------------------->
                        <div class="client-comment">
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Exercitationem, quaerat quis?
                                Provident temporibus architecto asperiores nobis
                                maiores nisi a. Quae doloribus ipsum aliquam
                                tenetur voluptates incidunt blanditiis sed atque
                                cumque.
                            </p>
                        </div>
                    </div>
                    <!--BOX-2-------------->
                    <div class="testimonial-box">
                        <!--top------------------------->
                        <div class="box-top">
                            <!--profile----->
                            <div class="profile">
                                <!--img---->
                                <div class="profile-img">
                                    <img
                                        src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png"
                                    />
                                </div>
                                <!--name-and-username-->
                                <div class="name-user">
                                    <strong>Ravi Kumar</strong>
                                    <span>@Ravi</span>
                                </div>
                            </div>
                            <!--reviews------>
                            <div class="reviews">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i
                                ><!--Empty star-->
                            </div>
                        </div>
                        <!--Comments---------------------------------------->
                        <div class="client-comment">
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Exercitationem, quaerat quis?
                                Provident temporibus architecto asperiores nobis
                                maiores nisi a. Quae doloribus ipsum aliquam
                                tenetur voluptates incidunt blanditiis sed atque
                                cumque.
                            </p>
                        </div>
                    </div>
                    <!--BOX-3-------------->
                    <div class="testimonial-box">
                        <!--top------------------------->
                        <div class="box-top">
                            <!--profile----->
                            <div class="profile">
                                <!--img---->
                                <div class="profile-img">
                                    <img
                                        src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png"
                                    />
                                </div>
                                <!--name-and-username-->
                                <div class="name-user">
                                    <strong>Ajay Kumar</strong>
                                    <span>@Ajay kumar</span>
                                </div>
                            </div>
                            <!--reviews------>
                            <div class="reviews">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i
                                ><!--Empty star-->
                            </div>
                        </div>
                        <!--Comments---------------------------------------->
                        <div class="client-comment">
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Exercitationem, quaerat quis?
                                Provident temporibus architecto asperiores nobis
                                maiores nisi a. Quae doloribus ipsum aliquam
                                tenetur voluptates incidunt blanditiis sed atque
                                cumque.
                            </p>
                        </div>
                    </div>
                    <!--BOX-4-------------->
                    <div class="testimonial-box">
                        <!--top------------------------->
                        <div class="box-top">
                            <!--profile----->
                            <div class="profile">
                                <!--img---->
                                <div class="profile-img">
                                    <img
                                        src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png"
                                    />
                                </div>
                                <!--name-and-username-->
                                <div class="name-user">
                                    <strong>Barry Allen</strong>
                                    <span>@barryallen</span>
                                </div>
                            </div>
                            <!--reviews------>
                            <div class="reviews">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i
                                ><!--Empty star-->
                            </div>
                        </div>
                        <!--Comments---------------------------------------->
                        <div class="client-comment">
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Exercitationem, quaerat quis?
                                Provident temporibus architecto asperiores nobis
                                maiores nisi a. Quae doloribus ipsum aliquam
                                tenetur voluptates incidunt blanditiis sed atque
                                cumque.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </body>
        <!-- reviews end-->
    </HomeLayout>
</template>
