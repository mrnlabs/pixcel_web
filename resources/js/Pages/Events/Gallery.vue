<script setup>

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import SideNavbar from "@/Components/SideNavbar.vue";
</script>

<template>

    <Head title="Event Gallery" />
    <AuthenticatedLayout>
        <!-- Left Sidebar Start -->
        <SideNavbar class="side" /> <!-- Left Sidebar End -->
        <!-- Body Start -->
        <div class="wrapper wrapper-body">
            <div class="dashboard-body">
                <div class="container-fluid">
                    <div class="row">
                        <!-- <div class="col-md-12">
                            <div class="d-main-title">
                                <h3><i class="fa-solid fa-chart-pie me-3"></i>Gallery</h3>
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="latest-posts Bp-top">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-main-title">
                                                <h3><i class="fa-solid fa-chart-pie me-3"></i>Gallery</h3>
                                            </div>
                                        </div>

                                        <div class="upload">
                                            <div class="img"><img
                                                    src="https://touchpix.com/wp-content/uploads/touchpix/events/3279413/source/branding/logo/allophous-360-logo-2222-NEW.png"
                                                    alt="Allophous360" style="max-width:100px">
                                            </div>
                                        </div>
                                        <div class="fitler">
                                            <div class="filter__infor">
                                                <span class="id">#3279413</span>
                                                <span class="date">2024-05-29</span>
                                                <span class="total">58 items</span>
                                            </div>
                                            <div class="px-actions px-action">
                                                <a href="https://phtbth-upload.com/public/oejcawsfqu1lnozsumncxyaytrq6nxotf6kt9nflrndvp1hq0p"
                                                    target="_blank" class="url">Public URL</a>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
                                                    <path d="M2 2h2v2H2z" />
                                                    <path d="M6 0v6H0V0zM5 1H1v4h4zM4 12H2v2h2z" />
                                                    <path d="M6 10v6H0v-6zm-5 1v4h4v-4zm11-9h2v2h-2z" />
                                                    <path
                                                        d="M10 0v6h6V0zm5 1v4h-4V1zM8 1V0h1v2H8v2H7V1zm0 5V4h1v2zM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8zm0 0v1H2V8H1v1H0V7h3v1zm10 1h-1V7h1zm-1 0h-1v2h2v-1h-1zm-4 0h2v1h-1v1h-1zm2 3v-1h-1v1h-1v1H9v1h3v-2zm0 0h3v1h-2v1h-1zm-4-1v1h1v-2H7v1z" />
                                                    <path d="M7 12h1v3h4v1H7zm9 2v2h-3v-1h2v-1z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-file-arrow-down-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="bt_40">
                                                <div class="row g-4">
                                                    <div class="col-xl-3 col-lg-4 col-md-6" v-for="i in 12" :key="i">
                                                        <div class="main-card">
                                                            <div class="blog-thumbnail">
                                                                <a href="blog_detail_view.html" class="thumbnail-img">
                                                                    <!--                                                                        show video-->
                                                                    <video width="100%" height="100%" controls
                                                                        src="https://touchpix.com/my-account/s3-galleries/?gallery=3253965"
                                                                        type="video/mp4"></video>
                                                                </a>
                                                            </div>
                                                            <div class="blog-content">
                                                                <div class="post-meta bt_33">
                                                                    <span class="post-date fs-14"><i
                                                                            class="fa-regular fa-calendar-days me-2"></i>5
                                                                        May, 2022</span>
                                                                    <span class="post-read-time fs-14"><i
                                                                            class="fa-regular fa-clock me-2"></i>10 mins
                                                                        read </span>
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
