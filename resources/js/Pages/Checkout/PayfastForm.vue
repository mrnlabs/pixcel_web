<script setup>
const props = defineProps({
    payFastGeneratedHtml: String
})

const toggleLoading = () => {
    document.querySelector('.payfast-btn').value='Loading...';
}
</script>
<template>

    <div class="wrapper">
		<div class="event-dt-block p-80">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-5 col-lg-7 col-md-10">
						<div class="booking-confirmed-content">
							<div class="main-card">
								<div class="booking-confirmed-top text-center p_30">
									<div class="booking-confirmed-img mt-4">
										<img src="images/confirmed.png" alt="">
									</div>
									<h4>Pay With Payfast</h4>
									<p class="ps-lg-4 pe-lg-4">We are pleased to inform you that your reservation request has been received and confirmed.</p>
									<div class="d-none add-calender-booking">
										<h5>Add</h5>
										<a href="#" class="cb-icon"><i class="fa-brands fa-windows"></i></a>
										<a href="#" class="cb-icon"><i class="fa-brands fa-apple"></i></a>
										<a href="#" class="cb-icon"><i class="fa-brands fa-google"></i></a>
										<a href="#" class="cb-icon"><i class="fa-brands fa-yahoo"></i></a>
									</div>
								</div>
								<div class="booking-confirmed-bottom">
									<div class="booking-confirmed-bottom-bg p_30">
										<div class="event-order-dt">
											<div class="event-thumbnail-img">
												<img src="images/event-imgs/img-7.jpg" alt="">
											</div>
											<div class="event-order-dt-content">
												<h5>Event Name</h5>
												<!-- <span>Wed, Jun 01, 2022 5:30 AM. Duration 1h</span>
												<div class="buyer-name">John Doe</div>
												<div class="booking-total-tickets">
													<i class="fa-solid fa-ticket rotate-icon"></i>
													<span class="booking-count-tickets mx-2">1</span>x Ticket
												</div> -->
												<div class="booking-total-grand">
													Total : <span>R75.00</span>
												</div>
											</div>
										</div>
										<div @click="toggleLoading" v-html="payFastGeneratedHtml"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
</template>