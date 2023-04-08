<template>
    <div>This is an example of vue vite config {{name}}</div>
</template>

<script setup>
 import { onMounted } from 'vue'

 const props = defineProps(['name']);

 onMounted(()=>{
    console.log('vite with vue config')
 })
</script>