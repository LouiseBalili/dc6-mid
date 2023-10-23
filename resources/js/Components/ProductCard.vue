<script setup>
defineProps({
    product: Object,
})
</script>

<template>
    <div class="min-w-[350px] mb-4 mx-2 p-4 bg-white dark:bg-[#1f1f1f] rounded shadow flex-1 cursor-pointer">
        <div class="flex justify-between">
            <div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white flex items-center">
                    {{ product.name }}
                </h5>
                <div class="mb-2">
                    <p class="font-semibold text-gray-700 dark:text-gray-50 text-sm">Category</p>
                    <p class="text-sm font-light">{{ product.category }}</p>
                </div>
            </div>
            <div class="text-right">
                <p class="font-semibold text-gray-700 dark:text-gray-50 text-sm">Price</p>
                <p class="text-xl text-gray-900 font-semibold ">${{ product.retail_price }}</p>
            </div>
        </div>
    </div>
</template>
