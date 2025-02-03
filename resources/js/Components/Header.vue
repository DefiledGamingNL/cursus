<script setup>
import {LEFT_NAVIGATION, RIGHT_NAVIGATION} from "/constants";
import NavLink from "@/Components/NavLink.vue";
import SearchBar from "@/Components/SearchBar.vue";
</script>


<template>
    <header class="min-w-screen">
        <nav class="flex justify-between border-b-2 border-gray-400">
            <ul class="flex gap-3 p-1 m-1">
                <li v-for="nav in RIGHT_NAVIGATION" :key="nav.id">
                    <NavLink :href="nav.href">{{nav.name}}</NavLink>
                </li>
            </ul>
            <ul class="flex gap-3 p-1 m-1">
            <li v-for="nav in LEFT_NAVIGATION" :key="nav.id">
                <NavLink :href="nav.href">{{nav.name}}</NavLink>
            </li>
            </ul>
        </nav>
        <SearchBar />
    </header>
</template>
