<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'

defineProps({
  projects: { type: Array, required: true },
})
</script>

<template>
  <AppLayout>
    <h1 class="text-3xl font-semibold">Work</h1>

    <Link
  v-for="p in projects"
  :key="p.slug"
  :href="`/work/${p.slug}`"
  class="group relative block h-[320px] overflow-hidden rounded-xl border"
>
  <!-- Background image -->
  <div
    class="absolute inset-0 bg-cover bg-center transition duration-500 group-hover:scale-105"
    :style="{ backgroundImage: `url(${p.card_image})` }"
  ></div>

  <!-- Dark overlay -->
  <div class="absolute inset-0 bg-black/50"></div>

  <!-- Content -->
  <div class="relative flex h-full flex-col justify-end p-6 text-white">
    <div class="text-xs uppercase tracking-wide opacity-80">
      {{ p.type }} • {{ p.year }}
    </div>

    <h2 class="mt-2 text-xl font-semibold">
      {{ p.title }}
    </h2>

    <p class="mt-2 text-sm opacity-90">
      {{ p.summary }}
    </p>

    <div class="mt-3 flex flex-wrap gap-2">
      <span
        v-for="tag in p.tags"
        :key="tag"
        class="rounded-full border border-white/40 px-3 py-1 text-xs"
      >
        {{ tag }}
      </span>
    </div>

    <div class="mt-4 text-sm underline">
      View case study →
    </div>
  </div>
</Link>

  </AppLayout>
</template>
