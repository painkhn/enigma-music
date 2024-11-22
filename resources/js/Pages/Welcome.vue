<script setup>
    import { Head, Link } from '@inertiajs/vue3';
    import { ref, onMounted } from 'vue';
    import Header from '@/Components/Header.vue'

    const props = defineProps({
        canLogin: {
            type: Boolean,
        },
        canRegister: {
            type: Boolean,
        },
        user: {
            type: Object,
        }
    });

    function handleImageError() {
        document.getElementById('screenshot-container')?.classList.add('!hidden');
        document.getElementById('docs-card')?.classList.add('!row-span-1');
        document.getElementById('docs-card-content')?.classList.add('!flex-row');
        document.getElementById('background')?.classList.add('!hidden');
    }
</script>

<template>
    <Head title="ENIGMA MUSIC" />

    <div class="max-w-7xl w-full mx-auto my-0 p-10 dark:bg-stone-950 border-x-2 dark:border-stone-800 border-gray-200 bg-stone-100">
        <Header 
            :canLogin="props.canLogin"
            :canRegister="props.canRegister"
            :user="props.user"
        />
    </div>
</template>
