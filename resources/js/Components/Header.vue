<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import logo from '../images/apple-icon.png';
import imageProfile from '../images/profile-imgs/img-13.jpg';
import { computed } from 'vue'

const page = usePage()

const user = computed(() => page.props.auth.user);
const file_path = computed(() => page.props.photo);

</script>

<template>
	<header class="header">
		<div class="header-inner">
			<nav
				class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0">
				<div class="container-fluid pl-5">
					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
						data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<span class="navbar-toggler-icon">
							<i class="fa-solid fa-bars"></i>
						</span>
					</button>
					<a class="navbar-brand ml-4 order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="index.html">
						<div class="res-main-logo">
							<img :src="logo" alt="Main Logo">
						</div>
						<div class="ml-4 main-logo" id="logo">
							<img :src="logo" alt="Main Logo">

						</div>
					</a>
					<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
						aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header">
							<div class="offcanvas-logo" id="offcanvasNavbarLabel">
								<img src="images/logo-icon.svg" alt="">
							</div>
							<button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
								<i class="fa-solid fa-xmark"></i>
							</button>
						</div>
						<div class="offcanvas-body">
							<div class="offcanvas-top-area">
								<div class="create-bg">
									<Link href="/create-event" class="offcanvas-create-btn">
									<i class="fa-solid fa-calendar-days"></i>
									<span>Create Event</span>
									</Link>
								</div>
							</div>
							<ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
								<li class="nav-item">
									<Link class="nav-link active" aria-current="page" href="/events">Dashboard</Link>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
										aria-expanded="false">
										Explore Events
									</a>
									<!-- <ul class="dropdown-menu dropdown-submenu">
										<li><a class="dropdown-item" href="explore_events.html">Explore Events</a></li>
										<li><a class="dropdown-item" href="venue_event_detail_view.html">Venue Event
												Detail View</a></li>
										<li><a class="dropdown-item" href="online_event_detail_view.html">Online Event
												Detail View</a></li>
									</ul> -->
								</li>
								<li class="nav-item">
									<Link class="nav-link" href="/">Pricing</Link>
								</li>

								<!-- Button trigger modal -->

							</ul>
						</div>
						<div class="offcanvas-footer">
							<div class="offcanvas-social">
								<h5>Follow Us</h5>
								<ul class="social-links">
									<li><a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a></li>
									<li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="right-header order-2">
						<ul class="align-self-stretch">
							<li class="nav-item">
								<a class="nav-link" href="pricing.html" type="button" data-bs-toggle="modal"
									data-bs-target="#exampleModal">
									<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
										fill="currentColor">
										<!-- Outer circle -->
										<circle cx="20" cy="20" r="20" fill="transparent" />
										<!-- Cart icon -->
										<g transform="translate(8, 10)">
											<path
												d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
										</g>
										<!-- Circle with number -->
										<circle cx="30" cy="10" r="8" fill="red" />
										<text x="30" y="14" font-size="12" font-family="Arial" font-weight="bold"
											fill="white" text-anchor="middle">5</text>
									</svg>
								</a>
							</li>
							<li>
								<Link href="/create-event" class="create-btn btn-hover">
								<i class="fa-solid fa-calendar-days"></i>
								<span>Create Event</span>
								</Link>
							</li>
							<li class="dropdown account-dropdown">
								<a href="#" class="account-link" role="button" id="accountClick"
									data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
									<img :src="user.photo ? file_path : imageProfile" alt="">
									<i class="fas fa-caret-down arrow-icon"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-account dropdown-menu-end"
									aria-labelledby="accountClick">
									<li>
										<div class="dropdown-account-header">
											<div class="account-holder-avatar">
												<img :src="user.photo ? file_path : imageProfile" alt="">
											</div>
											<h5>{{ user?.firstname + ' ' + user?.lastname }}</h5>
											<p>{{ user?.email }}</p>
										</div>
									</li>
									<li class="profile-link">
										<Link href="/profile" class="link-item">My Profile</Link>
										<Link href="/logout" class="link-item">Sign Out</Link>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="overlay"></div>
		</div>
	</header>


</template>

<style scoped>
.navbar-brand {
	margin-left: 6rem
}
</style>
