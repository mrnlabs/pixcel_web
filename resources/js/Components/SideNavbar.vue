<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
	
})
console.log(props)
</script>
<template>
  <nav class="vertical_nav">
		<div class="left_section menu_left" id="js-menu">
			<div class="left_section">
				<ul>
					<li class="menu--item" :class="{ active:  $page.props.currentRoute == 'dashboard'}">
						<Link href="/dashboard" class="menu--link" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-gauge menu--icon"></i>
							<span class="menu--label">Dashboard</span>
						</Link>
					</li>
					<li class="menu--item" >
						<Link href="/events" 
						:class="{ active:  $page.props.currentRoute == 'events'}"
						class="menu--link" title="Events" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-calendar-days menu--icon"></i>
							<span class="menu--label">Events</span>
						</Link>
					</li>


					<li class="menu--item" >
						<Link href="/pricing" 
						:class="{ active:  $page.props.currentRoute == 'pricing'}"
						class="menu--link" title="Pricing" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-credit-card menu--icon"></i>
							<span class="menu--label">Pricing</span>
						</Link>
					</li>

					<li class="menu--item" >
						<Link href="/plans" 
						:class="{ active:  $page.props.currentRoute == 'plans'}"
						class="menu--link" title="Plans" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-credit-card menu--icon"></i>
							<span class="menu--label">Plans</span>
						</Link>
					</li>
					<li class="menu--item">
						<a href="my_organisation_dashboard_reports.html" 
						:class="{ active:  $page.props.currentRoute == 'invoices'}"
						class="menu--link" title="Reports" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-chart-pie menu--icon"></i>
							<span class="menu--label">Invoices</span>
						</a>
					</li>
					<li class="menu--item">
						<Link href="/subscriptions" 
						class="menu--link" 
						:class="{ active:  $page.props.currentRoute == 'subscriptions'}"
						title="Subscription" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-bahai menu--icon"></i>
							<span class="menu--label">Subscription</span>
						</Link>
					</li>
					<li class="menu--item">
						<a href="my_organisation_dashboard_conversion_setup.html" class="menu--link" title="Conversion Setup" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-square-plus menu--icon"></i>
							<span class="menu--label">Design</span>
						</a>
					</li>

					<li class="menu--item" >
						<Link href="/profile" :class="{ active:  $page.props.currentRoute == 'profile'}"
						class="menu--link team-lock" title="My Profile" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-user menu--icon"></i>
							<span class="menu--label">My Profile</span>
						</Link>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</template>
