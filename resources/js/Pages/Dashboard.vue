<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <!-- Body Start -->
        <div class="wrapper wrapper-body">
            <div class="dashboard-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-main-title">
                                <h3><i class="fa-solid fa-gauge me-3"></i>Dashboard</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                           
                            <div class="main-card mt-4">
                                <div class="dashboard-wrap-content">
                                    <div class="dashboard-report-content">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-6">
                                                <div class="dashboard-report-card purple">
                                                    <div class="card-content">
                                                        <div class="card-content">
                                                            <span class="card-title fs-6">Events</span>
                                                            <span class="card-sub-title fs-3">55</span>
                                                            <div class="d-flex align-items-center">
                                                                <span><i class="fa-solid fa-arrow-trend-up"></i></span>
                                                                <span class="text-Light font-12 ms-2 me-2">0.00%</span>
                                                                <span class="font-12 color-body text-nowrap">From
                                                                    Previous Period</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-media">
                                                            <i class="fa-solid fa-money-bill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6">
                                                <div class="dashboard-report-card red">
                                                    <div class="card-content">
                                                        <div class="card-content">
                                                            <span class="card-title fs-6">Pricing</span>
                                                            <span class="card-sub-title fs-3">2</span>
                                                            <div class="d-flex align-items-center">
                                                                <span><i class="fa-solid fa-arrow-trend-up"></i></span>
                                                                <span class="text-Light font-12 ms-2 me-2">0.00%</span>
                                                                <span class="font-12 color-body text-nowrap">From
                                                                    Previous Period</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-media">
                                                            <i class="fa-solid fa-box"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6">
                                                <div class="dashboard-report-card info">
                                                    <div class="card-content">
                                                        <div class="card-content">
                                                            <span class="card-title fs-6">Plans</span>
                                                            <span class="card-sub-title fs-3">30</span>
                                                            <div class="d-flex align-items-center">
                                                                <span><i class="fa-solid fa-arrow-trend-up"></i></span>
                                                                <span class="text-Light font-12 ms-2 me-2">0.00%</span>
                                                                <span class="font-12 color-body text-nowrap">From
                                                                    Previous Period</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-media">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6">
                                                <div class="dashboard-report-card success">
                                                    <div class="card-content">
                                                        <div class="card-content">
                                                            <span class="card-title fs-6">Invoices</span>
                                                            <span class="card-sub-title fs-3">3</span>
                                                            <div class="d-flex align-items-center">
                                                                <span><i class="fa-solid fa-arrow-trend-up"></i></span>
                                                                <span class="text-Light font-12 ms-2 me-2">0.00%</span>
                                                                <span class="font-12 color-body text-nowrap">From
                                                                    Previous Period</span>
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
        </div>
        <!-- Body End -->
    </AuthenticatedLayout>
</template>
