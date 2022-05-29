<script setup>
import BreezeApplicationLogo from '@/Icons/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-red-600">

        <h1 class="text-white font-bold text-xl mb-2">{{($page.component === 'Auth/Login') ? 'Log ' :'Sign '}} in to The Best Theatre</h1>

        <div class="flex">
            
            <Link href="/">
                <BreezeApplicationLogo class="w-20 h-20 fill-current text-gray-500 justify-center"/>
            </Link>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
