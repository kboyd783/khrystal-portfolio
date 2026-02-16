<script setup>
import { Link, usePage } from '@inertiajs/vue3'

const page = usePage()
</script>

<template>
  <div class="relative min-h-screen text-gray-900">

  <!-- Background image layer -->
  <div
    class="pointer-events-none absolute inset-0 -z-10 bg-[length:400px] opacity-50"
    style="background-image: url('/images/background/background.png');"
  ></div>

  <!-- Optional base color (fallback while image loads) -->
  <div class="absolute inset-0 -z-20 bg-white"></div>


    <!-- 🌟 Background character -->
    <img
      src="/images/brand/character.png"
      alt="Character"
      class="pointer-events-none absolute bottom-0 right-0 hidden lg:block w-[320px] opacity-[0.50]"
    />

    <!-- Header / Nav -->
    <header class="border-b relative z-10">
      <nav class="relative mx-auto flex max-w-6xl items-center justify-between px-6 py-4">


        <!-- Logo -->
        <Link href="/" class="absolute left-6 top-1/2 -translate-y-1/2">
          <img
            src="/images/brand/KBlogo.png"
            alt="Khrystal Battle"
            class="h-18 w-auto"
          />
        </Link>


        <!-- Navigation -->

        

        <div class="flex gap-6 text-lg ml-24 lg:ml-40">

          <Link
            href="/work"
            :class="page.url.startsWith('/work') ? 'underline font-medium' : 'hover:underline'"
          >
            Work
          </Link>

          <Link
            href="/about"
            :class="page.url.startsWith('/about') ? 'underline font-medium' : 'hover:underline'"
          >
            About
          </Link>

          <Link
            href="/contact"
            :class="page.url.startsWith('/contact') ? 'underline font-medium' : 'hover:underline'"
          >
            Contact
          </Link>

        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <main class="relative z-10 mx-auto max-w-6xl px-6 py-10">
      <slot />
    </main>

    <!-- Footer -->
    <footer class="border-t py-6 text-center text-sm text-gray-500 relative z-10">
      © {{ new Date().getFullYear() }} Khrystal Battle
    </footer>

  </div>
</template>
