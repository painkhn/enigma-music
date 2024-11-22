<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="justify-self-start">
        <Link :href="route('home')">
            <img src="/img/logo.svg" alt="Logo"  class="w-64 transition-all hover:opacity-70 hover:scale-105"/>
        </Link>
    </div>
</template>