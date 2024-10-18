<script setup>
import {  ref } from 'vue';

const props = defineProps({
    type: String,
    required: Boolean,
    placeholder: String
});

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);

defineExpose({ focus: () => input.value.focus() });
</script>
<template>
        <input :type="type" class="form-control" :id="label" :placeholder="placeholder" ref="input" v-model="model">    
</template>

<style scoped>
input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Hide arrows in input type number for Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>