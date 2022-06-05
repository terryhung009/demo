<template>
    <Head title="My App - User" />
    <Layout>
        <h1 class="text-3xl font-bold">
            Users
        </h1>

        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto -sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full -sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden broder-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gyay-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="user in users.data" :key="user.id">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ user.name}}
                                                    </div>
                                                </div>
                                            </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>




                                </tr>
                            </tbody>
                        </table>



                    </div>


                </div>



            </div>



        </div>


        <!-- Pagintor -->

        <div class="mt-6">
            <Link v-for="link in users.links" :href="link.url" v-html="link.label"/>
        </div>





        
    </Layout>

    

</template>


<script setup>
import  {Head} from "@inertiajs/inertia-vue3"
import { Link } from '@inertiajs/inertia-vue3';
// import Nav from "../Shared/Nav"
// import { Link } from "@inertiajs/inertia-vue3"
// import Layout from "../Shared/Layout"

// export default{

// };

defineProps({
    users: Object
});


</script>

<!-- <script setup>
import  {Head} from "@inertiajs/inertia-vue3"

</script> -->