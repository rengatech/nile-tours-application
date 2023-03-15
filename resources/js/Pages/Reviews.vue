<script setup>
import { Link } from "@inertiajs/vue3";
import HomeLayout from "../Layouts/HomeLayout.vue";

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
