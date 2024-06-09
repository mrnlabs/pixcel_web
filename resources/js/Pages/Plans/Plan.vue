<script setup>

import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Breadcrumb from '@/Components/Breadcrumb.vue';
import PlansModal from './PlansModal.vue';
import { ref } from 'vue';
import moment from 'moment';

const props=defineProps({
    errors:Object,
    plans:Array,
    success:String,
    error:String
})
let showModal = ref(false);
let viewPlan = ref({});

const returnFormatedDate = (date) => {
    return moment(date).format('DD-MM-YYYY');
}

const truncateText = (text, limit) => {
    if (text.length > limit) {
        return text.substring(0, limit) + '...';
    } else {
        return text
    }
}

const editPlan = (plan) => {
    viewPlan.value = plan
}
</script>

<template>

    <Head title="All Subscriptions" />
    <AuthenticatedLayout>
        <!-- Body Start -->
        <div class="wrapper wrapper-body">
            <div class="container-fluid">
                <div class="row">
                    <Breadcrumb title="Plans" icon="fa-gauge"/>
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
                <a @click="showModal = true" data-bs-toggle="modal" data-bs-target="#create-plan" 
                    class="create-btn btn-hover" href="javascript:;">
                    <i class="fa-solid fa-plus"></i><span>Create Plan</span>
                </a>
            </div>
            <div class="table-card">
            <div class="main-table">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Description</th>
                                <th scope="col">Created</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="plan in plans" :key="plan.id">
                                <td>{{ plan.title }}</td>
                                <td><span class="badge bg-primary">{{ plan.amount }}</span></td>
                                <td><p v-html="truncateText(plan.description, 55)"></p>
                                <span v-if="plan.description.length > 55"
                                     class="text-primary cursor-pointer">See more</span>
                            </td>
                                <td>{{ returnFormatedDate(plan.created_at) }}</td>

                                <td>
                                    <span @click="editPlan(plan)"
                                    data-bs-toggle="modal" data-bs-target="#create-plan"
                                    class="cursor-pointer event-month text-center"><i class="fas fa-eye"></i></span>
                                </td>



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
                <PlansModal 
                :viewPlan="viewPlan"
                :showModal="showModal"
                @modalClose="showModal = false"
                :success="success"
                :error="error"
                :errors="errors"
                />
        </div>


        <!-- Body End -->
    </AuthenticatedLayout>

</template>
<style>
.event-month {
    padding: 1px 0;
    text-transform: lowercase;
}
    </style>
