<script setup>

import { Head } from "@inertiajs/vue3";
import SideNavbar from "@/Components/SideNavbar.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
</script>

<template>

    <Head title="All Subscriptions" />
    <AuthenticatedLayout>
        <!-- Left Sidebar Start -->
        <SideNavbar class="side" /> <!-- Left Sidebar End -->
        <!-- Body Start -->
        <div class="wrapper wrapper-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-main-title">
                            <h3><i class="fa-solid fa-gauge me-3"></i>Plans</h3>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="main-card mt-4">
                            <div class="dashboard-wrap-content">
                                <div class="d-flex flex-wrap justify-content-between align-items-center p-4">
                                    <div
                                        class="dashboard-date-wrap d-flex flex-wrap justify-content-between align-items-center">
                                        <div class="dashboard-date-arrows">
                                            <a href="#" class="before_date"><i class="fa-solid fa-angle-left"></i></a>
                                            <a href="#" class="after_date disabled"><i
                                                    class="fa-solid fa-angle-right"></i></a>
                                        </div>
                                        <h5 class="dashboard-select-date">
                                            <span>1st May, 2024</span>
                                            -
                                            <span>30th May, 2024</span>
                                        </h5>
                                    </div>

                                </div>
                                <div class="dashboard-report-content">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                            <div class="dashboard-report-card purple">
                                                <div class="card-content">
                                                    <div class="card-content">
                                                        <span class="card-title fs-6">1 Week Subscription</span>
                                                        <span class="card-sub-title fs-3">$50.00<span class="fs-12"> for
                                                                1
                                                                week</span></span>
                                                        <div class="d-flex align-items-center">
                                                            <!-- <span><i class="fa-solid fa-arrow-trend-up"></i></span>
                                                            <span class="text-Light font-12 ms-2 me-2">0.00%</span> -->
                                                            <span class="font-12 color-body ">From
                                                                Previous
                                                                Period Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Dolores voluptatum nostrum blanditiis
                                                                reprehenderit accusamus inventore, laborum architecto, a
                                                                iusto illo totam hic odit doloremque laboriosam quaerat
                                                                distinctio vero aliquid eius.</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-media">
                                                        <i class="fa-solid fa-money-bill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                            <div class="dashboard-report-card red">
                                                <div class="card-content">
                                                    <div class="card-content">
                                                        <span class="card-title fs-6">1 Month Subscription</span>
                                                        <span class="card-sub-title fs-3">$50.00<span class="fs-12"> for
                                                                1
                                                                month</span></span>
                                                        <div class="d-flex align-items-center">

                                                            <span class="font-12 color-body">From
                                                                Previous
                                                                Period Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Dolores voluptatum nostrum blanditiis
                                                                reprehenderit accusamus inventore, laborum architecto, a
                                                                iusto illo totam hic odit doloremque laboriosam quaerat
                                                                distinctio vero aliquid eius.</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-media">
                                                        <i class="fa-solid fa-box"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                            <div class="dashboard-report-card info">
                                                <div class="card-content">
                                                    <div class="card-content">
                                                        <span class="card-title fs-6">6 Month Subscription</span>
                                                        <span class="card-sub-title fs-3">$50.00<span class="fs-12"> for
                                                                6
                                                                months</span></span>
                                                        <div class="d-flex align-items-center">

                                                            <span class="font-12 color-body">From
                                                                Previous
                                                                Period Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Dolores voluptatum nostrum blanditiis
                                                                reprehenderit accusamus inventore, laborum architecto, a
                                                                iusto illo totam hic odit doloremque laboriosam quaerat
                                                                distinctio vero aliquid eius.</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-media">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                            <div class="dashboard-report-card success">
                                                <div class="card-content">
                                                    <div class="card-content">
                                                        <span class="card-title fs-6">1 Year Subscription</span>
                                                        <span class="card-sub-title fs-3">$50.00<span class="fs-12"> for
                                                                1
                                                                year</span></span>
                                                        <div class="d-flex align-items-center">

                                                            <span class="font-12 color-body">From
                                                                Previous
                                                                Period Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Dolores voluptatum nostrum blanditiis
                                                                reprehenderit accusamus inventore, laborum architecto, a
                                                                iusto illo totam hic odit doloremque laboriosam quaerat
                                                                distinctio vero aliquid eius.</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-media">
                                                        <i class="fa-solid fa-ticket"></i>
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
