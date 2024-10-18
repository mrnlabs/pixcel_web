<script setup>
import { Link } from '@inertiajs/vue3';
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
									<h4 class="text-danger">Payment cancelled</h4>
									<p class="ps-lg-4 pe-lg-4 text-danger">You cancelled your payment.</p>
								</div>
								<div class="booking-confirmed-bottom">
									<div class="booking-confirmed-bottom-bg p_30">
										<Link href="/pricing" class="main-btn btn-hover h_50 w-100"><i class="fa-solid fa-home  me-3"></i>Take Me Home</Link>
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