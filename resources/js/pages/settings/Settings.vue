<script setup  lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Settings',
        href: '/settings',
    },
];
</script>
<template>
    <AppLayout :breadcrumbs="breadcrumbs">
        <Head title="Settings" />

    </AppLayout>
</template>
