<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <AppLayout>
    <section class="max-w-3xl">
      <h1 class="text-4xl font-semibold">About</h1>

      <p class="mt-4 text-lg text-gray-700">
        I’m Khrystal Battle — a UX Designer with front-end development skills focused on building clean,
        user-centered product experiences end-to-end.
      </p>

      <div class="mt-8 space-y-6 text-gray-700">
        <p>
          I blend UX research and UI design with hands-on implementation using Laravel, Inertia, Vue, and Tailwind.
          I’ve worked on real SaaS experiences (Gemstone) and completed the Google UX Certificate with multiple case studies.
        </p>

        <div>
          <h2 class="text-xl font-semibold text-gray-900">What I’m strongest at</h2>
          <ul class="mt-3 list-disc pl-6 space-y-2">
            <li>Design systems: tokens, components, usage guidelines, and consistency audits</li>
            <li>UX process: research → synthesis → flows → prototypes → testing</li>
            <li>Building UI: Laravel + Inertia + Vue + Tailwind, reusable components, clean layouts</li>
          </ul>
        </div>

        <div class="flex flex-wrap gap-3 pt-2">
          <Link href="/work" class="rounded-lg border px-4 py-2 text-sm hover:bg-gray-50">View my work</Link>
          <Link href="/contact" class="rounded-lg bg-black px-4 py-2 text-sm text-white hover:bg-gray-800">Contact me</Link>
        </div>
      </div>
    </section>
  </AppLayout>
</template>
