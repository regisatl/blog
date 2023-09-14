<script setup>
    import { Head, Link } from '@inertiajs/vue3';
    import ApplicationLogo from '@/Components/Master.vue';
</script>


<template>

    <Head title="Master" />

      <Link class="nav-link" :href="route('about')" title="About-us"><span class="fab fa-accessible-icon"  style="font-size: 1.5rem"></span></Link>

      <Link class="nav-link" :href="route('contact')" title="Contact"><span class="fas fa-mail-bulk"  style="font-size: 1.5rem"></span></Link>

      <Link class="nav-link" :href="route('home')" title="home"><span class="fas fa-home" style="font-size: 1.5rem"></span></Link>

      <Link class="nav-link" :href="route('articles')" title="Articles"><span class="fas fa-blog" style="font-size: 1.5rem"></span></Link>

      <Link class="nav-link" :href="route('create')" title="Create article"><span class="fas fa-plus-square" style="font-size: 1.5rem"></span></Link>
      
</template>
