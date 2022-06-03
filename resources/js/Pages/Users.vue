<template>
    <h1>Users</h1>

    <Nav />

    <div style="margin-top: 400px;" >   
        <p>the current time is {{ time }}.</p>

        <Link href="/users" class="text-red-500"
        preserve-scroll
        >
        Refresh</Link>
    </div>
</template>


<script>
// import { Link } from '@inertiajs/inertia-vue3';
import Nav from "../Shared/Nav"
import { Link } from "@inertiajs/inertia-vue3"


export default {
    components:{ Nav , Link },
    props:{ time: String }
};

</script>