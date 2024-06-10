<script setup>
const props = defineProps({
    payFastGeneratedHtml: String
})
</script>
<template>
    <div v-html="payFastGeneratedHtml"></div>
</template>