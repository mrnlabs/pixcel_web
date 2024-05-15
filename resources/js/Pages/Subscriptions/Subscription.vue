<script setup>

import { Head, Link } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SideNavbar from "@/Components/SideNavbar.vue";
</script>

<template>

    <Head title="All Subscriptions" />
    <AuthenticatedLayout>
        <!-- Left Sidebar Start -->
        <SideNavbar class="side" /> <!-- Left Sidebar End -->
        <!-- Body Start -->
        <div class="wrapper wrapper-body">
            <div class="dashboard-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-main-title">
                                <h3><i class="fa-solid fa-chart-pie me-3"></i>Subscription</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="main-card mt-5">
                                <div class="dashboard-wrap-content p-4">

                                    <div class="d-md-flex flex-wrap align-items-center">
                                        <div class="dashboard-date-wrap mt-4">
                                            <div class="form-group">
                                                <div class="relative-input position-relative">
                                                    <input class="form-control h_40" type="text"
                                                        placeholder="Search by name" value="">
                                                    <i class="uil uil-search"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rs ms-auto mt-4 mt_r4">
                                            <a href="#"
                                                class="pe-4 w-100 ps-4 text-center co-main-btn h_40 d-inline-block"><i
                                                    class="fa-solid fa-arrow-rotate-right me-3"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="event-list">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="orders-tab" role="tabpanel">
                                        <div class="table-card mt-4">
                                            <div class="main-table">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">Subscription</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Next Payment</th>
                                                                <th scope="col">Total</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr v-for="i in 5" :key="i">
                                                                <td>#099999999</td>
                                                                <td><span class="badge bg-success">Active</span></td>
                                                                <td>01/01/2022</td>
                                                                <td>$100</td>

                                                                <td><Link href="/view-subscription" class="co-main-btn" data-bs-toggle="modal" data-bs-target="#qrModal">View</Link></td>

                                                                <td><a href="#" class=" btn btn-danger btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#qrModal">Delete</a></td>

                                                            </tr>

                                                        </tbody>
                                                    </table>
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
