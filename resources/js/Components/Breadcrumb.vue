<template>
    <div class="col-md-12">
        <div class="d-main-title">
            <h3><i class="fa-solid  me-3 " :class="icon"></i>{{ title }}</h3>
        </div>
    </div>
</template>
<script setup>
const props = defineProps({
    title : String,
    icon: String
})
</script>
<style scoped>
.fa-solid{
   color: #005DC8;
}
</style>
