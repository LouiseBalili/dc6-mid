<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';
import { Head, Link } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Products" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">Create Product</h2>
                <Link class="button1 mb-2 py-2 px-3 bg-gray-300 shadow border-gray-300 border hover:bg-gray-400 rounded" as="button" href="/products">Back</Link>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-[#1f1f1f] overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4">
                        <h2 class="font-semibold text-lg text-gray-800 dark:text-white leading-tight">Product Details</h2>

                        <div class="flex items-start mt-5">
                            <div class="max-w-md mr-6">
                                <div class="mb-4">
                                    <InputLabel class="dark:text-white" for="product" value="Product name" />
                                    <TextInput
                                    type="text"
                                    class="mt-1 block w-full"
                                    id="product" />
                                </div>

                                <div class="mb-4">
                                    <InputLabel class="dark:text-white" for="brand" value="Brand" />
                                    <TextInput
                                    type="text"
                                    class="mt-1 block w-full"
                                    id="brand" />
                                </div>

                                <div class="mb-4">
                                    <InputLabel class="dark:text-white" for="description" value="Description" />
                                    <textarea id="description" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                                </div>

                                <div class="flex items-center justify-between mb-4">
                                    <div class="mr-3">
                                        <InputLabel class="dark:text-white" for="retail_price" value="Retail Price" />
                                        <TextInput
                                        type="number"
                                        class="mt-1 block w-full"
                                        id="retail_price" />
                                    </div>
                                    <div>
                                        <InputLabel class="dark:text-white" for="qty_stock" value="Quantity Stock" />
                                        <TextInput
                                        type="number"
                                        class="mt-1 block w-full"
                                        id="qty_stock" />
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <InputLabel class="dark:text-white" for="brand" value="Category" />
                                    <select id="brand" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                        <option value="" selected>-- Select a category --</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button class="px-4 py-2 text-sm rounded-md bg-gray-500 text-white">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
