<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";
import Breadcrumb from "@/Components/Breadcrumb.vue";

const props = defineProps({
    e_vent: Object,
    errors: Object,
    success: String,
    error: String
})

const form = useForm({
    id: props.e_vent?.id ? props.e_vent.id : '',
    name: props.e_vent?.name ? props.e_vent.name : '',
    language: props.e_vent?.language ? props.e_vent.language : '',
    country: props.e_vent?.country ? props.e_vent.country : '',
    count_down: props.e_vent?.count_down ? props.e_vent.count_down : '',
    beep_sound: props.e_vent?.beep_sound ? props.e_vent.beep_sound : '',
    mirror_overlay: props.e_vent?.mirror_overlay ? props.e_vent.mirror_overlay : '',
    front_rear_camera: props.e_vent?.front_rear_camera ? props.e_vent.front_rear_camera : '',
    camera_exposure: props.e_vent?.camera_exposure ? props.e_vent.camera_exposure : '',
    qr_app_protection: props.e_vent?.qr_app_protection ? props.e_vent.qr_app_protection : '',
    motion_trigger: props.e_vent?.motion_trigger ? props.e_vent.motion_trigger : '',
    front_or_rear_camera: props.e_vent?.front_or_rear_camera ? props.e_vent.front_or_rear_camera : '',
    camera_exposure_menu_item: props.e_vent?.camera_exposure_menu_item ? props.e_vent.camera_exposure_menu_item : '',
    boomerang: props.e_vent?.boomerang ? props.e_vent.boomerang : '',
    videos: props.e_vent?.videos ? props.e_vent.videos : '',
    slomo: props.e_vent?.slomo ? props.e_vent.slomo : '',
    boomerang_repeats: props.e_vent?.boomerang_repeats ? props.e_vent.boomerang_repeats : '',
    boomerang_speed: props.e_vent?.boomerang_speed ? props.e_vent.boomerang_speed : '',
    boomerang_bounce: props.e_vent?.boomerang_bounce ? props.e_vent.boomerang_bounce : '',
    duration: props.e_vent?.duration ? props.e_vent.duration : '',
    gif_number_of_photos: props.e_vent?.gif_number_of_photos ? props.e_vent.gif_number_of_photos : '',
    gif_frame_duration: props.e_vent?.gif_frame_duration ? props.e_vent.gif_frame_duration : '',
    video_maximum_duration: props.e_vent?.video_maximum_duration ? props.e_vent.video_maximum_duration : '',
    slomo_recording_time: props.e_vent?.slomo_recording_time ? props.e_vent.slomo_recording_time : '',
    slomo_boomerang: props.e_vent?.slomo_boomerang ? props.e_vent.slomo_boomerang : '',
    speed: props.e_vent?.speed ? props.e_vent.speed : '',
    add_audio_file: props.e_vent?.add_audio_file ? props.e_vent.add_audio_file : '',
    time_outs: props.e_vent?.time_outs ? props.e_vent.time_outs : '',
    editing: props.e_vent?.editing ? props.e_vent.editing : '',
    sharing: props.e_vent?.sharing ? props.e_vent.sharing : '',
    thanks_message: props.e_vent?.thanks_message ? props.e_vent.thanks_message : '',
    props: props.e_vent?.props ? props.e_vent.props : '',
    sharing_method: {
        email: props.e_vent?.sharing_method?.email ? props.e_vent.sharing_method.email : '',
        sms: props.e_vent?.sharing_method?.sms ? props.e_vent.sharing_method.sms : '',
        in_app: props.e_vent?.sharing_method?.in_app ? props.e_vent.sharing_method.in_app : '',
        download: props.e_vent?.sharing_method?.download ? props.e_vent.sharing_method.download : '',
        airdrop: props.e_vent?.sharing_method?.airdrop ? props.e_vent.sharing_method.airdrop : '',
        qr: props.e_vent?.sharing_method?.qr ? props.e_vent.sharing_method.qr : '',
        general: props.e_vent?.sharing_method?.general ? props.e_vent.sharing_method.general : '',
        whatsapp: props.e_vent?.sharing_method?.whatsapp ? props.e_vent.sharing_method.whatsapp : '',
    },
    edit_active: props.e_vent?.edit_active ? props.e_vent.edit_active : '',
    in_app_active: props.e_vent?.in_app_active ? props.e_vent.in_app_active : '',
    gallery: props.e_vent?.gallery ? props.e_vent.gallery : '',
    email_subject: props.e_vent?.email_subject ? props.e_vent.email_subject : '',
    text_email: props.e_vent?.text_email ? props.e_vent.text_email : '',
    text_message: props.e_vent?.text_message ? props.e_vent.text_message : '',
    webgallery_email_subject: props.e_vent?.webgallery_email_subject ? props.e_vent.webgallery_email_subject : '',
    webgallery_email_message: props.e_vent?.webgallery_email_message ? props.e_vent.webgallery_email_message : '',
    social_share_description: props.e_vent?.social_share_description ? props.e_vent.social_share_description : '',

})



function handleFileUpload(event) {
    const file = event.target.files[0];
    form.add_audio_file = file;
}

function submit() {
    console.log(form);
    form.post('/create-event')
}

</script>
<template>

    <Head title="Create Event" />
    <AuthenticatedLayout>
        <div class="wrapper wrapper-body">
            <div class="dashboard-body">
                <div class="container-fluid">
                    <div class="row">
                        <Breadcrumb :title="e_vent?.id ? e_vent.name : 'Event'" icon="fa-calendar-days" />
                        <!-- <hr class="m-5"> -->
                        <div class="col-md-12">
                            <div class="main-card mt-5">
                                <div class="dashboard-wrap-content ">
                                    <div class="model-content main-form">
                                        <div class="row">
                                            <form @submit.prevent="submit">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="main-card p-5 pt-0">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between price-variation-head">
                                                            <h5 class="m-0 color-black fs-16">
                                                                General Settings</h5>
                                                        </div>
                                                        <div class="p-4table-responsive">
                                                            <div
                                                                class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Name of the
                                                                        Event <span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3">Language
                                                                        <span class="red">*</span>
                                                                    </div>
                                                                    <div class="table-col fs-14 text-light3 text-right">
                                                                        Country</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40" type="text"
                                                                                placeholder="Event Name"
                                                                                v-model="form.name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col second-col">
                                                                        <div class="form-group m-0">
                                                                            <select class="selectpicker form-control"
                                                                                data-size="5" data-live-search="true"
                                                                                v-model="form.language">
                                                                                <option value="English">English</option>
                                                                                <option value="Portugues">Portugues
                                                                                </option>
                                                                                <option value="Espanol">Espanol</option>
                                                                                <option value="Nederlands">Nederlands
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col third-col">

                                                                        <select class="selectpicker form-control"
                                                                            data-size="5" data-live-search="true"
                                                                            v-model="form.country">
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Botswana">Botswana</option>
                                                                            <option value="Lesotho">Lesotho</option>
                                                                            <option value="Malawi">Malawi</option>
                                                                            <option value="Mozambique">Mozambique
                                                                            </option>
                                                                            <option value="Namibia">Namibia</option>
                                                                            <option value="South Africa">South Africa
                                                                            </option>
                                                                            <option value="Swatini">Swatini</option>
                                                                            <option value="Zambia">Zambia</option>
                                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Countdown
                                                                        <span class="red">*</span>
                                                                    </div>
                                                                    <div class="table-col fs-14 text-light3">Beep sounds
                                                                        <span class="red">*</span>
                                                                    </div>
                                                                    <div class="table-col fs-14 text-light3 text-right">
                                                                        mirror overlay preview</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="number" min="1" max="10"
                                                                                required="" v-model="form.count_down">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col second-col">
                                                                        <div class="d-flex align-items-start">
                                                                            <label class="btn-switch m-0 me-3">
                                                                                <input type="checkbox" class=""
                                                                                    v-model="form.beep_sound">
                                                                                <span class="checkbox-slider"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col third-col">
                                                                        <div class="d-flex align-items-start">
                                                                            <label class="btn-switch m-0 me-3">
                                                                                <input type="checkbox" class=""
                                                                                    v-model="form.mirror_overlay">
                                                                                <span class="checkbox-slider"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                            <div class="form-group border_bottom">
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Front or rear camera
                                                                    </h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox"
                                                                            v-model="form.front_rear_camera">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Camera exposure menu
                                                                    </h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox"
                                                                            v-model="form.camera_exposure">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">QR app protection
                                                                    </h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox"
                                                                            v-model="form.qr_app_protection">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="main-card p-4 mt-4">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between price-variation-head">
                                                            <h5 class="m-0 color-black fs-16">
                                                                Functions</h5>
                                                        </div>

                                                        <div
                                                            class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                            <div class="form-group border_bottom">
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Boomerang</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" v-model="form.boomerang">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>

                                                                <div
                                                                    class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Videos</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" v-model="form.videos">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Slomo</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" v-model="form.slomo">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <div
                                                                class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Boomerang
                                                                        repeats <span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3">Boomerang
                                                                        speed <span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3 text-right">
                                                                        Boomerang bounce duration</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="number" min="1" max="20"
                                                                                required=""
                                                                                v-model="form.boomerang_repeats">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="number" min="1" max="15"
                                                                                required=""
                                                                                v-model="form.boomerang_repeats">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="number" min="0" max="10"
                                                                                required=""
                                                                                v-model="form.boomerang_bounce">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="table-responsive p-4">
                                                        <div
                                                            class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                            <div class="table-row table-head no-bg">
                                                                <div class="table-col fs-14 text-light3">Slomo recording
                                                                    time<span class="red">*</span></div>
                                                                <div class="table-col fs-14 text-light3">Slomo
                                                                    Boomerang<span class="red">*</span></div>
                                                                <div class="table-col fs-14 text-light3 text-right">
                                                                    Slomo speed</div>
                                                            </div>
                                                            <div class="table-row ticket-subtype-row">
                                                                <div class="table-col first-col">
                                                                    <div class="form-group m-0 form-custom-validation">
                                                                        <input class="form-control h_40" type="number"
                                                                            v-model="form.slomo_recording_time">
                                                                    </div>
                                                                </div>
                                                                <div class="table-col first-col">
                                                                    <div class="d-flex align-items-start">
                                                                        <label class="btn-switch m-0 me-3">
                                                                            <input type="checkbox" class=""
                                                                                v-model="form.slomo_boomerang">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="table-col first-col">
                                                                    <div class="form-group m-0 form-custom-validation">
                                                                        <input class="form-control h_40" type="number"
                                                                            min="2" max="5" v-model="form.speed">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive p-4">
                                                        <div
                                                            class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                            <div class="table-row table-head no-bg">
                                                                <div class="table-col fs-14 text-light3">Add audio
                                                                    file<span class="red">*</span></div>
                                                            </div>
                                                            <div class="table-row ticket-subtype-row">
                                                                <input class="form-control h_40" type="file"
                                                                    @change="handleFileUpload" />

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="main-card p-4 mt-4">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between price-variation-head">
                                                            <h5 class="m-0 color-black fs-16">
                                                                Time Outs</h5>
                                                        </div>

                                                        <div class="table-responsive">
                                                            <div
                                                                class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Editing(iOS
                                                                        only)<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3">
                                                                        Sharing<span class="red">*</span></div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="number" min="1" max="10"
                                                                                required="" v-model="form.editing">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="number" min="1" max="10"
                                                                                required="" v-model="form.sharing">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Thanks<span
                                                                            class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3">Props (iOS
                                                                        only)<span class="red">*</span></div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="number" min="1" max="20"
                                                                                v-model="form.thanks_message">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="number" min="1" max="10"
                                                                                required="" v-model="form.count_down">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="main-card p-4 mt-4">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between price-variation-head">
                                                            <h5 class="m-0 color-black fs-16">
                                                                Sharing</h5>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between price-variation-head">
                                                            <h5 class="m-0 color-black fs-16">
                                                                Sharing Methods</h5>
                                                        </div>

                                                        <div
                                                            class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                            <div class="form-group border_bottom">
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Email</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox"
                                                                            v-model="form.sharing_method.email">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">SMS</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox"
                                                                            v-model="form.sharing_method.sms">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Download</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox"
                                                                            v-model="form.sharing_method.download">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Airdrop</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox"
                                                                            v-model="form.sharing_method.airdrop">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">QR</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox"
                                                                            v-model="form.sharing_method.qr">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">General</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox"
                                                                            v-model="form.sharing_method.general">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Whatsapp</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox"
                                                                            v-model="form.sharing_method.whatsapp">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">In-app gallery</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox"
                                                                            v-model="form.sharing_method.in_app">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <div
                                                                class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Email
                                                                        Subject<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3">Default
                                                                        Text (email)<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3 text-right">
                                                                        Text message (SMS)</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <textarea
                                                                                v-model="form.email_subject"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <textarea
                                                                                v-model="form.text_email"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <textarea
                                                                                v-model="form.text_message"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive">

                                                            <div
                                                                class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Webgallery
                                                                        email subject<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3">Webgallery
                                                                        email message<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3 text-right">
                                                                        Social Share description</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <textarea
                                                                                v-model="form.webgallery_email_subject"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <textarea
                                                                                v-model="form.webgallery_email_message"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <textarea
                                                                                v-model="form.social_share_description"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="main-card p-4 mt-4">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between price-variation-head">
                                                            <h5 class="m-0 color-black fs-16">
                                                                Branding</h5>
                                                        </div>

                                                        <div class="table-responsive">
                                                            <div
                                                                class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Gallery
                                                                        Name <span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3 text-right">
                                                                        Boomerang bounce duration</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40" type="text"
                                                                                v-model="form.gallery">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="file">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="table-responsive">
                                                            <div
                                                                class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Attract
                                                                        screen (foreground) <span class="red">*</span>
                                                                    </div>
                                                                    <div class="table-col fs-14 text-light3 text-right">
                                                                        App Background</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="file">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="file">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <div
                                                                class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Text and
                                                                        Button<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3 text-right">
                                                                        Webgallery Background</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="color">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="file">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="main-card p-4 mt-4">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between price-variation-head">
                                                            <h5 class="m-0 color-black fs-16">
                                                                Branding</h5>
                                                        </div>

                                                        <div class="table-responsive">
                                                            <div
                                                                class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Gallery
                                                                        Name <span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3 text-right">
                                                                        Boomerang bounce duration</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40" type="text"
                                                                                v-model="form.gallery">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="file">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="table-responsive">
                                                            <div
                                                                class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Attract
                                                                        screen (foreground) <span class="red">*</span>
                                                                    </div>
                                                                    <div class="table-col fs-14 text-light3 text-right">
                                                                        App Background</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="file">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="file">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <div
                                                                class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Text and
                                                                        Button<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3 text-right">
                                                                        Webgallery Background</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="color">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div
                                                                            class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40"
                                                                                type="file">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="btn-submit">
                                                        <button class="main-btn btn-hover h_50 w-100" type="submit">{{
                                                            form.id ? 'Update' : 'Create' }}</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
