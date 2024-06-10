<script setup>
import Editor from '@tinymce/tinymce-vue';
import { useForm } from '@inertiajs/vue3';
import useToaster from '../../composables/useToaster';

const { toastifySuccess, toastifyError } = useToaster();
const emit = defineEmits(['modalClose'])

const props = defineProps({
    showModal: Boolean,
    success: String,
    error: String,
    errors: Object,
    viewPlan: Object
})

const onInputFocus = (id) => {
    if(!viewPlan){
        document.querySelector(`#${id}`).removeAttribute('placeholder')
    }
    
}
const form = useForm({
    title: props.viewPlan ? props.viewPlan.title : '',
    amount: props.viewPlan ? props.viewPlan.amount : '',
    description: props.viewPlan ? props.viewPlan.description : '',
});
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
     <div  class="modal modal-lg fade" id="create-plan" tabindex="-1" aria-labelledby="bankModalLabel" aria-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bankModalLabel">{{ viewPlan ? 'Edit' : 'Create' }} Plan</h5>
                    </div>
                    <div class="modal-body">
                        <div class="model-content main-form">
                            <div class="row">{{ viewPlan }}
                                <form @submit="submit">
									<div class="form-group">
										<label class="form-label">Title*</label>
										<input class="form-control h_50" 
                                        @focus="onInputFocus('title')"
                                        id="title" 
                                        required                                        
                                        type="text" placeholder="E.g 1 WEEK SUBSCRIPTION" v-model="form.title">	
                                        <div class="text-danger" v-if="errors.title">{{ errors.title }}</div>																							
									</div>

                                    <div class="row mt-1">
										<div class="col-lg-12 col-md-12">
											<div class="form-group mt-1">
												<label class="form-label">Amount*</label>
												<input class="form-control h_50" type="text" required v-model="form.amount">
                                                <div class="text-danger" v-if="errors.amount">{{ errors.amount }}</div>																								
											</div>
										</div>
									</div>

                                    <div class="form-group mt-1">
										<div class="field-password">
											<label class="form-label">Description*</label>
										</div>
										<div class="loc-group position-relative">
											<!-- <textarea class="form-control h_50 textarea" v-model="form.description"></textarea> -->
                                            <Editor
      api-key="9l6lug40mtg10elrk1ncpkmwgmd9gmu8xggx0h2i8ad8xt82"
      :init="{
        toolbar_mode: 'sliding',
        plugins: 'anchor autolink charmap link lists media visualblocks ',
        toolbar: 'undo redo | blocks fontsize | bold italic underline strikethrough | link  | align lineheight | numlist bullist indent outdent | removeformat',
      }"
      initial-value=""
      v-model="form.description"
    />
                                            <div class="text-danger" v-if="errors.description">{{ errors.description }}</div>
										</div>
									</div>
									<button class="main-btn btn-hover w-100 mt-4" type="submit">
                                       {{ viewPlan ? 'Update' : 'Save' }}                                      
                                    </button>
								</form>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class=" btn btn-xs co-main-btn min-width h_40" id="plan-btn"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
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