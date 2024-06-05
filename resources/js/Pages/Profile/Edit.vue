<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';
import imageProfile from '../../images/profile-imgs/img-13.jpg';
import imageCover from '../../images/banners/hero-cover-01.jpg';

defineProps({
    profile: Object,
});
</script>

<template>

    <Head title="Profile" />

    <AuthenticatedLayout>

        <body class="d-flex flex-column h-100">
            <!-- Follow People Model Start-->
            <div class="modal fade" id="FFModal" tabindex="-1" aria-labelledby="FFModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="FFModalLabel">Following & Followers</h5>
                            <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i
                                    class="uil uil-multiply"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="model-content follow-people-content">
                                <div class="">
                                    <ul class="nav nav-pills ff-tablist mb-2" role="tablist">
                                        <li class="nav-item d-flex me-4">
                                            <a class="nav-link px-0 pt-0 pb-3 active" id="pills-following-tab"
                                                data-bs-toggle="pill" href="#following" role="tab"
                                                aria-controls="following" aria-selected="true">Following <span
                                                    class="following_count">(2)</span></a>
                                        </li>
                                        <li class="nav-item d-flex">
                                            <a class="nav-link px-0 pt-0 pb-3" id="pills-followers-tab"
                                                data-bs-toggle="pill" href="#followers" role="tab"
                                                aria-controls="followers" aria-selected="false">Followers </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-4">
                                        <div class="tab-pane fade active show" id="following" role="tabpanel"
                                            aria-labelledby="pills-following-tab">
                                            <div class="users-list min-height-430">
                                                <div class="user-follow-card mb-4">
                                                    <div class="follow-card-left">
                                                        <div class="follow-avatar">
                                                            <img src="images/profile-imgs/img-2.jpg" alt="">
                                                        </div>
                                                        <div class="follow-name">
                                                            <h5>Jassica William</h5>
                                                            <span>1 Follower</span>
                                                        </div>
                                                    </div>
                                                    <div class="follow-card-btn">
                                                        <button class="follow-btn">Following</button>
                                                    </div>
                                                </div>
                                                <div class="user-follow-card mb-4">
                                                    <div class="follow-card-left">
                                                        <div class="follow-avatar">
                                                            <img :src="imageProfile" alt="">
                                                        </div>
                                                        <div class="follow-name">
                                                            <h5>Rock Smith</h5>
                                                            <span>3 Followers</span>
                                                        </div>
                                                    </div>
                                                    <div class="follow-card-btn">
                                                        <button class="follow-btn">Following</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="followers" role="tabpanel"
                                            aria-labelledby="pills-followers-tab">
                                            <div id="followers-empty-state"
                                                class="d-flex align-items-center justify-content-center flex-column min-height-430">
                                                <span>
                                                    <svg width="60" height="47" viewBox="0 0 60 47" fill="none">
                                                        <path
                                                            d="M41.8884 39.501C41.2649 38.8161 41.1572 37.7618 41.9808 37.0461L48.8852 30.1433C50.44 28.5811 52.8108 30.9436 51.2559 32.4981L47.1225 36.6306H56.1899C56.467 35.6917 56.644 35.0145 56.644 34.0064C56.644 28.0732 50.5247 24.6256 45.152 24.6256C40.9724 24.6256 36.4387 26.5956 34.5067 30.4819C36.5234 33.0521 37.7088 36.138 37.7088 39.4702C37.7088 41.6788 37.1623 43.8566 36.1693 45.8267C35.1918 47.7967 32.1976 46.3038 33.1828 44.3337C33.9525 42.8023 34.3528 41.1863 34.3528 39.4702C34.3528 31.4515 26.1321 26.7188 18.8505 26.7188C11.5767 26.7188 3.36369 31.4515 3.36369 39.4702C3.36369 41.2017 3.74856 42.7793 4.52598 44.326C5.51892 46.2961 2.5247 47.7967 1.53945 45.8344C0.546504 43.8643 0 41.6711 0 39.4702C0 32.3749 5.23412 26.8573 11.6228 24.5948C7.8127 22.1322 5.49583 17.9151 5.49583 13.3594C5.49583 5.98709 11.4843 0 18.8505 0C26.2322 0 32.2207 5.98709 32.2207 13.3594C32.2207 17.9228 29.8961 22.1322 26.086 24.5948C28.3412 25.3874 30.3656 26.5495 32.0744 27.9808C33.6369 25.4798 36.0616 23.6098 38.7787 22.5016C36.1001 20.4854 34.5221 17.3533 34.5221 13.9904C34.5221 8.11875 39.2867 3.35524 45.152 3.35524C51.0327 3.35524 55.7896 8.11105 55.7896 13.9904C55.7896 17.3533 54.2117 20.4931 51.5253 22.5016C56.2668 24.4332 60 28.6811 60 34.0064C60 34.8683 59.8922 35.7379 59.6921 36.5921C59.492 37.4386 59.1841 38.262 58.7838 39.0623C58.4913 39.6472 57.9063 39.9858 57.2906 39.9858L47.1302 39.9935L51.2559 44.1183C52.8185 45.6805 50.4477 48.0507 48.8852 46.4885L41.8884 39.501ZM18.8505 3.36293C13.3239 3.36293 8.85183 7.83401 8.85183 13.3594C8.85183 18.9001 13.3085 23.3481 18.8505 23.3481C24.3926 23.3481 28.857 18.9001 28.857 13.3594C28.857 7.84171 24.3772 3.36293 18.8505 3.36293ZM45.152 6.71047C41.1418 6.71047 37.8781 9.97336 37.8781 13.9904C37.8781 18.0152 41.1341 21.255 45.1597 21.255C49.1931 21.255 52.4336 18.0228 52.4336 13.9904C52.4336 9.97336 49.1777 6.71047 45.152 6.71047Z"
                                                            fill="#6ac045"></path>
                                                    </svg>
                                                </span>
                                                <p class="font-16 mt-4 text-light3">No followers yet</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Follow People Model End-->
            <!-- About Details Model Start-->
            <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="aboutModalLabel">Edit Details</h5>
                            <button type="button" class="close-model-btn" data-bs-dismiss="modal"
                                aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                </svg></button>
                        </div>
                        <div class="modal-body">
                            <div class="model-content main-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mt-4">
                                            <label class="form-label">First Name</label>
                                            <input class="form-control h_40" type="text" placeholder="" value="John">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Last Name</label>
                                            <input class="form-control h_40" type="text" placeholder="" value="Doe">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Card Number</label>
                                            <input class="form-control h_40" type="text" placeholder="000 000 000 000"
                                                value="">
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-6 col-md-12">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Email*</label>
                                            <input class="form-control h_40" type="text" placeholder=""
                                                value="Johndoe@example.com">
                                        </div>
                                    </div> -->
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Expiry Date</label>
                                            <input class="form-control h_40" type="date" placeholder="MM/DD/YYYY"
                                                value="">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Security Code</label>
                                            <input class="form-control h_40" type="text" placeholder="000" value="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="co-main-btn min-width btn-hover h_40"
                                data-bs-target="#aboutModal" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="main-btn min-width btn-hover h_40">Update</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Details Model End-->
            <!-- Header Start-->

            <!-- Body Start-->
            <div class="wrapper">
                <div class="profile-banner">
                    <div class="hero-cover-block">
                        <div class="hero-cover">
                            <div class="hero-cover-img">
                                <img :src="imageCover" alt="">
                            </div>
                        </div>
                        <div class="upload-cover">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="cover-img-btn">
                                            <input type="file" id="cover-img">
                                            <label for="cover-img"><i class="fa-solid fa-panorama me-3"></i>Change
                                                Image</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-dt-block">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-4 col-lg-5 col-md-12">
                                    <div class="main-card user-left-dt">
                                        <div class="user-avatar-img">
                                            <img :src="imageProfile" alt="">
                                            <div class="avatar-img-btn">
                                                <input type="file" id="avatar-img">
                                                <label for="avatar-img"><i class="fa-solid fa-camera"></i></label>
                                            </div>
                                        </div>
                                        <div class="user-dts">
                                            <h4 class="user-name">{{ profile.firstname }} {{ profile.lastname }}<span
                                                    class="verify-badge"><i class="fa-solid fa-circle-check"></i></span>
                                            </h4>
                                            <span class="user-email">{{ profile.email }}</span>
                                        </div>

                                        <div class="user-description">
                                            <p>Hey I am a John Doe</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-12">
                                    <div class="right-profile">
                                        <div class="profile-tabs">
                                            <ul class="nav nav-pills nav-fill p-2 garren-line-tab" id="myTab"
                                                role="tablist">

                                                <li class="nav-item">
                                                    <a class="nav-link" id="about-tab" data-bs-toggle="tab"
                                                        href="#about" role="tab" aria-controls="about"
                                                        aria-selected="false"><i
                                                            class="fa-solid fa-circle-info"></i>About</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="setting-tab" data-bs-toggle="tab"
                                                        href="#setting" role="tab" aria-controls="setting"
                                                        aria-selected="false"><i
                                                            class="fa-solid fa-gear"></i>Setting</a>
                                                </li>

                                            </ul>
                                            <div class="tab-content" id="myTabContent">

                                                <div class="tab-pane fade" id="about" role="tabpanel"
                                                    aria-labelledby="about-tab">
                                                    <div class="main-card mt-4">
                                                        <div class="bp-title position-relative">
                                                            <h4>About</h4>
                                                            <button
                                                                class="main-btn btn-hover ms-auto edit-btn me-3 pe-4 ps-4 h_40"
                                                                data-bs-toggle="modal" data-bs-target="#aboutModal">
                                                                <i class="fa-regular fa-pen-to-square me-2"></i>Edit
                                                            </button>
                                                        </div>
                                                        <div class="about-details">
                                                            <div class="about-step">
                                                                <div class="table-responsive">
                                                                    <div
                                                                        class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                        <div class="table-row table-head no-bg">
                                                                            <div class="table-col fs-14 text-light3">
                                                                                First Name <span class="red">*</span>
                                                                            </div>
                                                                            <div class="table-col fs-14 text-light3">
                                                                                Last name <span class="red">*</span>
                                                                            </div>
                                                                            <div
                                                                                class="table-col fs-14 text-light3 text-right">
                                                                                Display name</div>
                                                                        </div>
                                                                        <div class="table-row ticket-subtype-row">
                                                                            <div class="table-col first-col">
                                                                                <div
                                                                                    class="form-group m-0 form-custom-validation">
                                                                                    <input class="form-control h_40"
                                                                                        type="text"
                                                                                        placeholder="Event Name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="table-col second-col">
                                                                                <div
                                                                                    class="form-group m-0 form-custom-validation">
                                                                                    <input class="form-control h_40"
                                                                                        type="text"
                                                                                        placeholder="Event Name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="table-col third-col">
                                                                                <div
                                                                                    class="form-group m-0 form-custom-validation">
                                                                                    <input class="form-control h_40"
                                                                                        type="text"
                                                                                        placeholder="Event Name">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                        <div class="table-row table-head no-bg">
                                                                            <div class="table-col fs-14 text-light3">
                                                                                Email Address <span class="red">*</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="table-row ticket-subtype-row">
                                                                            <div class="table-col first-col">
                                                                                <div
                                                                                    class="form-group m-0 form-custom-validation">
                                                                                    <input class="form-control h_40"
                                                                                        type="text"
                                                                                        placeholder="Event Name">
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="setting" role="tabpanel"
                                                    aria-labelledby="setting-tab">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="main-card mt-4 p-0">
                                                                <div class="nav custom-tabs" role="tablist">
                                                                    <button class="tab-link active" data-bs-toggle="tab"
                                                                        data-bs-target="#tab-01" type="button"
                                                                        role="tab" aria-controls="tab-01"
                                                                        aria-selected="true"><i
                                                                            class="fa-solid fa-envelope me-3"></i>Address</button>
                                                                    <button class="tab-link" data-bs-toggle="tab"
                                                                        data-bs-target="#tab-02" type="button"
                                                                        role="tab" aria-controls="tab-02"
                                                                        aria-selected="false"><i
                                                                            class="fa-solid fa-key me-3"></i>Password
                                                                        Settings</button>
                                                                    <button class="tab-link" data-bs-toggle="tab"
                                                                        data-bs-target="#tab-03" type="button"
                                                                        role="tab" aria-controls="tab-03"
                                                                        aria-selected="false"><i
                                                                            class="fa-solid fa-gear me-3"></i>Payment
                                                                        Method
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="main-card mt-4">
                                                                <div class="tab-content">
                                                                    <div class="tab-pane fade show active" id="tab-01"
                                                                        role="tabpanel">
                                                                        <div class="bp-title">
                                                                            <h4>Address</h4>
                                                                        </div>
                                                                        <div class="profile-setting p-4">
                                                                            <div class="about-details">
                                                                                <div class="about-step">
                                                                                    <div class="table-responsive">
                                                                                        <div
                                                                                            class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                                            <div
                                                                                                class="table-row table-head no-bg">
                                                                                                <div
                                                                                                    class="table-col fs-14 text-light3">
                                                                                                    First Name <span
                                                                                                        class="red">*</span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="table-col fs-14 text-light3">
                                                                                                    Last name <span
                                                                                                        class="red">*</span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="table-col fs-14 text-light3 text-right">
                                                                                                    Display name</div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="table-row ticket-subtype-row">
                                                                                                <div
                                                                                                    class="table-col first-col">
                                                                                                    <div
                                                                                                        class="form-group m-0 form-custom-validation">
                                                                                                        <input
                                                                                                            class="form-control h_40"
                                                                                                            type="text"
                                                                                                            placeholder="Event Name">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="table-col second-col">
                                                                                                    <div
                                                                                                        class="form-group m-0 form-custom-validation">
                                                                                                        <input
                                                                                                            class="form-control h_40"
                                                                                                            type="text"
                                                                                                            placeholder="Event Name">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="table-col third-col">
                                                                                                    <div
                                                                                                        class="form-group m-0 form-custom-validation">
                                                                                                        <input
                                                                                                            class="form-control h_40"
                                                                                                            type="text"
                                                                                                            placeholder="Event Name">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                                            <div
                                                                                                class="table-row table-head no-bg">
                                                                                                <div
                                                                                                    class="table-col fs-14 text-light3">
                                                                                                    Street address<span
                                                                                                        class="red">*</span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="table-col fs-14 text-light3">
                                                                                                    Postcode<span
                                                                                                        class="red">*</span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="table-col fs-14 text-light3 text-right">
                                                                                                    Phone</div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="table-row ticket-subtype-row">
                                                                                                <div
                                                                                                    class="table-col first-col">
                                                                                                    <div
                                                                                                        class="form-group m-0 form-custom-validation">
                                                                                                        <input
                                                                                                            class="form-control h_40"
                                                                                                            type="text"
                                                                                                            placeholder="Event Name">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="table-col second-col">
                                                                                                    <div
                                                                                                        class="form-group m-0 form-custom-validation">
                                                                                                        <input
                                                                                                            class="form-control h_40"
                                                                                                            type="text"
                                                                                                            placeholder="Event Name">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="table-col third-col">
                                                                                                    <div
                                                                                                        class="form-group m-0 form-custom-validation">
                                                                                                        <input
                                                                                                            class="form-control h_40"
                                                                                                            type="text"
                                                                                                            placeholder="Event Name">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                                            <div
                                                                                                class="table-row table-head no-bg">
                                                                                                <div
                                                                                                    class="table-col fs-14 text-light3">
                                                                                                    Country<span
                                                                                                        class="red">*</span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="table-col fs-14 text-light3">
                                                                                                    Province<span
                                                                                                        class="red">*</span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="table-col fs-14 text-light3 text-right">
                                                                                                    Town/City</div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="table-row ticket-subtype-row">
                                                                                                <div
                                                                                                    class="table-col first-col">
                                                                                                    <div
                                                                                                        class="form-group m-0 form-custom-validation">
                                                                                                        <input
                                                                                                            class="form-control h_40"
                                                                                                            type="text"
                                                                                                            placeholder="Event Name">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="table-col second-col">
                                                                                                    <div
                                                                                                        class="form-group m-0 form-custom-validation">
                                                                                                        <input
                                                                                                            class="form-control h_40"
                                                                                                            type="text"
                                                                                                            placeholder="Event Name">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="table-col third-col">
                                                                                                    <div
                                                                                                        class="form-group m-0 form-custom-validation">
                                                                                                        <input
                                                                                                            class="form-control h_40"
                                                                                                            type="text"
                                                                                                            placeholder="Event Name">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="tab-02"
                                                                        role="tabpanel">
                                                                        <div class="bp-title">
                                                                            <h4>Password Settings</h4>
                                                                        </div>
                                                                        <div class="password-setting p-4">
                                                                            <div class="password-des">
                                                                                <h4>Change password</h4>
                                                                                <p>You can update your password from
                                                                                    here. If you can't remember your
                                                                                    current password, just log out and
                                                                                    click on Forgot password.</p>
                                                                            </div>
                                                                            <div class="change-password-form">
                                                                                <div class="form-group mt-4">
                                                                                    <label class="form-label">Current
                                                                                        password*</label>
                                                                                    <div
                                                                                        class="loc-group position-relative">
                                                                                        <input class="form-control h_50"
                                                                                            type="password"
                                                                                            placeholder="Enter your password">
                                                                                        <span class="pass-show-eye"><i
                                                                                                class="fas fa-eye-slash"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mt-4">
                                                                                    <label class="form-label">New
                                                                                        password*</label>
                                                                                    <div
                                                                                        class="loc-group position-relative">
                                                                                        <input class="form-control h_50"
                                                                                            type="password"
                                                                                            placeholder="Enter your password">
                                                                                        <span class="pass-show-eye"><i
                                                                                                class="fas fa-eye-slash"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mt-4">
                                                                                    <label class="form-label">Confirm
                                                                                        new password*</label>
                                                                                    <div
                                                                                        class="loc-group position-relative">
                                                                                        <input class="form-control h_50"
                                                                                            type="password"
                                                                                            placeholder="Enter your password">
                                                                                        <span class="pass-show-eye"><i
                                                                                                class="fas fa-eye-slash"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                                <button
                                                                                    class="main-btn btn-hover w-100 mt-5"
                                                                                    type="submit">Update
                                                                                    Password</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="tab-03"
                                                                        role="tabpanel">
                                                                        <div class="bp-title">
                                                                            <h4>Payment Methods</h4>
                                                                        </div>
                                                                        <div class="privacy-setting p-4">
                                                                            <div
                                                                                class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                                <div class="table-row table-head no-bg">
                                                                                    <div
                                                                                        class="table-col fs-14 text-light3">
                                                                                        Method <span
                                                                                            class="red">*</span></div>
                                                                                    <div
                                                                                        class="table-col fs-14 text-light3">
                                                                                        Expires<span
                                                                                            class="red">*</span></div>
                                                                                </div>
                                                                                <div
                                                                                    class="table-row ticket-subtype-row">
                                                                                    <div class="table-col first-col">
                                                                                        <div
                                                                                            class="form-group m-0 form-custom-validation">
                                                                                            <input
                                                                                                class="form-control h_40"
                                                                                                type="text"
                                                                                                placeholder="Event Name">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="table-col second-col">
                                                                                        <div
                                                                                            class="form-group m-0 form-custom-validation">
                                                                                            <input
                                                                                                class="form-control h_40"
                                                                                                type="text"
                                                                                                placeholder="Event Name">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="table-col third-col">
                                                                                        <div
                                                                                            class="form-group m-0 form-custom-validation">
                                                                                            <button
                                                                                                class="main-btn btn-hover ms-auto edit-btn me-3 pe-4 ps-4 h_40"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#aboutModal">
                                                                                                <i
                                                                                                    class="fa-regular fa-pen-to-square me-2"></i>Add
                                                                                            </button>
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
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Body End-->


        </body>
    </AuthenticatedLayout>
</template>
