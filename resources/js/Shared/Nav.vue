<template>
    <nav class="mt-6">
        <ul class="list-disc">
            <li>
                <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
                <!-- <Link href="/" classs="text-blue-500 hover:underline"
            :class="{'font-bold underline': $page.component === 'Home'}"
            >
            Home</Link> -->
            </li>
            <li>
                <NavLink href="/users" :active="$page.component === 'Users'">Users</NavLink>
                <!-- <Link href="/users?foo=bar" classs="text-blue-500 hover:underline"
                    :class="{ 'font-bold underline': $page.url.startsWith('/users') }">
                Users</Link> -->
            </li>
            <li>
                <NavLink href="/settings" :active="$page.component === 'Settings'">Settings</NavLink>
                <!-- <Link href="/settings" classs="text-blue-500 hover:underline"
                    :class="{ 'font-bold underline': $page.component === 'Settings' }">
                Settings</Link> -->
            </li>
            <!-- <li>
                <Link href="/logout" method="post" :data="{ foo: 'bar' }" as="button"
                    classs="text-blue-500 hover:underline">Log out</Link>
            </li> -->
        </ul>
    </nav>


</template>


<script>
// import { Link } from '@inertiajs/inertia-vue3';
import NavLinkVue from './NavLink.vue'

export default {
    components: {
        NavLink
    },

}

</script>
