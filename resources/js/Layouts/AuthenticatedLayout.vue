<script setup>
import { ref } from 'vue';
import Header from '@/Components/Header.vue';
import SideNavbar from '@/Components/SideNavbar.vue';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <Header />
    <SideNavbar class="side"/>
    <div>
        <!-- hero banner here -->
        <main>
            <slot />
        </main>
    </div>
</template>

<!-- <style>
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
</style> -->
