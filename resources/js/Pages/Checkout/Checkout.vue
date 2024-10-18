<script setup>
import { computed,ref } from 'vue'
import { usePage,useForm } from '@inertiajs/vue3';
import useCountry from '../../composables/useCountry';

const props = defineProps({
    cart: Object
});

const { countries } = useCountry();

const page = usePage()

const user = computed(() => page.props.auth.user);
const countriesList = ref(countries());

const form = useForm({
    email: user.value.email,
    firstname: user.value.firstname,
    lastname: user.value.lastname,
    country: user.value.country,
    phone: user.value.phone,
    province: user.value.province,
    city: user.value.city,
    post_code: user.value.post_code,
    address: user.value.address
})

const placeOrder = () => {
    form.post('/place-order')
}
</script>
<template>
    <div class="event-dt-block p-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="main-title checkout-title">
                        <h3>Order Confirmation</h3>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12 col-md-12">
                    <div class="checkout-block">
                        <div class="main-card">
                            <div class="bp-title">
                                <h4>Billing Information</h4>
                            </div>
                            <div class="bp-content bp-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mt-4">
                                            <label class="form-label">First Name*</label>
                                            <input class="form-control h_50" type="text" v-model="form.firstname">																								
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Last Name*</label>
                                            <input class="form-control h_50" type="text" v-model="form.lastname">																								
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Email*</label>
                                            <input class="form-control h_50" type="text" v-model="form.email" disabled>																								
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Address*</label>
                                            <input class="form-control h_50" type="text" v-model="form.address">																								
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group main-form mt-4">
                                            <label class="form-label">Country*</label>
                                            <select v-model="form.country" class="selectpicker form-control h_50" data-size="5" title="Nothing selected" data-live-search="true">
                                               <option :value="''" selected>Select Country</option>
                                                <option v-for="country in countriesList" :value="country">{{country}}</option>																			
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Province*</label>
                                            <input class="form-control h_50" type="text" v-model="form.province">																								
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mt-4">
                                            <label class="form-label">City/Suburb*</label>
                                            <input class="form-control h_50" type="text" v-model="form.city">																								
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Zip/Post Code*</label>
                                            <input class="form-control h_50" type="text" v-model="form.post_code">																								
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12">
                    <div class="main-card order-summary">
                        <div class="bp-title">
                            <h4>Billing information</h4>
                        </div>
                        <div class="order-summary-content p_30">
                            <div class="event-order-dt">
                                <div class="event-thumbnail-img">
                                    <img src="images/event-imgs/img-7.jpg" alt="">
                                </div>
                                <div class="event-order-dt-content">
                                    <h5>Tutorial on Canvas Painting for Beginners</h5>
                                    <!-- <span>Wed, Jun 01, 2022 5:30 AM</span> -->
                                    <!-- <div class="category-type">Online Event</div> -->
                                </div>
                            </div>
                            <div class="order-total-block">
                                <div class="order-total-dt">
                                    <div class="order-text">Total Ticket</div>
                                    <div class="order-number">1</div>
                                </div>
                                <div class="order-total-dt">
                                    <div class="order-text">Sub Total</div>
                                    <div class="order-number">R {{ cart.amount }}</div>
                                </div>
                                <div class="divider-line"></div>
                                <div class="order-total-dt">
                                    <div class="order-text">Total</div>
                                    <div class="order-number ttl-clr">R {{ cart.amount }}</div>
                                </div>
                            </div>
                            <div class="confirmation-btn">
                                <button @click="placeOrder" class="main-btn btn-hover h_50 w-100 mt-5" type="button">Confirm & Pay</button>
                                <!-- <span>Price is inclusive of all applicable GST</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>