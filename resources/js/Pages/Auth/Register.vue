<script>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Link } from '@inertiajs/vue3';
import { defineComponent, ref, computed } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

export default defineComponent({
    data() {
        return {
            form: {
                firstname: '',
                lastname: '',
                email: '',
                phone: '',
                password: '',
                password_confirmation: '',
            },
            showPassword: false,
            showConfirmPassword: false,
        }
    },
    methods: {
        submit() {
            this.$inertia.post('/register', this.form)
        },
        togglePasswordVisibility() {
            this.showPassword = !this.showPassword;
        },
        toggleConfirmPasswordVisibility() {
            this.showConfirmPassword = !this.showConfirmPassword;
        }
    },

    computed: {
        passwordFieldType() {
            return this.showPassword ? 'text' : 'password';
        },
        confirmPasswordFieldType() {
            return this.showConfirmPassword ? 'text' : 'password';
        },
        togglePasswordIconClass() {
            return this.showPassword ? 'fas fa-eye-slash' : 'fas fa-eye';
        },
        toggleConfirmPasswordIconClass() {
            return this.showConfirmPassword ? 'fas fa-eye-slash' : 'fas fa-eye';
        }
    },
    components: {
        ApplicationLogo,
        Link,
        GuestLayout
    }
});

</script>

<template>
    <GuestLayout>

        <Head title="Register" />
        <div class="form-wrapper">
            <div class="app-form">
                <div class="app-form-sidebar">
                    <!-- <div class="sidebar-sign-logo">
                            <ApplicationLogo  />
                        </div> -->
                    <div class="sign_sidebar_text">
                        <h1>The Easiest Way to Create Events and Sell More Tickets Online</h1>
                    </div>
                </div>
                <div class="app-form-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-md-10">
                                <div class="app-top-items">
                                    <a href="index.html">
                                        <div class="sign-logo" id="logo">
                                            <img src="images/logo.svg" alt="">
                                            <img class="logo-inverse" src="images/dark-logo.svg" alt="">
                                        </div>
                                    </a>
                                    <div class="app-top-right-link">
                                        Already have an account?
                                        <Link class="sidebar-register-link" href="/login">Sign In </Link>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-7">
                                <div class="registration">
                                    <form @submit.prevent="submit">
                                        <h2 class="registration-title">Sign up to Pixcel360</h2>
                                        <div class="row mt-3">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">First Name*</label>
                                                    <input class="form-control h_50" type="text" placeholder=""
                                                        v-model="form.firstname">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Last Name*</label>
                                                    <input class="form-control h_50" type="text" placeholder=""
                                                        v-model="form.lastname">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Your Email*</label>
                                                    <input class="form-control h_50" type="email" placeholder=""
                                                        v-model="form.email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Your Phone</label>
                                                    <input class="form-control h_50" type="tel" placeholder=""
                                                        v-model="form.phone">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group mt-4">
                                                    <div class="field-password">
                                                        <label class="form-label">Password*</label>
                                                    </div>
                                                    <div class="loc-group position-relative">
                                                        <input class="form-control h_50" type="password" placeholder=""
                                                            v-model="form.password">
                                                        <span class="pass-show-eye" @click="togglePasswordVisibility">
                                                            <i :class="togglePasswordIconClass"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group mt-4">
                                                    <div class="field-password">
                                                        <label class="form-label">Confirm Password*</label>
                                                    </div>
                                                    <div class="loc-group position-relative">
                                                        <input class="form-control h_50" type="password" placeholder=""
                                                            v-model="form.password_confirmation">
                                                        <span class="pass-show-eye"
                                                            @click="toggleConfirmPasswordVisibility">
                                                            <i :class="toggleConfirmPasswordIconClass"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <button class="main-btn btn-hover w-100 mt-4" type="submit">Sign
                                                        Up</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="agree-text">
                                        By clicking "Sign up", you agree to Pixcel360 <a href="#">Terms & Conditions</a>
                                        and have read the <a href="#">Privacy Policy</a>.
                                    </div>

                                    <div class="new-sign-link">
                                        Already have an account?
                                        <Link class="signup-link" href="/login">Sign In</Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright-footer">
                        © 2024, Pixcel360. All rights reserved. Powered by MRN Labs
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
