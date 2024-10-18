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
},
{
    placeholder: String
}
);

const input = ref(null);



defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <!-- <input
        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
        v-model="model" ref="input"
    /> -->
          <input 
           v-model="model" ref="input"
          :class="class" 
           :type="type"
           :required="isRequired"
           :placeholder="placeholder" 
           >																								
        
</template>
