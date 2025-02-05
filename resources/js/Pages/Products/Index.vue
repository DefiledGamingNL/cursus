<script setup>
import UnAuthenticatedLayout from "@/Layouts/UnAuthenticatedLayout.vue";
import Banner from "@/Components/Banner.vue";
</script>



<template>
    <UnAuthenticatedLayout>
        <Banner type="product-category" title="Aanbiedings product" subtitle="Subtitel tekst" link="/" />
        <div>
            <h1>Products</h1>
        </div>
    </UnAuthenticatedLayout>
</template>
