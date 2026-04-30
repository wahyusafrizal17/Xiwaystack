<footer class="border-t border-white/5 bg-xiw-navy/90">
  <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">
      <div class="lg:col-span-2">
        <a href="{{ url('/') }}" class="font-display text-xl font-bold text-white">
          <span class="bg-gradient-to-r from-xiw-cyan to-xiw-violet bg-clip-text text-transparent">XIWAY</span
          ><span class="text-white/90">STACK</span>
        </a>
        <p class="mt-4 max-w-md text-sm leading-relaxed text-slate-400">
          Jasa pembuatan aplikasi web & mobile, bimbingan skripsi, dan integrasi API — cepat, transparan, dan
          sesuai kebutuhanmu.
        </p>
        <div class="mt-6 flex gap-4">
          <a
            href="https://instagram.com/wahyuu.sz"
            target="_blank"
            rel="noopener"
            class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 text-slate-400 transition hover:border-xiw-cyan/50 hover:text-xiw-cyan"
            aria-label="Instagram"
            ><i class="fa fa-instagram"></i
          ></a>
          <a
            href="https://www.tiktok.com/@xiwaystack.id"
            target="_blank"
            rel="noopener"
            class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 text-slate-400 transition hover:border-xiw-cyan/50 hover:text-xiw-cyan"
            aria-label="TikTok"
            ><i class="fa fa-music"></i
          ></a>
          <a
            href="https://wa.me/6281318960576"
            target="_blank"
            rel="noopener"
            class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 text-slate-400 transition hover:border-xiw-cyan/50 hover:text-xiw-cyan"
            aria-label="WhatsApp"
            ><i class="fa fa-whatsapp"></i
          ></a>
        </div>
      </div>

      <div>
        <h4 class="font-display text-sm font-semibold uppercase tracking-wider text-white">Navigasi</h4>
        <ul class="mt-4 space-y-3 text-sm">
          <li><a href="{{ url('/') }}#layanan" class="text-slate-400 transition hover:text-xiw-cyan">Layanan</a></li>
          <li><a href="{{ url('/') }}#portfolio" class="text-slate-400 transition hover:text-xiw-cyan">Portfolio</a></li>
          <li><a href="{{ route('sourcecode.index') }}" class="text-slate-400 transition hover:text-xiw-cyan">Sourcecode</a></li>
          <li><a href="{{ url('/') }}#testimoni" class="text-slate-400 transition hover:text-xiw-cyan">Testimoni</a></li>
        </ul>
      </div>

      <div>
        <h4 class="font-display text-sm font-semibold uppercase tracking-wider text-white">Kontak</h4>
        <ul class="mt-4 space-y-3 text-sm text-slate-400">
          <li class="flex items-start gap-2">
            <i class="fa fa-whatsapp mt-0.5 text-xiw-cyan"></i>
            <a href="https://wa.me/6281318960576" class="transition hover:text-xiw-cyan">0813-1896-0576</a>
          </li>
          <li class="flex items-start gap-2">
            <i class="fa fa-globe mt-0.5 text-xiw-cyan"></i>
            <span>xiwaystack.com</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fa fa-map-marker mt-0.5 text-xiw-cyan"></i>
            <span>Cimahi, Jawa Barat</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="mt-12 border-t border-white/5 pt-8 text-center text-xs text-slate-500">
      © {{ date('Y') }} Xiwaystack. All rights reserved.
    </div>
  </div>
</footer>
