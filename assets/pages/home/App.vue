<script setup>
import logoUrl from '../../images/logo.webp?no-inline'

defineProps({
  state: { type: Object, required: true },
})

const address = [
  'Lot 3E Johnritz Subdivision,',
  'Buena Oro, Macasandig,',
  'Cagayan de Oro,',
  'Misamis Oriental, Mindanao,',
  'Philippines 9000',
]

const contacts = [
  {
    label: '(+63) 997 128 5404',
    href: 'tel:+639971285404',
    icon: 'M3 5a2 2 0 0 1 2-2h3.28a1 1 0 0 1 .95.68l1.5 4.49a1 1 0 0 1-.5 1.21l-2.26 1.13a11.04 11.04 0 0 0 5.52 5.52l1.13-2.26a1 1 0 0 1 1.21-.5l4.49 1.5a1 1 0 0 1 .68.95V19a2 2 0 0 1-2 2h-1C9.72 21 3 14.28 3 6V5Z',
  },
  {
    label: 'champoyradoo@gmail.com',
    href: 'mailto:champoyradoo@gmail.com',
    icon: 'M3 8l7.89 5.26a2 2 0 0 0 2.22 0L21 8M5 19h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2Z',
  },
  {
    label: 'github.com/poychamp',
    href: 'https://github.com/poychamp/',
    icon: 'M10 20l4-16m4 4 4 4-4 4M6 16l-4-4 4-4',
  },
  {
    label: 'linkedin.com/in/leoncio-cesar-polestico',
    href: 'https://www.linkedin.com/in/leoncio-cesar-polestico-b005a586/',
    icon: 'M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0ZM12 14a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7Z',
  },
]
</script>

<template>
  <main
    class="flex min-h-[100dvh] w-full flex-col bg-neutral-950 text-neutral-100
           pt-[env(safe-area-inset-top)] pr-[env(safe-area-inset-right)]
           pb-[env(safe-area-inset-bottom)] pl-[env(safe-area-inset-left)]"
  >
    <div class="mx-auto flex w-full max-w-7xl grow flex-col px-4 md:px-6 lg:px-8">
      <header class="flex shrink-0 items-center justify-between py-4">
        <a href="/" class="group flex cursor-pointer items-center gap-3">
          <img :src="logoUrl" alt="" width="32" height="32" class="h-8 w-8 rounded-full ring-2 ring-gold-500" />
          <span class="flex flex-col">
            <span class="text-sm font-semibold text-white transition-colors group-hover:text-gold-300">
              Leoncio Cesar Polestico
            </span>
            <span class="text-xs text-neutral-400">Cagayan de Oro, Philippines</span>
          </span>
        </a>
        <nav aria-label="Main">
          <a
            href="#"
            class="cursor-pointer text-sm font-medium text-neutral-300 transition-colors hover:text-white"
          >
            Blog
          </a>
        </nav>
      </header>
      <div aria-hidden="true" class="h-px shrink-0 bg-linear-to-r from-transparent via-neutral-800 to-transparent"></div>

      <div class="my-auto space-y-8 py-12 md:py-20">
        <div class="space-y-4">
          <h1 class="text-3xl leading-tight font-extrabold tracking-tight text-white md:text-4xl lg:text-5xl">
            Champoy's Freelance
          </h1>
          <h2 class="text-xl font-bold tracking-tight text-white md:text-2xl">
            Web Development and Programming
          </h2>
          <span class="inline-flex rounded-full bg-gold-950 px-3 py-1 text-sm font-semibold text-gold-200">
            9 years’ professional experience
          </span>
        </div>

        <div class="grid gap-5 md:grid-cols-2">
          <div class="rounded-2xl border border-neutral-800 bg-neutral-900 p-4 md:p-6">
            <h3 class="mb-4 text-base leading-snug font-semibold text-white">Contact</h3>
            <ul class="space-y-3">
              <li v-for="contact in contacts" :key="contact.href" class="flex min-w-0 items-center gap-3">
                <svg
                  class="h-5 w-5 shrink-0 text-neutral-400"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  aria-hidden="true"
                >
                  <path :d="contact.icon" />
                </svg>
                <a
                  :href="contact.href"
                  :target="contact.href.startsWith('http') ? '_blank' : undefined"
                  :rel="contact.href.startsWith('http') ? 'noopener noreferrer' : undefined"
                  class="min-w-0 cursor-pointer text-sm font-medium break-words text-gold-400 transition-colors hover:text-gold-300"
                >
                  {{ contact.label }}
                </a>
              </li>
            </ul>
          </div>

          <div class="rounded-2xl border border-neutral-800 bg-neutral-900 p-4 md:p-6">
            <h3 class="mb-4 text-base leading-snug font-semibold text-white">Address</h3>
            <address class="text-base text-neutral-300 not-italic">
              <span v-for="line in address" :key="line" class="block">{{ line }}</span>
            </address>
          </div>
        </div>
      </div>

      <div aria-hidden="true" class="h-px shrink-0 bg-linear-to-r from-transparent via-neutral-800 to-transparent"></div>
      <footer class="shrink-0 py-6 text-xs text-neutral-400 md:py-8 md:text-sm">
        © {{ state.year }} {{ state.origin }}
      </footer>
    </div>
  </main>
</template>
