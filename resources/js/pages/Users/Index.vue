<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import SettingsLayout from '@/layouts/settings/Layout.vue';
const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'List Users',
    href: '/users',
  },

];
</script>
<template>
  <AppLayout :breadcrumbs="breadcrumbs">
    <Head title="List users" />
    <header class="flex mt-1 mb-4">
      <div class="flex items-center w-full">
        <div class="justify-start w-full ml-4 ">Lista de usuarios</div>
        <div class="flex justify-end w-full">
          <Button class="px-1 mr-4 text-sm text-black bg-green-300 rounded-lg cursor-pointer hover:text-white hover:bg-green-800">Nuevo usuario</Button>
        </div>
      </div>
    </header>

    <table class="w-full text-sm ">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Telegram</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
  </AppLayout>
</template>
