<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'List Products',
        href: '/products',
    },
];
</script>
<template>
    <AppLayout :breadcrumbs="breadcrumbs">
        <Head title="List products" />

    </AppLayout>
</template>
