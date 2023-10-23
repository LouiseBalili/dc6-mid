<script setup>
import { router } from '@inertiajs/vue3';

const props = defineProps({
    client: Object
})

function viewClient() {
    router.visit('/clients/view/' + props.client.id);
}
</script>

<template>
    <div class="min-w-[350px] mb-4 mx-2 p-4 bg-white dark:bg-[#1f1f1f] rounded shadow flex-1 cursor-pointer" @click="viewClient">
        <div class="flex justify-between">
            <div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white flex items-center">
                    {{ client.first_name }} {{ client.last_name }}
                </h5>
                <div class="mb-2">
                    <p class="font-semibold text-gray-700 dark:text-gray-50 text-sm">Address</p>
                    <p class="text-sm text-gray-700 dark:text-gray-50 font-light">{{ client.address }}</p>
                </div>
                <div class="mb-2">
                    <p class="font-semibold text-gray-700 dark:text-gray-50 text-sm">Phone</p>
                    <p class="text-sm text-gray-700 dark:text-gray-50 font-light">{{ client.phone }}</p>
                </div>
            </div>
            <div>
                <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white flex items-center mr-14">Credit Limit </h5>
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white flex items-center ml-2.5"> {{ client.credit_limit }}</h5>
            </div>
        </div>
    </div>
</template>
