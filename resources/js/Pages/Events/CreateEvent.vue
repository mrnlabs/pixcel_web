<script >
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";

export default {
    data() {
        return {
            form: {
                name: '',
                language: '',
                country: '',
                count_down: '',
                beep_sound: '',
                mirror_overlay: '',
                front_rear_camera: '',
                camera_exposure: '',
                qr_app_protection: '',
            }
        }
    },
    methods: {
        submit() {
            this.$inertia.post('/create-event', this.form)
        }
    },
    components: {
        AuthenticatedLayout,
        Head
    }
}
</script>
<template>
    <Head title="All Events" />
    <AuthenticatedLayout>
        <div class="wrapper wrapper-body">
            <div class="dashboard-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-main-title">
                                <h3><i class="fa-solid fa-chart-pie me-3"></i>Create Event</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="main-card mt-5">
                                <div class="dashboard-wrap-content p-4">
                                    <div class="model-content main-form">
                                        <div class="row">
                                            <form @submit.prevent="submit">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="main-card p-4 mt-4">
                                                    <div class="d-flex align-items-center justify-content-between price-variation-head">
                                                        <h5 class="m-0 color-black fs-16">
                                                            General Settings</h5>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                            <div class="table-row table-head no-bg">
                                                                <div class="table-col fs-14 text-light3">Name of the Event <span class="red">*</span></div>
                                                                <div class="table-col fs-14 text-light3">Language <span class="red">*</span></div>
                                                                <div class="table-col fs-14 text-light3 text-right">Country</div>
                                                            </div>
                                                            <div class="table-row ticket-subtype-row">
                                                                <div class="table-col first-col">
                                                                    <div class="form-group m-0 form-custom-validation">
                                                                        <input class="form-control h_40" type="text" placeholder="Event Name" v-model="form.name">
                                                                    </div>
                                                                </div>
                                                                <div class="table-col second-col">
                                                                    <div class="form-group m-0">
                                                                        <select class="selectpicker form-control" data-size="5" data-live-search="true" v-model="form.language">
                                                                            <option value="English">English</option>
                                                                            <option value="Portugues">Portugues</option>
                                                                            <option value="Espanol">Espanol</option>
                                                                            <option value="Nederlands">Nederlands</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="table-col third-col">

                                                                        <select class="selectpicker form-control" data-size="5" data-live-search="true" v-model="form.country">
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Botswana">Botswana</option>
                                                                            <option value="Lesotho">Lesotho</option>
                                                                            <option value="Malawi">Malawi</option>
                                                                            <option value="Mozambique">Mozambique</option>
                                                                            <option value="Namibia">Namibia</option>
                                                                            <option value="South Africa">South Africa</option>
                                                                            <option value="Swatini">Swatini</option>
                                                                            <option value="Zambia">Zambia</option>
                                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                            <div class="table-row table-head no-bg">
                                                                <div class="table-col fs-14 text-light3">Countdown <span class="red">*</span></div>
                                                                <div class="table-col fs-14 text-light3">Beep sounds <span class="red">*</span></div>
                                                                <div class="table-col fs-14 text-light3 text-right">mirror overlay preview</div>
                                                            </div>
                                                            <div class="table-row ticket-subtype-row">
                                                                <div class="table-col first-col">
                                                                    <div class="form-group m-0 form-custom-validation">
                                                                        <input class="form-control h_40" type="number" min="1" max="10" required="" v-model="form.count_down">
                                                                    </div>
                                                                </div>
                                                                <div class="table-col second-col">
                                                                    <div class="d-flex align-items-start">
                                                                        <label class="btn-switch m-0 me-3">
                                                                            <input type="checkbox" class=""  v-model="form.beep_sound" >
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="table-col third-col">
                                                                    <div class="d-flex align-items-start">
                                                                        <label class="btn-switch m-0 me-3">
                                                                            <input type="checkbox" class=""  v-model="form.mirror_overlay">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                        <div class="form-group border_bottom">
                                                            <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                <h4 class="fs-14 mb-0 me-auto">Front or rear camera</h4>
                                                                <label class="btn-switch m-0 me-3">
                                                                    <input type="checkbox" id="is-restrict-total-ticket"  v-model="form.front_rear_camera">
                                                                    <span class="checkbox-slider"></span>
                                                                </label>

                                                            </div>
                                                            <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                <h4 class="fs-14 mb-0 me-auto">Camera exposure menu</h4>
                                                                <label class="btn-switch m-0 me-3">
                                                                    <input type="checkbox" id="is-restrict-total-ticket"  v-model="form.camera_exposure" >
                                                                    <span class="checkbox-slider"></span>
                                                                </label>

                                                            </div>
                                                            <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                <h4 class="fs-14 mb-0 me-auto">QR app protection</h4>
                                                                <label class="btn-switch m-0 me-3">
                                                                    <input type="checkbox" id="is-restrict-total-ticket" v-model="form.qr_app_protection">
                                                                    <span class="checkbox-slider"></span>
                                                                </label>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="main-card p-4 mt-4">
                                                        <div class="d-flex align-items-center justify-content-between price-variation-head">
                                                            <h5 class="m-0 color-black fs-16">
                                                                Functions</h5>
                                                        </div>

                                                        <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                            <div class="form-group border_bottom">
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Boomerang</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket"  v-model="form.front_rear_camera">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Animated GIF</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket"  v-model="form.camera_exposure" >
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Videos</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket" v-model="form.qr_app_protection">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Slomo</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket" v-model="form.qr_app_protection">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Boomerang repeats <span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3">Boomerang speed <span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3 text-right">Boomerang bounce duration</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40" type="number" min="1" max="10" required="" v-model="form.count_down">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40" type="number" min="1" max="10" required="" v-model="form.count_down">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40" type="number" min="1" max="10" required="" v-model="form.count_down">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">GIF number of photos  <span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3">GIF frame duration<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3 text-right">Video maximum duration</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40" type="number" min="1" max="10" required="" v-model="form.count_down">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40" type="number" min="1" max="10" required="" v-model="form.count_down">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40" type="number" min="1" max="10" required="" v-model="form.count_down">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                            <div class="table-row table-head no-bg">
                                                                <div class="table-col fs-14 text-light3">Slomo recording time<span class="red">*</span></div>
                                                                <div class="table-col fs-14 text-light3">Slomo Boomerang<span class="red">*</span></div>
                                                                <div class="table-col fs-14 text-light3 text-right">Slomo speed</div>
                                                            </div>
                                                            <div class="table-row ticket-subtype-row">
                                                                <div class="table-col first-col">
                                                                    <div class="form-group m-0 form-custom-validation">
                                                                        <input class="form-control h_40" type="number" min="1" max="10" required="" v-model="form.count_down">
                                                                    </div>
                                                                </div>
                                                                <div class="table-col first-col">
                                                                    <div class="form-group m-0 form-custom-validation">
                                                                        <input class="form-control h_40" type="number" min="1" max="10" required="" v-model="form.count_down">
                                                                    </div>
                                                                </div>
                                                                <div class="table-col first-col">
                                                                    <div class="form-group m-0 form-custom-validation">
                                                                        <input class="form-control h_40" type="number" min="1" max="10" required="" v-model="form.count_down">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                            <div class="table-row table-head no-bg">
                                                                <div class="table-col fs-14 text-light3">Add audio file<span class="red">*</span></div>
                                                                <div class="table-col fs-14 text-light3">Screen flash<span class="red">*</span></div>
                                                            </div>
                                                            <div class="table-row ticket-subtype-row">
                                                                <div class="table-col first-col">
                                                                    <div class="form-group m-0 form-custom-validation">
                                                                        <input class="form-control h_40" type="file" min="1" max="10" required="" >
                                                                    </div>
                                                                </div>
                                                                <div class="table-col first-col">
                                                                    <div class="form-group m-0 form-custom-validation">
                                                                        <input class="form-control h_40" type="number" min="1" max="10" required="" v-model="form.count_down">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="main-card p-4 mt-4">
                                                        <div class="d-flex align-items-center justify-content-between price-variation-head">
                                                            <h5 class="m-0 color-black fs-16">
                                                                Time Outs</h5>
                                                        </div>

                                                        <div class="table-responsive">
                                                            <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Editing(iOS only)<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3">Sharing<span class="red">*</span></div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40" type="number" min="1" max="10" required="" v-model="form.count_down">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40" type="number" min="1" max="10" required="" v-model="form.count_down">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Thanks<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3">Props (iOS only)<span class="red">*</span></div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40" type="number" min="1" max="10" required="" v-model="form.count_down">
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <input class="form-control h_40" type="number" min="1" max="10" required="" v-model="form.count_down">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="main-card p-4 mt-4">
                                                        <div class="d-flex align-items-center justify-content-between price-variation-head">
                                                            <h5 class="m-0 color-black fs-16">
                                                                Sharing</h5>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between price-variation-head">
                                                            <h5 class="m-0 color-black fs-16">
                                                                Sharing Methods</h5>
                                                        </div>

                                                        <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                            <div class="form-group border_bottom">
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Email</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket"  v-model="form.front_rear_camera">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">SMS</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket"  v-model="form.camera_exposure" >
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Download</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket" v-model="form.qr_app_protection">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Airdrop</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket" v-model="form.qr_app_protection">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">QR</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket" v-model="form.qr_app_protection">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">General</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket" v-model="form.qr_app_protection">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Whatsapp</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket" v-model="form.qr_app_protection">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">In-app gallery</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket" v-model="form.qr_app_protection">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive">

                                                            <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Email Subject<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3">Default Text (email)<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3 text-right">Text message (SMS)</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <textarea></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <textarea></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <textarea></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive">

                                                            <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Webgallery email subject<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3">Webgallery email message<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3 text-right">Social Share description</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <textarea></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <textarea></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <textarea></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="main-card p-4 mt-4">
                                                        <div class="d-flex align-items-center justify-content-between price-variation-head">
                                                            <h5 class="m-0 color-black fs-16">
                                                                Branding</h5>
                                                        </div>

                                                        <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                            <div class="form-group border_bottom">
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Gallery name</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket"  v-model="form.front_rear_camera">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">App Logo</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket"  v-model="form.camera_exposure" >
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Attract screen(foreground)</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket" v-model="form.qr_app_protection">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">App background</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket" v-model="form.qr_app_protection">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Text and button color</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket" v-model="form.qr_app_protection">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>

                                                                </div>
                                                                <div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
                                                                    <h4 class="fs-14 mb-0 me-auto">Webgallery background</h4>
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" id="is-restrict-total-ticket" v-model="form.qr_app_protection">
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="table-responsive">

                                                            <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Email Subject<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3">Default Text (email)<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3 text-right">Text message (SMS)</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <textarea></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <textarea></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <textarea></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive">

                                                            <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                                                                <div class="table-row table-head no-bg">
                                                                    <div class="table-col fs-14 text-light3">Webgallery email subject<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3">Webgallery email message<span class="red">*</span></div>
                                                                    <div class="table-col fs-14 text-light3 text-right">Social Share description</div>
                                                                </div>
                                                                <div class="table-row ticket-subtype-row">
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <textarea></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <textarea></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-col first-col">
                                                                        <div class="form-group m-0 form-custom-validation">
                                                                            <textarea></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
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
