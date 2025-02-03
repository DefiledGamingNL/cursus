<script setup>
import {Link}  from '@inertiajs/vue3'
defineProps({
    product: {
        type: Object,
        required: true,
    }
});
</script>


<template>
    <div v-if="product.is_on_sale">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden max-w-[500px] min-h-[350px] ">

            <div class="bg-cover bg-center p-4">
                <div class="flex justify-end">
                    <span class="inline-flex items-center rounded-md bg-purple-50 px-2 py-1 text-xs font-medium text-purple-700 ring-1 ring-inset ring-purple-700/10">Aanbieding</span>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="p-4 flex flex-col items-between justify-between">
                    <p class="font-semibold text-lg text-gray-800">{{ product.name }}</p>
                    <p class=" text-gray-700 mt-2">{{ product.description }}</p>
                        <Link :href="product.slug" class="px-3 py-1 bg-gray-800 text-white text-xs font-bold uppercase rounded">Ga naar product</Link>
                </div>
                <div>
                    <img src="https://picsum.photos/1600/1000" alt="">
                    <p class="text-xl text-gray-800 font-bold">Prijs: € {{ product.price }}</p>
                </div>
            </div>
        </div>
    </div>

</template>
