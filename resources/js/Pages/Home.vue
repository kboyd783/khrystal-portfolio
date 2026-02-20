<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'

defineProps({
  projects: { type: Array, default: () => [] },
})
</script>



<template>
    <AppLayout>
        <h1 class="text-4xl font-semibold"> Design Build for Saas</h1>
            
            <p class="mt-4 max-w-xl text-gray-600">
                I design clear, modern product experiences and build them end to end using Laravel, Inertia, Vue, and Tailwinds.
            </p>

<section class="mt-12">
        <h2 class="text-2xl font-semibold">Featured work</h2>

        <div class="mt-6 grid gap-6 md:grid-cols-3">
            <Link
            v-for="p in projects.slice(0, 3)"
            :key="p.slug"
            :href="`/work/${p.slug}`"
            class="group rounded-xl border p-5 hover:bg-gray-50"
            >
            <div class="text-xs uppercase text-gray-500">{{ p.type }} • {{ p.year }}</div>
            <div class="mt-2 text-lg font-semibold">{{ p.title }}</div>
            <p class="mt-2 text-sm text-gray-600">{{ p.summary }}</p>
    </Link>
  </div>
</section>


    </AppLayout>

</template>