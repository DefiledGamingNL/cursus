<script setup>

defineProps({
    title: {
        type: String,
        required: true,
    },
    subtitle: {
        type: String,
        required: true,
    },
    link: {
        type: String,
        required: true,
    }
})
</script>

<template>
    <div class="bg-gray-100 relative min-h-[400px] border-b-2 mb-3">
        <img src="https://picsum.photos/1600/400" class="absolute w-full h-[400px] object-cover" alt="">
        <div class="max-w-7xl flex flex-col h-full absolute justify-start p-4">
            <div class="p-4">
                <h1 class="text-4xl font-bold text-white">{{title}}</h1>
                <h2 class="text-2xl mb-2 text-white">{{ subtitle }}</h2>
                <a class="text-white drop-shadow-lg py-3 px-5 rounded bg-emerald-300" :href="link">Blogs</a>
            </div>
        </div>
    </div>
</template>
