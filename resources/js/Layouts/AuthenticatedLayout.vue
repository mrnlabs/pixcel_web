<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';
import Header from '@/Components/Header.vue';
import SideNavbar from '@/Components/SideNavbar.vue';
import Footer from '@/Components/Footer.vue';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <Header/>
    <SideNavbar class="side"/>
    	<div class="dark">
            <!-- hero banner here -->
            <main class="main">
                <slot />
            </main>
	    </div>
</template>

<style>
.dark {
    background-color: #E7E9EF;
}
.side {
    /* margin-top: 108px; */
    padding-top: 108px;
    background-color: #EBEDF3;
    /* border-radius: 10px; */

    /* margin-left: 10px; */
}

.menu_left {
    padding-top: 108px;
}
.menu--item {
    /* background-color: blue; */
    border-radius: 10px;
    margin: 0 20px;
}
.menu--item:hover {
    color: orange;
}
.menu--label {
    /* background-color: blue; */
    border-radius: 10px;
}
.menu--link.active {
    background-color: #045CC7;
    background-image: linear-gradient(to right, #045CC7,#FF6666 );
    color: white;
    border-radius: 10px;
}
.sub_menu--link:hover {
    background-image: linear-gradient(to right, #045CC7,#FF6666 ) !important;
	color: black !important;
}


.menu--item {
	position: relative;
	min-height: 42px;
	line-height: 42px;
}

.menu--link.menu--label:hover {
    background-image: linear-gradient(to right, #045CC7,#FF6666 ) !important;
	color: white !important;
}
</style>
