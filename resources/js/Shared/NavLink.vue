<template>
    <Link
        class="block mt-4 lg:inline-block lg:mt-0 text-white 
        hover:border-transparent hover:text-red-600 hover:bg-white hover:rounded mr-4" 
        :class="{'font-bold underline': active}"
    >
        <slot />
    </Link>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'

defineProps({
    active: Boolean
})

</script>
