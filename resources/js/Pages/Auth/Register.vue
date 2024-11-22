<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Register" />
    <div class="w-full min-h-screen flex items-center justify-center">
        <div class="max-w-xl w-full min-h-screen p-5 dark:bg-stone-950 border-x-2 dark:border-stone-800 border-gray-200 bg-stone-100 flex flex-col justify-center">
            <div class="flex justify-center">
                <Link :href="route('home')">
                    <img src="/img/logo.svg" alt="Logo"  class="w-64 transition-all hover:opacity-70 hover:scale-105"/>
                </Link>
            </div>
            <form @submit.prevent="submit">
                <div>
                    <InputLabel for="name" value="Имя" />
    
                    <TextInput
                        id="name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.name"
                        required
                        autofocus
                        autocomplete="name"
                    />
    
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
                <div class="mt-4">
                    <InputLabel for="email" value="Электронная почта" />
        
                    <TextInput
                        id="email"
                        type="email"
                        class="mt-1 block w-full"
                        v-model="form.email"
                        required
                        autofocus
                        autocomplete="username"
                    />
        
                    <InputError class="mt-2" :message="form.errors.email" />
                </div>
        
                <div class="mt-4">
                    <InputLabel for="password" value="Пароль" />
        
                    <TextInput
                        id="password"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password"
                        required
                        autocomplete="current-password"
                    />
        
                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="mt-4">
                    <InputLabel
                        for="password_confirmation"
                        value="Подтвердить пароль"
                    />
    
                    <TextInput
                        id="password_confirmation"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password_confirmation"
                        required
                        autocomplete="new-password"
                    />
    
                    <InputError
                        class="mt-2"
                        :message="form.errors.password_confirmation"
                    />
                </div>
        
                <div class="mt-4 flex items-center justify-end">
                    <!-- <Link
                        v-if="canResetPassword"
                        :href="route('password.request')"
                        class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >
                        Forgot your password?
                    </Link> -->
        
                    <Link :href="route('login')" class="transition-all rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-white dark:hover:text-red-400">
                        У меня уже есть аккаунт
                    </Link>
        
                    <PrimaryButton
                        class="ms-4"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                    >
                        Регистрация
                    </PrimaryButton>
                </div>
            </form>
        </div>
    </div>
    
</template>
