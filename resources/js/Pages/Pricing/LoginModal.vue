<script setup>
import { useForm } from '@inertiajs/vue3';
import useToaster from '../../composables/useToaster';

const { toastifySuccess, toastifyError } = useToaster();
const emit = defineEmits(['modalClose'])

const props = defineProps({
    showModal: Boolean,
    success: String,
    error: String,
    errors: Object,
    plan: Object
})


// const form = useForm({
//     title: props.viewPlan ? props.viewPlan.title : '',
//     amount: props.viewPlan ? props.viewPlan.amount : '',
//     description: props.viewPlan ? props.viewPlan.description : '',
// });
const submit = () => {
    form.post('/create-plan', {
        preserveScroll: true,
        onSuccess: () => {
            if(props.success){
                document.querySelector('.modal-backdrop').remove();
                emit('modalClose', form);
                toastifySuccess(props.success)
            }else{
                toastifyError(props.error)
            }
        }
    });
}
</script>
<template>
    <div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="trackingModalLabel" aria-hidden="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="trackingModalLabel">Add Tracking</h5>
					<button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
				</div>
				<div class="modal-body">
					<div class="model-content main-form">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="add-tracking-text mt-4">
									Setup conversion tracking to ensure your marketing budget is spent as effectively as possible.																			
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="tracking-tab">
									<div class="tracking-head">
										<ul class="nav nav-tabs border-0 justify-content-between" role="tablist">
											<li class="nav-item tracking-nav-item">
												<a class="nav-link active" id="facebook-tab" data-bs-toggle="tab" href="#facebook" role="tab" aria-controls="facebook" aria-selected="true">
													Facebook
												</a>
											</li>
											<li class="nav-item tracking-nav-item">
												<a class="nav-link" id="google-adwords-tab" data-bs-toggle="tab" href="#google-adwords" role="tab" aria-controls="google-adwords" aria-selected="false">
													Google Adwords
												</a>
											</li>
											<li class="nav-item tracking-nav-item">
												<a class="nav-link" id="google-analytics-tab" data-bs-toggle="tab" href="#google-analytics" role="tab" aria-controls="google-analytics" aria-selected="false">
													Google Analytics
												</a>
											</li>
										</ul>
									</div>
									<div class="tracking-body">
									
									</div>
                                </div>
								<div class="tracking-body">
									<div class="tab-content">
										<div class="tab-pane fade active show" id="facebook" role="tabpanel" aria-labelledby="facebook-tab">
											<div class="form-group mt-4">
												<label class="form-label">Facebook ID*</label>
												<input class="form-control h_40" type="text" placeholder="123456789012345" value="">
												<small>This is the unique id found in the base code of your Facebook Pixel Code</small>
											</div>
											<div class="specific-event">											
												<h4>Exclude Specific Event</h4>
												<div class="form-group main-form mt-4">
													<select class="selectpicker" data-size="5" title="Nothing selected" data-live-search="true">
														<option value="Algeria">No results found</option>
													</select>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="google-adwords" role="tabpanel" aria-labelledby="google-adwords-tab">
											<div class="form-group mt-4">
												<label class="form-label">Conversion ID*</label>
												<input class="form-control h_40" type="text" placeholder="AW-123456789" value="">
												<small>This is the unique id found in the Base Code of your Google Adwords Code</small>
											</div>
											<div class="form-group mt-4">
												<label class="form-label">Code*</label>
												<input class="form-control h_40" type="text" placeholder="xyz1234567895" value="">
											</div>
											<div class="specific-event">											
												<h4>Exclude Specific Event</h4>
												<div class="form-group main-form mt-4">
													<select class="selectpicker" data-size="5" title="Nothing selected" data-live-search="true">
														<option value="Algeria">No results found</option>
													</select>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="google-analytics" role="tabpanel" aria-labelledby="google-analytics-tab">
											<div class="form-group mt-4">
												<label class="form-label">Tracking ID*</label>
												<input class="form-control h_40" type="text" placeholder="UA-000000-2" value="">
												<small>This is the unique id found in the Base Code of your Google Universal Analytics Code</small>
											</div>
											<div class="specific-event">											
												<h4>Exclude Specific Event</h4>
												<div class="form-group main-form mt-4">
													<select class="selectpicker" data-size="5" title="Nothing selected" data-live-search="true">
														<option value="Algeria">No results found</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
					<button type="button" class="main-btn min-width btn-hover h_40">Save</button>
				</div>
			</div>
		</div>
	</div>
</template>
<style>
#plan-btn{
    border-radius: 4px;
    background: #FF4338 !important;
}

#plan-btn:hover {
    color: #000 !important;
    background:#FF4338 !important;
    border: 0;
}
.textarea {
    height: 6rem;
}
</style>