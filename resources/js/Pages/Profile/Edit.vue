<script setup >
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
  import {Head, useForm, usePage} from '@inertiajs/vue3';
  import imageProfile from '../../images/profile-imgs/img-13.jpg';
  import imageCover from '../../images/banners/hero-cover-01.jpg';
  import Input from './profile-comps/Input.vue';
  import useToaster from '../../composables/useToaster';  
  import { computed,ref } from 'vue'

const page = usePage()

const file_path = computed(() => page.props.photo); 

   const { toastifySuccess, toastifyError } = useToaster();
   
   let file =  imageProfile;
  const props = defineProps({
    profile: Object,
    isMyProfile: Boolean,
    success: String,
    error: String,
    errors: Object
  });

  const fileUploadForm = useForm({
    image: null
  })

  const form = useForm({
    id: props.profile.id,
    firstname: props.profile.firstname,
    lastname: props.profile.lastname,
    display_name: props.profile.display_name,
    company_name: props.profile.company_name,
    phone: props.profile.phone,
    address: props.profile.address,
    address2: props.profile.address2,
    city: props.profile.city,
    post_code: props.profile.post_code,
    province: props.profile.province,
    country: props.profile.country,
    email: props.profile.email,
  })

  const updateProfile = () => {
    form.patch('/profile', {
      preserveScroll: true,
      onSuccess: () => {
        if(props.success){
          toastifySuccess(props.success)
        }else if(props.error){
          toastifyError(props.error)
        }
      }
    });
  }

  let showSaveBtn = ref(false);
  
  const onFileChange = (event) => {
    props.profile.photo = null;
    let myFile = event.target.files[0];
    if (myFile) {
        file = URL.createObjectURL(myFile);
        fileUploadForm.image = event.target.files[0];
        showSaveBtn.value = true;
      }
  }
  const updatePicture = (type) => {
      fileUploadForm.post(`/update-profile-picture/${type}`, {
        preserveScroll: true,
        onSuccess: () => {
          if(props.success){
            toastifySuccess(props.success)
            showSaveBtn.value = false;
          }else if(props.error){
            toastifyError(props.error)
          }
        }
      })
  }
</script>
<template>
  <Head title="Profile" />
  <AuthenticatedLayout>
    
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
                      <label for="cover-img">
                        <i class="fa-solid fa-panorama me-3"></i>Change Image </label>
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
                      <img :src="profile?.photo ? file_path : file" alt="">
                      <div class="avatar-img-btn">
                        <input @change="onFileChange" type="file" id="avatar-img">
                        <label for="avatar-img">
                          <i class="fa-solid fa-camera"></i>
                        </label>
                      </div>
                      
                    </div>
                    <div class="user-dts">
                        <button v-if="showSaveBtn" type="button" @click="updatePicture('profile')" class="btn btn-success btn-xs">Save</button>
                      <h4 class="user-name">{{ profile.firstname }} {{ profile.lastname }}
                        <span class="verify-badge">
                          <i class="fa-solid fa-circle-check"></i>
                        </span>
                      </h4>
                      <span class="user-email">{{ profile.email }}</span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-12"><div class="profile-setting p-4">
                    <div class="about-details">
                    <div class="about-step">
                        <div class="table-responsive">
                        <div class="div-base-table border-0 full-width small-table ticket-subtype-table">
                            <div class="table-row table-head no-bg">
                            <div class="table-col fs-14 text-light3"> First Name <span class="red">*</span>
                            </div>
                            <div class="table-col fs-14 text-light3"> Last name <span class="red">*</span>
                            </div>
                            <div class="table-col fs-14 text-light3 text-right"> Display name</div>
                            </div>
                            <div class="table-row ticket-subtype-row">
                            <Input v-model="form.firstname" type="text" isRequired="false"/>
                            <Input v-model="form.lastname"/>
                            <Input v-model="form.display_name"/>
                            </div>
                        </div>
                        <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                            <div class="table-row table-head no-bg">
                            <div class="table-col fs-14 text-light3"> Email <span class="red">*</span>
                            </div>
                            <div class="table-col fs-14 text-light3"> Phone <span class="red">*</span>
                            </div>
                            <div class="table-col fs-14 text-light3 text-right"> Address</div>
                            </div>
                            <div class="table-row ticket-subtype-row">
                            <Input v-model="form.email"/>
                            <Input v-model="form.phone"/>
                            <Input v-model="form.address"/>
                            </div>
                        </div>


                        <div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
                            <div class="table-row table-head no-bg">
                            <div class="table-col fs-14 text-light3"> Country <span class="red">*</span>
                            </div>
                            <div class="table-col fs-14 text-light3"> Province <span class="red">*</span>
                            </div>
                            <div class="table-col fs-14 text-light3 text-right"> Town/City</div>
                            </div>
                            <div class="table-row ticket-subtype-row">
                                <Input v-model="form.country"/>
                                <Input v-model="form.province"/>
                                <Input v-model="form.city"/>
                            </div>
                        </div>

                        <button @click="updateProfile" v-if="isMyProfile"
                        :disabled="form.processing"
                         class="main-btn btn-hover w-100 mt-5" type="button">
                            <div v-if="form.processing" class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                            </div>
                                Update
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

    
  </AuthenticatedLayout>
</template>
<style>
.profile-banner {
  margin-left: 20rem;
}
</style>