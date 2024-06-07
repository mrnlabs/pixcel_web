<script setup>
import { onMounted, ref } from 'vue';

const model = defineModel({
    type: String,
    required: true,
},

{
    isRequired: Boolean,
    required: true,

},
{
    class: String
}
);

const input = ref(null);

defineExpose({ focus: () => input.value.focus() });
</script>
<template>
    <div class="table-col first-col">
        <div class="form-group m-0 form-custom-validation">
        <input 
        ref="input"
        class="form-control h_40"
        type="text"
        :isRequired="isRequired"
        v-model="model">
     </div>
    </div>
</template>
<style>
  .form-control {
    border-radius: 4px !important;
  }
</style>