<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() =>
    props.active
        ? "ms-4 font-bold focus:rounded-sm hover:text-slate-500"
        : "ms-4 font-light focus:rounded-sm hover:text-slate-500",
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
