<script setup>
import {Link} from '@inertiajs/vue3';
import SearchBar from "@/Components/SearchBar.vue";
import NavLink from "@/Components/NavLink.vue";

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
    <header class="min-w-screen">
        <nav class="flex justify-between border-b-2 border-gray-400">
            <ul class="flex gap-3 p-1 m-1">
                <NavLink :href="route('home')" :active="route().current('home')">Home</NavLink>
                <NavLink :href="route('products.index')" :active="route().current('products.index')">Producten</NavLink>
                <NavLink :href="route('sale')" :active="route().current('sale')">Aanbiedingen</NavLink>
                <NavLink>Winkelwagen</NavLink>
                <NavLink>Bestellen</NavLink>
            </ul>
            <ul class="flex gap-3 p-1 m-1">
            <li>
                <div v-if="canLogin">
                    <NavLink
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')"
                    >Dashboard</NavLink
                    >

                    <template v-else>
                        <NavLink
                            :href="route('login')"
                        >Log in</NavLink
                        >

                        <NavLink
                            v-if="canRegister"
                            :href="route('register')"
                        >Register</NavLink
                        >
                    </template>
                </div>
            </li>
            </ul>
        </nav>
        <SearchBar />
    </header>
</template>
