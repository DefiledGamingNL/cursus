<script setup>

import Banner from "@/Components/Banner.vue";
import {defineProps} from 'vue'
import { Link } from '@inertiajs/vue3';
import Footer from "@/Components/Footer.vue";
import Header from "@/Components/Header.vue";

const props = defineProps({
    product: Object,
})
</script>


<template>
<Header />
    <Banner :title="product.category" subtitle="text" type="product-category"  link=""/>
    <main>
        <div class="border-b-2 py-5">
            <div class="container max-w-7xl mx-auto">
                <div class="flex gap-14 justify-center">
                    <img class="rounded-xl" src="https://picsum.photos/250" alt="">
                    <div>
                        <h1 class="text-3xl font-bold">{{product.name}}</h1>
                        <p>€ {{product.price}}</p>
                        <p class="max-w-[200px]">{{product.description}}</p>
                    </div>
                    <Link class="py-2 px-6 rounded-xl border-2 h-full hover:bg-emerald-300 hover:text-white font-bold transition duration-200">Voeg toe</Link>
                </div>
            </div>
        </div>

        <div class="border-b-2 p-5">
            <h2 class="text-2xl font-semibold">Productomschrijving</h2>
        </div>
        <div class="min-h-[300px] p-5 border-b-2">
            <div class="container max-w-7xl mx-auto">
                <p class="text-lg font-medium">{{product.description}}</p>
            </div>
        </div>
    </main>
<Footer />
</template>
