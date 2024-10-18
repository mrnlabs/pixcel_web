<script setup>
defineProps({
    label: {
        type: String,
    },
});
</script>

<template>
    <label class="form-label">{{ label }}</label>
</template>
