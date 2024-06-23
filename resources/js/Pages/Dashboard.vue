<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-3">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                        Dashboard
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('students.index')" :active="route().current('students.index') ||
                        route().current('students.create') ||
                        route().current('students.edit')
                        ">
                        Students
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('classes.index')" :active="route().current('classes.index') ||
                        route().current('classes.create') ||
                        route().current('classes.edit')
                        ">
                        Classes
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('sections.index')" :active="route().current('sections.index') ||
                        route().current('sections.create') ||
                        route().current('sections.edit')
                        ">
                        Sections
                    </ResponsiveNavLink>
                </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
