<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, router } from "@inertiajs/vue3";
import Breadcrumb from '@/Components/Breadcrumb.vue';
import moment from 'moment';
import useToaster from '../../composables/useToaster';
import { ref } from 'vue';

const { toastifySuccess, toastifyError } = useToaster();

const props = defineProps({
    events: Array,
	success: String,
	error: String
})

const formatDate = (date) => {
	if(!date){
		return '';
	}
	return moment(date).format('DD-MM-YYYY');
}

const deleteEvent = (event) => {
	if (confirm(`Are you sure you want to delete ${event.name} event?`)) {
		router.delete(`/event/${event.id}`, {
			preserveScroll: true,
			onSuccess: () => {
				if(props.success){
                   toastifySuccess(props.success)
				}else if(props.error){
				   toastifyError(props.error)
				}
			},
			onError: () => {
				toast.error('Something went wrong!');
			}
		});
	}
}

const duplicateEvent = (event) => {
	if (confirm(`Are you sure you want to duplicate ${event.name} event?`)) {
		router.post(`/duplicate-event/${event.id}`, {
			preserveScroll: true,
			onSuccess: () => {
				if(props.success){
                   toastifySuccess(props.success)
				}else if(props.error){
				   toastifyError(props.error)
				}
			},
		});
	}
}

const showModal = ref(true)
const editEvent = ref(null)

const showQrCode = (event) => {
	editEvent.value = null;
	editEvent.value = event
}
const updateEvent = (event) => {
	router.post(`/edit-event/${event.id}`, {
		preserveScroll: true,
		onSuccess: () => {
			if(props.success){
			   toastifySuccess(props.success)
			}else if(props.error){
			   toastifyError(props.error)
			}
		},
	});
}


</script>

<template>
    <Head title="My Events" />
    <AuthenticatedLayout>
        <!-- Left Sidebar Start -->
			<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper wrapper-body">
		<div class="dashboard-body">
			<div class="container-fluid">
				<div class="row">
					<Breadcrumb title="My Events" icon="fa-chart-pie"/>
					<div class="col-md-12">
						<div class="main-card">
							<div class="dashboard-wrap-content pt-4 pe-4 pb-4">

								<div class="d-md-flex flex-wrap align-items-center">
									<div class="dashboard-date-wrap">
										<div class="form-group">
											<div class="relative-input position-relative">
												<input class="form-control h_40" type="text" placeholder="Search by name" value="">
												<i class="uil uil-search"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="event-list">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="orders-tab" role="tabpanel">
									<div class="table-card mt-4">
										<div class="main-table">
											<div class="table-responsive">
												<table class="table">
													<thead class="thead-dark">
														<tr>
															<th scope="col">NR.</th>
															<th scope="col">NAME</th>
															<th scope="col">CREATED</th>
															<th scope="col">STATUS</th>
															<th scope="col">EXPIRES</th>
															<th scope="col" class="w-10">QR CODE</th>
															<th scope="col" class="w-10">GALLERY</th>
                                                            <th scope="col" class="w-10">DATA</th>
                                                            <th scope="col" class="w-10">OVERLAYS</th>
                                                            <th scope="col" class="w-10">MANAGE</th>
														</tr>
													</thead>
													<tbody>
														<tr v-for="event in events" :key="event.id">
															<td>{{ event.id }}</td>
															<td>{{ event.name }}</td>
															<td><a href="#" target="_blank">{{ formatDate(event.created_at) }}</a></td>
															<td>Pending</td>
															<td>{{ event.expires_at }}</td>
                                                            <td>
																<i @click="showQrCode(event)" class="fa-solid fa-qrcode cursor-pointer fs-1" data-bs-toggle="modal" data-bs-target="#qrModal"></i>
															</td>
                                                            <td>
																<!-- co-main-btn -->
                                                                <Link :href="`/event-gallery/${event.id}`" style="padding-top: 0.2rem;"lass="w-100 text-center h_40 d-inline-block ptc-">
                                                                    <i class="fa-solid fa-th fs-1"></i>
                                                                </Link>
                                                            </td>
                                                            <td class="w-10"><i class="fa-solid fa-table fs-1"></i></td>
                                                            <td class="w-10"><i class="fa-solid fa-images fs-1"></i></td>
                                                            <td class="w-10">

<div class="d-flex align-items-center">
	<div class="dropdown dropdown-default dropdown-text dropdown-icon-item border-1">
		<button class="option-btn-1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa-solid fa-ellipsis-vertical fs-2 "></i>
		</button>
		<div class="dropdown-menu dropdown-menu-right">
			<a @click="duplicateEvent(event)" href="javascript:;" class="dropdown-item"><i class="fa-regular fa-copy me-3"></i>Duplicate</a>
			<Link :href="`/create-event?id=${event.id}`" class="dropdown-item"><i class="fa-solid fa-pen me-3 "></i>Edit</Link>
			<a @click="deleteEvent(event)" href="javascript:;" class="dropdown-item"><i class="fa-solid fa-trash-can me-3"></i>Delete</a>
		</div>
	</div>
</div>

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
				</div>
			</div>
		</div>
	</div>

        <!-- Add Bank Account Model Start-->
        <div v-if="showModal" class="modal fade" id="qrModal" tabindex="-1" aria-labelledby="bankModalLabel" aria-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bankModalLabel">QR Code</h5>
                    </div>
                    <div class="modal-body">
                        <div class="model-content main-form">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group mt-4 text-center">
                                        <div v-html="editEvent?.qrCode"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-target="#aboutModal" data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Bank Account Model End-->
	<!-- Body End -->
	</AuthenticatedLayout>
</template>
<style scoped>
.w-10{
	width: 7% !important;
}
.option-btn-1 {
    width: 35px;
    height: 35px;
    color: #000;
    border: 4px solid #000;
    background: rgba(255, 255, 255, .3);
    border-radius: 3px;
}
</style>


