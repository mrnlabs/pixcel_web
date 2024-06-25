<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="wrapper wrapper-body">
            <div class="dashboard-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-main-title">
                                <h3><i class="fa-solid fa-chart-pie me-3"></i>Dashboard</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                           
                           You content goes here.................
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
