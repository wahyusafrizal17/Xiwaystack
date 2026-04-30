<section id="testimoni" class="relative py-20 sm:py-28">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <p class="text-sm font-semibold uppercase tracking-widest text-xiw-gold">Testimoni</p>
      <h2 class="mt-2 font-display text-3xl font-bold text-white sm:text-4xl">Kata Klien</h2>
      <p class="mt-3 text-slate-400">Pengalaman nyata dari mahasiswa & UMKM yang sudah bekerja sama.</p>
    </div>

    <div class="swiper testimoni-swiper mt-14 pb-4">
      <div class="swiper-wrapper">
        @foreach ([
            ['name' => 'Nadia Rahma', 'role' => 'Mahasiswi TI', 'text' => 'Dibantu aplikasi skripsi dari nol sampai sidang. Komunikasinya enak dan tepat waktu.', 'stars' => 5, 'img' => 'https://i.pravatar.cc/120?img=5'],
            ['name' => 'Rizky Aditya', 'role' => 'Founder Startup', 'text' => 'Company profile kami selesai cepat dan tampilannya profesional. Recommended.', 'stars' => 5, 'img' => 'https://i.pravatar.cc/120?img=12'],
            ['name' => 'Dewi Sartika', 'role' => 'Mahasiswa SI', 'text' => 'App mobile TA selesai sesuai deadline. Kode rapi dan dokumentasi jelas.', 'stars' => 5, 'img' => 'https://i.pravatar.cc/120?img=9'],
            ['name' => 'Budi Santoso', 'role' => 'Alumni TI', 'text' => 'Bimbingan dari proposal sampai sidang sangat membantu. Struktur analisisnya oke.', 'stars' => 5, 'img' => 'https://i.pravatar.cc/120?img=14'],
            ['name' => 'Siti Aminah', 'role' => 'UMKM', 'text' => 'Toko online jadi lebih modern, stok & order lebih terkontrol.', 'stars' => 5, 'img' => 'https://i.pravatar.cc/120?img=16'],
        ] as $t)
          <div class="swiper-slide h-auto">
            <div
              class="glass-panel flex h-full flex-col rounded-2xl border border-white/10 p-6 shadow-glass backdrop-blur-xl"
            >
              <div class="mb-3 flex gap-0.5 text-xiw-gold">
                @for ($i = 0; $i < $t['stars']; $i++)
                  <i class="fa fa-star"></i>
                @endfor
              </div>
              <p class="flex-1 text-sm leading-relaxed text-slate-300">“{{ $t['text'] }}”</p>
              <div class="mt-6 flex items-center gap-3 border-t border-white/10 pt-4">
                <img
                  src="{{ $t['img'] }}"
                  alt=""
                  class="h-11 w-11 rounded-full object-cover ring-2 ring-xiw-cyan/30"
                  loading="lazy"
                />
                <div>
                  <p class="font-semibold text-white">{{ $t['name'] }}</p>
                  <p class="text-xs text-slate-500">{{ $t['role'] }}</p>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="mt-8 flex justify-center gap-3">
        <button
          type="button"
          class="testimoni-prev flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 text-xiw-cyan transition hover:bg-white/5"
          aria-label="Sebelumnya"
        >
          <i class="fa fa-chevron-left"></i>
        </button>
        <button
          type="button"
          class="testimoni-next flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 text-xiw-cyan transition hover:bg-white/5"
          aria-label="Berikutnya"
        >
          <i class="fa fa-chevron-right"></i>
        </button>
      </div>
    </div>
  </div>
</section>
