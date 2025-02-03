<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
import Banner from "@/Components/Banner.vue";
import ProductCard from "@/Components/ProductCard.vue";
import Newsletter from "@/Components/Newsletter.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
    products: {
        type: Array,
        required: true,
    }
});
</script>

<template>
    <Head title="Welcome" />
    <Header />
    <Banner type="promotion" title="Aanbiedings product" subtitle="Subtitel tekst" link="/" />
    <main>
        <div class="container max-w-[1600px] mx-auto py-5 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 justify-items-center gap-10 text-center lg:text-start">
            <div v-for="product in products" :key="product.id">
                <ProductCard :product="product" />
            </div>
        </div>
        <Newsletter   link="/blogs"  subtitle="Korte tekst blog bericht." title="Kop nieuwsbrief"/>
    </main>
    <Footer />
</template>
