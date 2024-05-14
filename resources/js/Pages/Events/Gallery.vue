<script setup>

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head, Link} from "@inertiajs/vue3";
import SideNavbar from "@/Components/SideNavbar.vue";
</script>

<template>
        <Head title="Event Gallery" />
        <AuthenticatedLayout>
            <!-- Left Sidebar Start -->
            <SideNavbar class="side"/>	<!-- Left Sidebar End -->
            <!-- Body Start -->
            <div class="wrapper wrapper-body">
                <div class="dashboard-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-main-title">
                                    <h3><i class="fa-solid fa-chart-pie me-3"></i>Gallery</h3>
                                </div>
                            </div>
                            <div class="col-md-12">

                                <div class="latest-posts Bp-top">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-lg-12 col-md-12">
                                                <div class="bt_40">
                                                    <div class="row g-4">
                                                        <div class="col-xl-3 col-lg-4 col-md-6" v-for="i in 12" :key="i">
                                                            <div class="main-card">
                                                                <div class="blog-thumbnail">
                                                                    <a href="blog_detail_view.html" class="thumbnail-img">
<!--                                                                        show video-->
                                                                        <video width="100%" height="100%" controls src="https://touchpix.com/my-account/s3-galleries/?gallery=3253965" type="video/mp4"></video>
                                                                    </a>
                                                                </div>
                                                                <div class="blog-content">
                                                                    <div class="post-meta bt_33">
                                                                        <span class="post-date fs-14"><i class="fa-regular fa-calendar-days me-2"></i>5 May, 2022</span>
                                                                        <span class="post-read-time fs-14"><i class="fa-regular fa-clock me-2"></i>10 mins read </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Body End -->
        </AuthenticatedLayout>
</template>


