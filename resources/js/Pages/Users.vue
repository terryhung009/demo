<template>
    <Layout>
        <h1 class="text-3xl font-bold">
            Users
        </h1>






        <div style="margin-top: 400px;">
            <p>the current time is {{ time }}.</p>

            <Link href="/users" class="text-red-500" preserve-scroll>
            Refresh</Link>
        </div>
    </Layout>
</template>


<script setup>
// import { Link } from '@inertiajs/inertia-vue3';
// import Nav from "../Shared/Nav"
import { Link } from "@inertiajs/inertia-vue3"
import Layout from "../Shared/Layout"

defineProps({
    time:String
});


</script>