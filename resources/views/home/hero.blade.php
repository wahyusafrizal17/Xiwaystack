<section id="hero" class="relative min-h-[90vh] overflow-hidden">
  <div class="pointer-events-none absolute inset-0 bg-hero-mesh"></div>
  <div class="tech-grid pointer-events-none absolute inset-0 opacity-60"></div>
  <canvas id="hero-particles" class="pointer-events-none absolute inset-0 h-full w-full"></canvas>
  <div
    class="pointer-events-none absolute -left-32 top-1/4 h-96 w-96 animate-glow-pulse rounded-full bg-xiw-cyan/20 blur-3xl"
  ></div>
  <div
    class="pointer-events-none absolute -right-24 bottom-1/4 h-80 w-80 animate-glow-pulse rounded-full bg-xiw-violet/25 blur-3xl [animation-delay:1s]"
  ></div>

  <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-4 py-16 sm:px-6 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:py-24">
    <div class="animate-fade-in">
      <x-ui.badge variant="gold" class="mb-6">Mulai Rp250.000</x-ui.badge>
      <h1 class="font-display text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
        Buat Aplikasi<br />
        <span class="text-gradient">Impianmu</span>
      </h1>
      <p class="mt-6 max-w-xl text-base leading-relaxed text-slate-400 sm:text-lg">
        Web, mobile, skripsi & tugas akhir — dari ide sampai deploy. Konsultasi gratis, komunikasi via WhatsApp, dan
        solusi yang bisa disesuaikan budget kamu.
      </p>
      <div class="mt-8 flex flex-wrap items-center gap-4">
        <x-ui.button
          variant="whatsapp"
          href="https://wa.me/6281318960576?text={{ urlencode('Halo, saya ingin konsultasi project.') }}"
          external
        >
          <i class="fa fa-whatsapp"></i> Konsultasi Gratis
        </x-ui.button>
        <x-ui.button variant="outline" href="{{ url('/') }}#layanan"> Lihat Layanan <i class="fa fa-arrow-right"></i> </x-ui.button>
      </div>
    </div>

    <div class="relative flex justify-center lg:justify-end">
      <div
        class="relative w-full max-w-lg animate-float rounded-3xl border border-white/10 bg-gradient-to-br from-white/[0.08] to-transparent p-6 shadow-glass backdrop-blur-xl"
      >
        <div class="absolute -right-4 -top-4 h-24 w-24 rounded-full bg-xiw-cyan/20 blur-2xl"></div>
        <div class="absolute -bottom-6 -left-6 h-32 w-32 rounded-full bg-xiw-violet/20 blur-3xl"></div>
        {{-- Illustration: laptop + dashboard --}}
        <svg viewBox="0 0 400 280" class="relative z-10 w-full" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <defs>
            <linearGradient id="g1" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" style="stop-color:#00D1FF;stop-opacity:0.9" />
              <stop offset="100%" style="stop-color:#7B61FF;stop-opacity:0.8" />
            </linearGradient>
          </defs>
          <rect x="40" y="40" width="320" height="200" rx="12" fill="#0f1629" stroke="url(#g1)" stroke-width="2" />
          <rect x="55" y="58" width="290" height="165" rx="6" fill="#0B0F1A" />
          <rect x="65" y="72" width="80" height="8" rx="2" fill="#00D1FF" opacity="0.6" />
          <rect x="65" y="88" width="120" height="6" rx="2" fill="#64748b" />
          <rect x="65" y="110" width="270" height="40" rx="4" fill="#1e293b" />
          <rect x="75" y="120" width="60" height="20" rx="2" fill="#00D1FF" opacity="0.4" />
          <rect x="145" y="120" width="60" height="20" rx="2" fill="#7B61FF" opacity="0.4" />
          <rect x="215" y="120" width="60" height="20" rx="2" fill="#FFD166" opacity="0.3" />
          <rect x="65" y="165" width="270" height="45" rx="4" fill="#1e293b" />
          <path d="M120 248 L280 248 L260 268 L140 268 Z" fill="#1e293b" stroke="url(#g1)" stroke-width="1" />
          <circle cx="340" cy="60" r="28" fill="rgba(0,209,255,0.15)" />
          <text x="328" y="68" fill="#00D1FF" font-family="monospace" font-size="18">&lt;/&gt;</text>
        </svg>
      </div>
    </div>
  </div>
</section>
