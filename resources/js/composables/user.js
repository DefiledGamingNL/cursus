import {usePage} from '@inertiajs/vue3';

export function useName() {
    const isName = () => usePage().props.auth.user.data.name;

    return {isName}
}
