<section id="layanan" class="relative py-20 sm:py-28">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <p class="text-sm font-semibold uppercase tracking-widest text-xiw-cyan">Layanan</p>
      <h2 class="mt-2 font-display text-3xl font-bold text-white sm:text-4xl">Yang Bisa Kami Bantu</h2>
      <p class="mt-4 text-slate-400">Pilih layanan sesuai kebutuhan — semua dengan komunikasi jelas & timeline transparan.</p>
    </div>

    <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      @foreach ([
          ['icon' => 'fa-globe', 'title' => 'Jasa Website', 'desc' => 'Company profile, landing page, dashboard admin.'],
          ['icon' => 'fa-mobile', 'title' => 'Aplikasi Mobile', 'desc' => 'Android / cross-platform untuk TA & bisnis.'],
          ['icon' => 'fa-graduation-cap', 'title' => 'Skripsi & Tugas', 'desc' => 'Bimbingan TA, sistem skripsi, laporan.'],
          ['icon' => 'fa-plug', 'title' => 'API & Integrasi', 'desc' => 'Payment gateway, WA API, third-party.'],
      ] as $item)
        <div class="border-gradient group">
          <div class="border-gradient-inner p-6 transition duration-300 group-hover:bg-white/[0.03]">
            <div
              class="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-xiw-cyan/20 to-xiw-violet/20 text-2xl text-xiw-cyan shadow-neon-cyan transition group-hover:scale-105"
            >
              <i class="fa {{ $item['icon'] }}"></i>
            </div>
            <h3 class="font-display text-lg font-semibold text-white">{{ $item['title'] }}</h3>
            <p class="mt-2 text-sm text-slate-400">{{ $item['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
