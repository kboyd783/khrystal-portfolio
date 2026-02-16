<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { ref } from 'vue'

const activeImage = ref(null)

defineProps({
  project: { type: Object, required: true },
})
</script>

<template>
  <AppLayout>
    <a href="/work" class="text-sm underline text-gray-600">← Back to Work</a>

    <header class="mt-4">
      <div class="text-xs uppercase tracking-wide text-gray-500">
        {{ project.type }} • {{ project.year }}
      </div>

      <h1 class="mt-2 text-4xl font-semibold">{{ project.title }}</h1>

      <p class="mt-4 max-w-2xl text-gray-600">
        {{ project.summary }}
      </p>

      <div v-if="project.tags?.length" class="mt-6 flex flex-wrap gap-2">
        <span
          v-for="tag in project.tags"
          :key="tag"
          class="rounded-full border px-3 py-1 text-xs text-gray-600"
        >
          {{ tag }}
        </span>
      </div>
    </header>

    <!-- Meta -->
    <section class="mt-10 grid gap-4 rounded-lg border p-6 sm:grid-cols-3">
      <div>
        <div class="text-xs uppercase text-gray-500">Role</div>
        <div class="mt-1 text-sm">{{ project.role ?? '—' }}</div>
      </div>
      <div>
        <div class="text-xs uppercase text-gray-500">Timeline</div>
        <div class="mt-1 text-sm">{{ project.timeline ?? '—' }}</div>
      </div>
      <div>
        <div class="text-xs uppercase text-gray-500">Tools</div>
        <div class="mt-1 text-sm">
          <span v-if="project.tools?.length">{{ project.tools.join(', ') }}</span>
          <span v-else>—</span>
        </div>
      </div>
    </section>

    <!-- Problem -->
    <section v-if="project.problem" class="mt-10">
      <h2 class="text-2xl font-semibold">Problem</h2>
      <p class="mt-3 max-w-3xl text-gray-600">{{ project.problem }}</p>
    </section>

    <!-- Goals -->
    <section v-if="project.goals?.length" class="mt-10">
      <h2 class="text-2xl font-semibold">Goals</h2>
      <ul class="mt-3 list-disc space-y-2 pl-6 text-gray-600">
        <li v-for="g in project.goals" :key="g">{{ g }}</li>
      </ul>
    </section>

    <!-- Process -->
   <section>

      <div class="mt-4 grid gap-4 sm:grid-cols-2">
        <div v-for="step in project.process" :key="step.title" class="rounded-lg border p-5">
          <div class="text-sm font-medium">{{ step.title }}</div>
          <p class="mt-2 text-sm text-gray-600">{{ step.detail }}</p>
        </div>
      </div>
  </section>

    

<section v-if="project.process?.length" class="mt-10">
      <h2 class="text-2xl font-semibold">Iterations</h2>

      <ul class="mt-3 list-disc pl-6 text-gray-600">
        <li v-for="item in project.design_iterations" :key="item">
        
          {{ item }}

        </li>
      </ul>
      </section>

    <!-- Screenshots -->
<section v-if="project.images?.length" class="mt-12">
  <h2 class="text-2xl font-semibold">Process</h2>
  <p class="mt-2 text-gray-600">
    
    
Below is the process taken during this project</p>

<!-- <ul class="list-disc pl-6 space-y-2">

  <li>Personas created based on research findings </li>
  <li>Iterations of our color scheme, theme, and logo</li>
  <li>Iterations of the Chat session screen that I was responsible for</li>
  <li>The final prototype, colors, theme that was chosen.</li>

</ul> -->

  <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <figure
      v-for="img in project.images"
      :key="img.src"
      class="rounded-lg border bg-white p-3"
    >
      <img
        :src="img.src"
        :alt="img.caption || project.title"
        class="cursor-pointer rounded-lg border hover:opacity-80 transition"
        @click="activeImage = img"        
        loading="lazy"
      />
      <figcaption
        v-if="img.caption"
        class="mt-2 text-sm text-gray-600"
      >
        {{ img.caption }}
      </figcaption>
    </figure>
  </div>
  </section>

 <!-- Videos -->
<section v-if="project.videos?.length" class="mt-14">
  <h2 class="text-2xl font-semibold">Videos</h2>

  <div class="mt-6 space-y-10">
    <div v-for="vid in project.videos" :key="vid.src">
      <h3 class="text-lg font-medium">
        {{ vid.title || 'Project walkthrough' }}
      </h3>

      <!-- Embed -->
      <div v-if="vid.type === 'embed'" class="mt-3 mx-auto w-full max-w-4xl">
        <div class="aspect-video overflow-hidden rounded-lg border">
          <iframe
            :src="vid.src"
            class="h-full w-full"
            frameborder="0"
            allow="autoplay; fullscreen; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
      </div>

      <!-- Local MP4 -->
      <div v-else-if="vid.type === 'local'" class="mt-3 mx-auto w-full max-w-4xl">
        <video controls class="w-full rounded-lg border">
          <source :src="vid.src" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
      </div>

      <!-- Fallback -->
      <p v-else class="mt-3 text-sm text-gray-500">
        Video type not supported.
      </p>
    </div>
  </div>
</section>



    <!-- Outcomes -->
    <section v-if="project.outcomes?.length" class="mt-10">
      <h2 class="text-2xl font-semibold">Outcomes</h2>
      <ul class="mt-3 list-disc space-y-2 pl-6 text-gray-600">
        <li v-for="o in project.outcomes" :key="o">{{ o }}</li>
      </ul>
    </section>

    <!-- Next steps -->
    <section v-if="project.next_steps?.length" class="mt-10">
      <h2 class="text-2xl font-semibold">Next steps</h2>
      <ul class="mt-3 list-disc space-y-2 pl-6 text-gray-600">
        <li v-for="n in project.next_steps" :key="n">{{ n }}</li>
      </ul>
    </section>

  <div
    v-if="activeImage"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 p-6"
    @click="activeImage = null">
    <div class="max-w-5xl w-full">
    <img
      :src="activeImage.src"
      :alt="activeImage.caption"
      class="w-full rounded-lg shadow-2xl"
    />

    <p class="mt-4 text-center text-white">
      {{ activeImage.caption }}
    </p>
  </div>
</div>

  </AppLayout>
</template>
