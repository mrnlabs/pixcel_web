<script setup>
import useToaster  from '../../composables/useToaster';
import { ref } from 'vue';
import { router,useForm } from '@inertiajs/vue3';

const { toastifySuccess } = useToaster();

const props =defineProps({
    cart: Object,
    errors: Object,
    success: String,
    error: String,

    loginSuccess: String,//for login
})

let hasCart = ref(false);
let showModal = ref(false);
let redirecting = ref(false);

const form = useForm({
    email: '',
    password: '',
    redirectTo: '',
});

router.on('navigate', (event) => {
    form.redirectTo = event.detail.page.url;
})

if(props.cart){
    toastifySuccess(`${props.cart.title} added to cart`);
}
if(localStorage.getItem('pixcel')){
    hasCart.value = true;
}else{
    hasCart.value = false;
}
const removeFromCart = (title) => {    
    if(!localStorage.getItem('pixcel')){return;}
    localStorage.removeItem('pixcel');
    hasCart.value = false;
        toastifySuccess(`${title} removed from cart`);
   
}

const returnToShop = () => {
    router.get('/pricing');
}

const redirectToCheckOut = () => {
    router.get(`/checkout?id=${localStorage.getItem('pixcel')}`);
}

const login = () => {
    form.post('/login', {
        onSuccess: () => {
            if(props.success){
                document.querySelector('.modal-backdrop').remove();
                showModal.value = false;
                toastifySuccess(props.success);
                redirecting.value = true
                setTimeout(() => {
                    router.get(`/checkout?id=${localStorage.getItem('pixcel')}`);
                }, 2000)
            }else if(props.error){
                toastifyError(props.error)
            }
        }
    })
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
					<div :class="hasCart ? 'col-xl-8' : 'col-xl-12'" class=" col-lg-12 col-md-12">
						<div class="checkout-block">
							<div class="main-card">
								<div class="bp-title">
									<h4>Billing information</h4>
								</div>
								<div class="bp-content bp-form">
									<div class="table-card mt-4">
                                        <div class="main-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">PRODUCT</th>
                                                            <th scope="col">PRICE</th>
                                                            <th scope="col">SUBTOTAL</th>
                                                            <th scope="col">REMOVE</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr v-if="hasCart">										
                                                            <td>{{ cart.title }}</td>	
                                                            <td>R {{ cart.amount }}</td>	
                                                            <td>R {{ cart.amount }}</td>	
                                                            <td><i @click="removeFromCart(cart.title)" class="fa-solid fa-trash-alt text-danger fs-5 text-center cursor-pointer"></i></td>
                                                        </tr>
                                                        <tr v-else>
                                                            <td></td>
                                                            <td></td>	
                                                            <td>
                                                                <p class="text-danger">Your cart is empty</p>
                                                                <button @click="returnToShop"  class="apply-btn btn-hover return-btn" type="button">Return To Shop</button>
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
					<div v-if="hasCart" class="col-xl-4 col-lg-12 col-md-12">
						<div class="main-card order-summary">
							<div class="bp-title">
								<h4>Cart Totals</h4>
							</div>
							<div class="order-summary-content p_30">
								<div class="order-total-block">
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
									<button v-if="$page.props.auth.user" :disabled="!hasCart || redirecting" class="main-btn btn-hover h_50 w-100 mt-5" 
                                        type="button" 
                                        @click="redirectToCheckOut">
                                        {{ redirecting ? 'Redirecting...' : 'Proceed To Checkout' }}
                                    </button>

                                    <button v-else @click="showModal=true" data-bs-toggle="modal" data-bs-target="#login-modal" 
                                       :disabled="!hasCart || redirecting" class="main-btn btn-hover h_50 w-100 mt-5" 
                                        type="button">
                                        {{ redirecting ? 'Redirecting...' : 'Proceed To Checkout' }}
                                    </button>
						
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
      

        <div v-if="showModal" class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="trackingModalLabel" aria-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="trackingModalLabel">Login</h5>
                    </div>
                    <div class="modal-body">
                        <div class="model-content main-form">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="tracking-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="facebook" role="tabpanel" aria-labelledby="facebook-tab">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Email*</label>
                                                    <input required class="form-control h_40" type="text" v-model="form.email">
                                                    <small v-if="errors.email" class="text-danger">{{ errors.email }}</small>
                                                </div>
                                                <div class="form-group mt-1">
                                                    <label class="form-label">Password*</label>
                                                    <input required class="form-control h_40" type="password" v-model="form.password">
                                                    <small v-if="errors.password" class="text-danger">{{ errors.password }}</small>
                                                </div>
                                                <button  @click="login" :disabled="!hasCart" class="main-btn btn-hover h_50 w-100 mt-5" 
                                                    type="button">
                                                    <div v-if="form.processing" class="spinner-border" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                        {{ form.processing ? 'Loading...' : 'Login' }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button data-bs-dismiss="modal" type="button" class="main-btn min-width btn-hover h_40 modal-close">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        
</template>
<style>
.return-btn {
    position: inherit;
    background: #045cc7;
}
.modal-close{
    background: #FF6666;
}

.modal-close:hover{
    background: #FF6666;
}
</style>