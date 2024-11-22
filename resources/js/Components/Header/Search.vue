<template>
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
</template>