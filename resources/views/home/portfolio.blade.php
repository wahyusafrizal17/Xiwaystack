<section id="portfolio" class="relative py-20 sm:py-28">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col items-start justify-between gap-6 md:flex-row md:items-end">
      <div>
        <p class="text-sm font-semibold uppercase tracking-widest text-xiw-cyan">Portfolio</p>
        <h2 class="mt-2 font-display text-3xl font-bold text-white sm:text-4xl">Hasil Kerja</h2>
        <p class="mt-3 max-w-lg text-slate-400">Cuplikan project yang pernah kami handle — dari skripsi hingga produksi.</p>
      </div>
      <x-ui.button variant="outline" href="{{ route('sourcecode.index') }}">
        Lihat Sourcecode <i class="fa fa-arrow-right"></i>
      </x-ui.button>
    </div>

    <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      @foreach ([
          ['title' => 'E-Commerce Laravel', 'tag' => 'Web', 'img' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&q=80'],
          ['title' => 'Company Profile', 'tag' => 'Web', 'img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80'],
          ['title' => 'Sistem SPK', 'tag' => 'Web', 'img' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80'],
          ['title' => 'Buku Tamu Digital', 'tag' => 'Web / QR', 'img' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&q=80'],
          ['title' => 'API Payment', 'tag' => 'Integrasi', 'img' => 'https://images.unsplash.com/photo-1633356122544-f134324a0ce5?w=600&q=80'],
          ['title' => 'App Skripsi TA', 'tag' => 'Mobile', 'img' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=600&q=80'],
      ] as $p)
        <article
          class="group relative overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03] transition hover:border-xiw-cyan/30"
        >
          <div class="aspect-[16/10] overflow-hidden">
            <img
              src="{{ $p['img'] }}"
              alt="{{ $p['title'] }}"
              class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
              loading="lazy"
            />
            <div
              class="absolute inset-0 bg-gradient-to-t from-xiw-navy via-xiw-navy/40 to-transparent opacity-80 transition group-hover:opacity-90"
            ></div>
          </div>
          <div class="absolute inset-0 flex flex-col justify-end p-5">
            <span class="text-xs font-medium text-xiw-cyan">{{ $p['tag'] }}</span>
            <h3 class="font-display text-lg font-semibold text-white">{{ $p['title'] }}</h3>
            <a
              href="https://wa.me/6281318960576?text={{ urlencode('Halo, saya tertarik dengan project serupa: ' . $p['title']) }}"
              target="_blank"
              rel="noopener"
              class="mt-3 inline-flex w-max items-center gap-2 text-sm font-medium text-xiw-gold opacity-0 transition group-hover:opacity-100"
            >
              Lihat Detail <i class="fa fa-arrow-right text-xs"></i>
            </a>
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section>
