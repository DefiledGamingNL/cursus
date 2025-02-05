<script setup>
import Banner from "@/Components/Banner.vue";
import Header from "@/Components/Header.vue";
import Newsletter from "@/Components/Newsletter.vue";
import ProductCard from "@/Components/ProductCard.vue";
import {Head} from "@inertiajs/vue3";
import Footer from "@/Components/Footer.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});
</script>


<template>
    <Head title="Welcome" />
    <div class="bg-gray-100 dark:text-white pt-6 sm:justify-center sm:pt-0 dark:bg-gray-900">
        <Header :canRegister="canRegister" :canLogin="canLogin" />
        <slot />
        <Footer />
    </div>

</template>
