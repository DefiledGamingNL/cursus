<script setup>
import { Head } from '@inertiajs/vue3';
import AdminLayout from "@/Layouts/AdminLayout.vue";
</script>

<template>
    <Head title="Admin Dashboard" />

    <AdminLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
               Admin Dashboard
            </h2>
        </template>

        <div class="4">
           <h2 class="text-3xl">Welkom, {{ $page.props.auth.user.name }}</h2>
        </div>
    </AdminLayout>
</template>
