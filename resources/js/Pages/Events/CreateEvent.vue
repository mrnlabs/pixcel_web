<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";
import Breadcrumb from "@/Components/Breadcrumb.vue";
import EventInput from "./EventInput.vue";
import ColorPicker from "primevue/colorpicker";
import { reactive, ref } from "vue";

const countries = reactive([
    "Angola", "Botswana", "Lesotho", "Malawi", "Mozambique", "Namibia", "South Africa", "Swatini", "Zambia", "Zimbabwe"
])

const props = defineProps({
    e_vent: Object,
    errors: Object,
    success: String,
    error: String
})

const form = useForm({
    id: props.e_vent?.id ? props.e_vent.id : '',
    logo:null,
    attractForeground: null,
    text_color: '#000000',
    web_gallery_background: null,
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
    slomo_boomerang: props.e_vent?.slomo_boomerang ? props.e_vent.slomo_boomerang : 0,
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


let audioileName = ref(null);
let logoFileName = ref(null);
let attractForegroundFileName = ref(null);
let webGalleryBackgroundFileName = ref(null);
function handleFileUpload(event,type) {
    const file = event.target.files[0];
    if(type == 'audio') {
        form.add_audio_file = file;
        audioileName.value = file.name
    }else if(type == 'logo') {
        form.logo = file;
        logoFileName.value = file.name
    }else if(type == 'attract-foreground') {
        form.attractForeground = file;
        attractForegroundFileName.value = file.name
    }else if(type == 'web-gallery-background') {
        form.web_gallery_background = file;
        webGalleryBackgroundFileName.value = file.name
    }
   
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
                        <div class="mb-3 row mt-4">                            
                             <div class="col-md-3">
                                <label for="firstName" class="form-label">Name of the Event</label>
                                  <EventInput 
                                    class="col-md-3" 
                                    placeholder="Event Name" 
                                    type="text"
                                    :required="true"
                                    v-model="form.name"
                                    />
                              </div>


                            <div class="col-md-3">
                              <label for="firstName" class="form-label">Country</label>
                              <select class="selectpicker form-control"
                                data-size="5" data-live-search="true"
                                v-model="form.country">
                                <option :disabled="true" :selected="true" :value="''">Choose Country...</option>
                                <option v-for="country in countries" :key="country" :value="country">{{country}}</option>
                            </select>
                            </div>
                            <div class="col-md-3">
                              <label for="lastName" class="form-label">Language</label>
                                 <EventInput 
                                    class="" 
                                    placeholder="Language" 
                                    type="text"
                                    :required="true"
                                    v-model="form.language"
                                    />
                            </div>
                            <div class="col-md-3">
                                <label for="lastName" class="form-label">Countdown </label>
                                <EventInput 
                                    class="col-md-3" 
                                    placeholder="Countdown" 
                                    type="text"
                                    :required="true"
                                    v-model="form.count_down"
                                    />
                              </div>
                           
                          </div>
                         
                         
                          <!-- <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" rows="3" placeholder="Address ..."></textarea>
                          </div> -->
                          <div class="container mt-2">
                            <div class="card">
                              <div class="card-body d-flex justify-content-start align-items-center">
                                <div class="form-check form-switch custom-switch">
                                  <input v-model="form.beep_sound" class="form-check-input text-primary" type="checkbox" id="beep-sounds" >
                                  <label class="form-check-label switch-label" for="beep-sounds">	Beep sounds *</label>
                                </div>
                                <div class="form-check form-switch custom-switch">
                                  <input v-model="form.mirror_overlay" class="form-check-input text-success" type="checkbox" id="mirror_overlay" >
                                  <label class="form-check-label switch-label" for="mirror_overlay">Mirror overlay preview</label>
                                </div>
                                <div class="form-check form-switch custom-switch">
                                  <input v-model="form.front_or_rear_camera" class="form-check-input text-info" type="checkbox" id="front_or_rear_camera" >
                                  <label class="form-check-label switch-label" for="front_or_rear_camera">Front or rear camera</label>
                                </div>
                                <div class="form-check form-switch custom-switch">
                                  <input v-model="form.camera_exposure_menu" class="form-check-input text-warning" type="checkbox" id="camera_exposure_menu" >
                                  <label class="form-check-label switch-label" for="camera_exposure_menu">Camera exposure menu</label>
                                </div>
                                <div class="form-check form-switch custom-switch">
                                  <input v-model="form.qr_app_protection" class="form-check-input text-dark" type="checkbox" id="qr_app_protection" >
                                  <label class="form-check-label switch-label" for="qr_app_protection">QR app protection</label>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="container mt-5">
                            <h2 class="mb-3">Functions</h2>
                            <div class="card">
                              <div class="card-body d-flex justify-content-start align-items-center">
                                <div class="form-check form-switch custom-switch">
                                  <input v-model="form.boomerang" class="form-check-input text-primary" type="checkbox" id="boomerang" >
                                  <label class="form-check-label switch-label" for="boomerang">	Boomerang</label>
                                </div>
                                <div class="form-check form-switch custom-switch">
                                  <input v-model="form.videos" class="form-check-input text-success" type="checkbox" id="videoss" >
                                  <label class="form-check-label switch-label" for="videoss">Videos</label>
                                </div>
                                <div class="form-check form-switch custom-switch">
                                  <input v-model="form.slomo" class="form-check-input text-info" type="checkbox" id="slomo" >
                                  <label class="form-check-label switch-label" for="slomo">Slomo</label>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="mb-3 row mt-4">
                            
                            <div class="col-md-2">
                                <label for="firstName" class="form-label">Boomerang repeats *</label>
                                <EventInput 
                                      class="col-md-3" 
                                      placeholder="Boomerang repeats" 
                                      type="number"
                                      min="0"
                                      :required="true"
                                      v-model="form.boomerang_repeats"
                                      />
                              </div>
                              <div class="col-md-2">
                                <label for="firstName" class="form-label">Boomerang speeds *</label>
                                <EventInput 
                                      class="col-md-3" 
                                      placeholder="Boomerang speeds" 
                                      type="number"
                                      min="0"
                                      :required="true"
                                      v-model="form.boomerang_speed"
                                      />
                              </div>
                              <div class="col-md-2">
                                <label for="firstName" class="form-label">Boomerang bounce duration</label>
                                <EventInput 
                                      class="col-md-3" 
                                      placeholder="Boomerang bounce duration" 
                                      type="number"
                                      min="0"
                                      :required="true"
                                      v-model="form.boomerang_bounce"
                                      />
                              </div>
                              <div class="col-md-2">
                                <label for="firstName" class="form-label">Slomo recording time*</label>
                                <EventInput 
                                      class="col-md-3" 
                                      placeholder="Slomo recording time" 
                                      type="number"
                                      min="0"
                                      :required="true"
                                      v-model="form.slomo_recording_time"
                                      />
                              </div>
                              <div class="col-md-2">
                                <label for="firstName" class="form-label">Slomo Boomerang*</label>
                                <select class="selectpicker form-control"
                                  data-size="5" data-live-search="true"
                                  v-model="form.slomo_boomerang">
                                  <option value="0">No</option>
                                  <option value="1">Yes</option>
                              </select>
                              </div>
                              <div class="col-md-2">
                                <label for="firstName" class="form-label">Slomo speed</label>
                                <EventInput 
                                      class="col-md-3" 
                                      placeholder="Slomo recording time" 
                                      type="number"
                                      min="0"
                                      :required="true"
                                      v-model="form.speed"
                                      />
                              </div>
                              <div class="col-md-6">
                                <input type="file" hidden id="audio-file" @change="handleFileUpload($event,'audio')">
                              <label for="audio-file" class="main-btn btn-hover h_50 w-100 mt-5">
                                <i class="fa-solid fa-paperclip rotate-icon me-3"></i>
                                Add audio file</label>
                                <h4 class="text-success">{{audioileName}}</h4>
                              </div>
                              
                          
                          </div>

                          <!--====================================================== Time Outs====================================== -->
                          <div class="mb-3 row mt-4">
                            <h2 class="mb-3">Time Outs</h2>
                            <div class="col-md-3">
                                <label for="firstName" class="form-label">Editing(iOS only)</label>
                                <EventInput 
                                      class="col-md-3" 
                                      placeholder="Editing(iOS only)" 
                                      type="number"
                                      min="0"
                                      :required="true"
                                      v-model="form.editing"
                                      />
                              </div>
                              <div class="col-md-3">
                                <label for="firstName" class="form-label">Sharing</label>
                                <EventInput 
                                      class="col-md-3" 
                                      placeholder="Sharing" 
                                      type="number"
                                      min="0"
                                      :required="true"
                                      v-model="form.sharing"
                                      />
                              </div>
                              <div class="col-md-3">
                                <label for="firstName" class="form-label">Thanks</label>
                                <EventInput 
                                      class="col-md-3" 
                                      placeholder="Thanks" 
                                      type="number"
                                      min="0"
                                      :required="true"
                                      v-model="form.thanks_message"
                                      />
                              </div>
                              <div class="col-md-3">
                                <label for="firstName" class="form-label">Props (iOS only)*</label>
                                <EventInput 
                                      class="col-md-3" 
                                      placeholder="Slomo recording time" 
                                      type="number"
                                      min="0"
                                      :required="true"
                                      v-model="form.props"
                                      />
                              </div>


                              <div class="container mt-5">
                                <h2 class="mb-3">Sharing Methods</h2>
                                <div class="card">
                                  <div class="card-body d-flex justify-content-start align-items-center">
                                    <div class="form-check form-switch custom-switch">
                                      <input v-model="form.sharing_method.email" class="form-check-input text-primary" type="checkbox" id="sharing_method-email" >
                                      <label class="form-check-label switch-label" for="sharing_method-email">	Email</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch">
                                      <input v-model="form.sharing_method.sms" class="form-check-input text-success" type="checkbox" id="sms" >
                                      <label class="form-check-label switch-label" for="sms">SMS</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch">
                                      <input v-model="form.sharing_method.download" class="form-check-input text-info" type="checkbox" id="download" >
                                      <label class="form-check-label switch-label" for="download">Download</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch">
                                      <input v-model="form.sharing_method.airdrop" class="form-check-input text-warning" type="checkbox" id="airdrop" >
                                      <label class="form-check-label switch-label" for="airdrop">Airdrop</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch">
                                      <input v-model="form.sharing_method.qr" class="form-check-input text-dark" type="checkbox" id="qr" >
                                      <label class="form-check-label switch-label" for="qr">QR</label>
                                    </div>
                                     <div class="form-check form-switch custom-switch">
                                      <input v-model="form.sharing_method.general" class="form-check-input text-primary" type="checkbox" id="general" >
                                      <label class="form-check-label switch-label" for="general">General</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch">
                                      <input v-model="form.sharing_method.whatsapp" role="switch" class="form-check-input text-info" type="checkbox" id="whatsapp" >
                                      <label class="form-check-label switch-label" for="whatsapp">Whatsapp</label>
                                    </div>
                                    <div class="form-check form-switch custom-switch">
                                        <input v-model="form.sharing_method.gallery" role="switch" class="form-check-input text-success" type="checkbox" id="sharing_method-gallery" >
                                        <label class="form-check-label switch-label" for="sharing_method-gallery">In-app gallery</label>
                                      </div>
                                  </div>
                                </div>
                              </div>

                              <div class="container mt-5">
                                <h5 class="mb-3">Sharing Methods</h5>
                                <div class="card">
                                  <div class="card-body row">
                                    <div class="col-md-4">
                                        <label for="firstName" class="form-label">Email Subject*</label>
                                        <textarea v-model="form.email_subject" ></textarea>
                                      </div>
                                      <div class="col-md-4">
                                        <label for="firstName" class="form-label">Default Text (email)*</label>
                                        <textarea v-model="form.text_email" ></textarea>
                                      </div>
                                      <div class="col-md-4">
                                        <label for="firstName" class="form-label">Text message (SMS)</label>
                                        <textarea v-model="form.text_message" ></textarea>
                                      </div>
                                  </div>

                                  <div class="card-body row">
                                    <div class="col-md-4">
                                        <label for="firstName" class="form-label">Web Gallery Email Subject*</label>
                                        <textarea v-model="form.webgallery_email_subject" ></textarea>
                                      </div>
                                      <div class="col-md-4">
                                        <label for="firstName" class="form-label">Web Gallery Email Message*</label>
                                        <textarea v-model="form.webgallery_email_message" ></textarea>
                                      </div>
                                      <div class="col-md-4">
                                        <label for="firstName" class="form-label">Social Share description</label>
                                        <textarea v-model="form.social_share_description" ></textarea>
                                      </div>
                                  </div>
                                </div>
                              </div>

                              <div class="container mt-5">
                                <h2 class="mb-3">Branding</h2>
                                <div class="card">
                                  <div class="card-body row">
                                    <div class="col-md-4">
                                        <label for="firstName" class="form-label">Gallery Name*</label>
                                        <EventInput 
                                      class="col-md-3" 
                                      placeholder="Company Name " 
                                      type="text"
                                      :required="true"
                                      v-model="form.gallery"
                                      />
                                      </div>
                                      <div class="col-md-4">
                                        <input type="file" hidden id="logo-file" @change="handleFileUpload($event, 'logo')" accept="image/*" >
                                        <label for="logo-file" class="main-btn btn-hover h_50 w-100 mt-6">
                                            <i class="fa-solid fa-paperclip rotate-icon me-3"></i>
                                            App Logo</label>
                                            <h5 class="text-success">{{logoFileName}}</h5>
                                      </div>
                                      <div class="col-md-4">
                                        <input type="file" hidden id="attract-foreground" @change="handleFileUpload($event, 'attract-foreground')" accept="image/*" >
                                        <label for="attract-foreground" class="main-btn btn-hover h_50 w-100 mt-6">
                                            <i class="fa-solid fa-paperclip rotate-icon me-3"></i>
                                            Attract screen (foreground) </label>
                                            <h5 class="text-success">{{attractForegroundFileName}}</h5>
                                      </div>
                                      <!-- <div class="col-md-4">
                                        <label for="firstName" class="form-label">Text message (SMS)</label>
                                        <textarea v-model="form.text_message" ></textarea>
                                      </div> -->
                                  </div>

                                  <div class="card-body row">
                                    <div class="col-md-4">
                                        <label for="firstName" class="form-label">Text and button color</label>
                                        <ColorPicker v-model="form.text_color" inline  />
                                        <div>#{{ form.text_color }}</div>
                                      </div>
                                      <div class="col-md-4">
                                        <input type="file" hidden id="web-gallery-background" @change="handleFileUpload($event, 'web-gallery-background')" accept="image/*" >
                                        <label for="web-gallery-background" class="main-btn btn-hover h_50 w-100 mt-6">
                                            <i class="fa-solid fa-paperclip rotate-icon me-3"></i>
                                            Webgallery background  </label>
                                            <h5 class="text-success">{{webGalleryBackgroundFileName}}</h5>
                                      </div>
                                  </div>
                                </div>
                              </div>
                              
                              <button @click="submit" class="main-btn btn-submit h_50 w-100" type="button">Submit</button>
                          </div>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<style>
.switch-label {
    margin-right: 50px;
  }
  .custom-switch {
    margin-right: 20px;
  }
   .text-success:checked {
    background-color: #15ca20 !important;
    border-color: #15ca20 !important;
    width:2.2em !important;
}
.mt-6{
    margin-top: 2rem !important;
}
.btn-submit{
    background: rgb(0,92,200);
background: linear-gradient(90deg, rgba(0,92,200,1) 25%, rgba(25,115,222,1) 71%);
}
 .text-primary:checked {
    background-color: #008cff !important;
    border-color: #008cff !important;
    width:2.2em !important;
}

.text-info:checked {
    width:2.2em !important;
    background-color: #0dcaf0 !important;
    border: #0dcaf0 !important;
}
.text-warning:checked {
    width:2.2em !important;
    background-color: #ffc107 !important;
    border: #ffc107 !important;
}
.text-dark:checked {
    width:2.2em !important;
    background-color: #212529 !important;
    border: #212529 !important;
}
.text-secondary:checked {
    width:2.2em !important;
    background-color: #212529 !important;
    border: #212529 !important;
}


</style>
