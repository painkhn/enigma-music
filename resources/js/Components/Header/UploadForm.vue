<script setup>
    import { ref } from 'vue';

    const files = ref([]);
    const error = ref('');

    const props = defineProps({
        genres: {
            type: Array
        }
    })

    const handleDrop = (event) => {
        files.value = Array.from(event.dataTransfer.files);
        if (files.value.length === 0) {
            error.value = 'No file selected.';
        } else {
            error.value = '';
        }
    };

    const handleFileChange = (event) => {
        files.value = Array.from(event.target.files);
        if (files.value.length === 0) {
            error.value = 'No file selected.';
        } else {
            error.value = '';
        }
    };
</script>

<template>
    <form class="flex flex-col gap-5">
        <div class="flex flex-col gap-2">
            <label class="dark:text-white/80">
                Название трека
            </label>
            <input type="text" class="w-full rounded-md border-gray-300 shadow-sm focus:ring-2 focus:!border-red-400 focus:ring-red-400 transition-all dark:bg-stone-800 dark:text-white dark:border-gray-600">
        </div>
        <div class="flex flex-col gap-2">
            <label class="dark:text-white/80">
                Жанр
            </label>
            <select id="countries" class="bg-gray-50 border transition-all border-gray-300 text-gray-900 text-sm rounded-md focus:ring-2 focus:ring-red-400 focus:!border-red-400 block w-full p-2.5 dark:bg-stone-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                <option selected>Выберите жанр</option>
                <option :value="genre.id" v-for="genre in $page.props.genres" :key="genre.id">{{ genre.title }}</option>
            </select>
        </div>
        <div class="flex flex-col gap-2">
            <label for="" class="dark:text-white/80">
                Добавьте обложку
            </label>
            <div class="flex items-center justify-center w-full">
                <label
                    for="dropzone-file"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 transition-all border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-stone-800 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500"
                    @dragover.prevent
                    @dragenter.prevent
                    @drop.prevent="handleDrop"
                >
                    <div
                        v-if="files.length === 0"
                        class="flex flex-col items-center justify-center pt-5 pb-6"
                        >
                    <svg
                        class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 20 16"
                    >
                        <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"
                        />
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                        <span class="font-semibold">Нажмите на поле</span> или перенесите файл
                    </p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">
                        SVG, PNG, JPG or GIF (MAX. 800x400px)
                    </p>
                    </div>
                    <div v-else class="flex flex-col items-center justify-center pt-5 pb-6">
                        <p class="mb-2 text-sm text-red-400">
                            <span class="font-semibold">Выбранный файл:</span> {{ files[0].name }}
                        </p>
                    </div>
                    <input
                        id="dropzone-file"
                        type="file"
                        class="hidden"
                        @change="handleFileChange"
                    />
                </label>
                <div v-if="error" class="mt-4 text-red-500">{{ error }}</div>
            </div>
        </div>
        <button type="submit" class="w-full h-12 bg-red-400 hover:bg-red-300 text-white transition-all rounded-md dark:hover:text-black font-semibold">
            Загрузить
        </button>
    </form>
</template>