<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
</script>

<template>
  <AppLayout>
    <section class="max-w-3xl">
      <h1 class="text-4xl font-semibold">Contact</h1>

      <p class="mt-4 text-gray-700">
        Want to collaborate or talk about a role? The fastest way to reach me is email.
      </p>

      <div class="mt-8 grid gap-4 sm:grid-cols-2">
        <a
          href="mailto:khrystalbattle@gmail.com"
          class="rounded-xl border p-5 hover:bg-gray-50"
        >
          <div class="text-xs uppercase text-gray-500">Email</div>
          <div class="mt-1 font-medium">khrystalbattle@gmail.com</div>
        </a>

        <a
          href="https://www.linkedin.com/in/khrystal-battle-0333b812/"
          target="_blank"
          class="rounded-xl border p-5 hover:bg-gray-50"
        >
          <div class="text-xs uppercase text-gray-500">LinkedIn</div>
          <div class="mt-1 font-medium">View profile</div>
        </a>

        <a
          href="https://github.com/kboyd783"
          target="_blank"
          class="rounded-xl border p-5 hover:bg-gray-50"
        >
          <div class="text-xs uppercase text-gray-500">GitHub</div>
          <div class="mt-1 font-medium">View repos</div>
        </a>

        <a
          href="/work"
          class="rounded-xl border p-5 hover:bg-gray-50"
        >
          <div class="text-xs uppercase text-gray-500">Portfolio</div>
          <div class="mt-1 font-medium">See case studies</div>
        </a>
        <a
              href="/resume/kbattleresume.pdf"
              target="_blank"
              class="inline-flex items-center rounded-lg border px-6 py-3 text-sm font-medium hover:bg-gray-100 transition"
    >
      📄 View Resume
    </a>

      <a
          href="/resume/kbattleresume.pdf"
          download
          class="inline-flex items-center rounded-lg bg-black text-white px-6 py-3 text-sm font-medium hover:opacity-80 transition"
        >
          ⬇ Download Resume
        </a>


      </div>
    </section>
  </AppLayout>
</template>
