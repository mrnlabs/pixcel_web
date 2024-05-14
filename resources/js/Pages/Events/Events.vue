<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import SideNavbar from '@/Components/SideNavbar.vue';

const props = defineProps({
    events: Array
})
</script>

<template>
    <Head title="All Events" />
    <AuthenticatedLayout>
        <!-- Left Sidebar Start -->
		<SideNavbar class="side"/>	<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper wrapper-body">
		<div class="dashboard-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="d-main-title">
							<h3><i class="fa-solid fa-chart-pie me-3"></i>Events</h3>
						</div>
					</div>
					<div class="col-md-12">
						<div class="main-card mt-5">
							<div class="dashboard-wrap-content p-4">

								<div class="d-md-flex flex-wrap align-items-center">
									<div class="dashboard-date-wrap mt-4">
										<div class="form-group">
											<div class="relative-input position-relative">
												<input class="form-control h_40" type="text" placeholder="Search by name" value="">
												<i class="uil uil-search"></i>
											</div>
										</div>
									</div>
									<div class="rs ms-auto mt-4 mt_r4">
										<a href="#" class="pe-4 w-100 ps-4 text-center co-main-btn h_40 d-inline-block"><i class="fa-solid fa-arrow-rotate-right me-3"></i>Refresh</a>
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
															<th scope="col">Name</th>
															<th scope="col">Created</th>
															<th scope="col">Status</th>
															<th scope="col">Expires</th>
															<th scope="col">QR Code</th>
															<th scope="col">Gallery</th>
                                                            <th scope="col">Data</th>
                                                            <th scope="col">Overlays</th>
                                                            <th scope="col">Manage</th>
														</tr>
													</thead>
													<tbody>
														<tr v-for="event in events" :key="event.id">
															<td>{{ event.id }}</td>
															<td>{{ event.name }}</td>
															<td><a href="#" target="_blank">{{ event.created_at }}</a></td>
															<td>Pending</td>
															<td>{{ event.expires_at }}</td>
                                                            <td><i class="fa-solid fa-qrcode"></i></td>
															<td><i class="fa-solid fa-qrcode"></i></td>
                                                            <td><i class="fa-solid fa-qrcode"></i></td>
                                                            <td><i class="fa-solid fa-qrcode"></i></td>
                                                            <td><i class="fa-solid fa-qrcode"></i></td>
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
	<!-- Body End -->
	</AuthenticatedLayout>
</template>


