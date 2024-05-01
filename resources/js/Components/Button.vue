<template>
    <button class="main-btn btn-hover w-100 mt-4" type="submit">{{ label }}
		<i v-if="hasIcon" :class="icon"></i>
	</button>
</template>
<script setup>
defineProps({
    label: {
        type: String,
    },
    hasIcon: {
        type: Boolean
    },
    icon: {
        type: String
    }
});
</script>