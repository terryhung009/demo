<template>
    <Head title="My App - User" />
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
import  {Head} from "@inertiajs/inertia-vue3"
// import { Link } from '@inertiajs/inertia-vue3';
// import Nav from "../Shared/Nav"
// import { Link } from "@inertiajs/inertia-vue3"
// import Layout from "../Shared/Layout"

// export default{

// };

defineProps({
    time:String
});


</script>

<!-- <script setup>
import  {Head} from "@inertiajs/inertia-vue3"

</script> -->