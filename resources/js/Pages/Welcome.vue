<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';

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

// onMounted(() => {
//     console.log(props.user)
// }),
</script>

<template>
    <Head title="ENIGMA MUSIC" />

    <div class="max-w-7xl w-full mx-auto my-0 p-10 dark:bg-stone-950 border-x-2 dark:border-stone-800 border-gray-200 bg-stone-100">
        <header class="grid grid-cols-3 items-center">
            <div class="justify-self-start">
                <a href="#!">
                    <img src="/img/logo.svg" alt="Logo"  class="w-64 transition-all hover:opacity-70 hover:scale-105"/>
                </a>
            </div>
            <form class="w-full mx-auto">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full transition-all p-4 ps-10 text-sm text-gray-900 border focus:ring-2 border-gray-300 rounded-lg bg-gray-50 focus:ring-red-300 focus:border-red-300 dark:bg-stone-800 dark:border-stone-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-400 dark:focus:border-red-400" placeholder="Поиск" required />
                    <button type="submit" class="text-white absolute transition-all end-2.5 bottom-2.5 bg-red-400 hover:bg-red-300 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-400 dark:hover:bg-red-300 dark:focus:ring-red-400">НАЙТИ</button>
                </div>
            </form>
            <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('dashboard')"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    <svg class="h-10 w-10 text-red-400 transition-all hover:scale-125 hover:opacity-70" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                    </svg>
                  
                </Link>

                <template v-else>
                    <Link
                        :href="route('login')"
                        class="uppercase font-black dark:hover:bg-stone-800 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-red-400 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-red-400 dark:focus-visible:ring-white"
                    >
                        войти
                    </Link>
                </template>
            </nav>
        </header>
    </div>
</template>
