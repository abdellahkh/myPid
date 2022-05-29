<template>
    <header class="justify-between">
        <Navbar />
    </header>

<section class="p-6">
    <slot />
</section>
  
<footer class="justify-between">
        <Footer />
    </footer>

</template>

<script setup>
import Navbar from "./Navbar.vue"
import Footer from "./Footer.vue";
</script>

<style>

</style>