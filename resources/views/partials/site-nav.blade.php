@php
  $isHome = request()->path() === '' || request()->path() === '/';
@endphp

<header
  class="fixed inset-x-0 top-0 z-50 border-b border-white/5 bg-xiw-navy/80 backdrop-blur-xl"
>
  <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
    <a href="{{ url('/') }}" class="font-display text-xl font-bold tracking-tight text-white">
      <span class="bg-gradient-to-r from-xiw-cyan to-xiw-violet bg-clip-text text-transparent">XIWAY</span
      ><span class="text-white/90">STACK</span>
    </a>

    <nav class="hidden items-center gap-8 md:flex" aria-label="Utama">
      <a
        href="{{ url('/') }}#hero"
        class="text-sm font-medium transition hover:text-xiw-cyan {{ $isHome ? 'text-xiw-cyan' : 'text-slate-300' }}"
        >Home</a
      >
      <a href="{{ url('/') }}#layanan" class="text-sm font-medium text-slate-300 transition hover:text-xiw-cyan"
        >Layanan</a
      >
      <a href="{{ url('/') }}#portfolio" class="text-sm font-medium text-slate-300 transition hover:text-xiw-cyan"
        >Portfolio</a
      >
      <a href="{{ url('/') }}#testimoni" class="text-sm font-medium text-slate-300 transition hover:text-xiw-cyan"
        >Testimoni</a
      >
      <a
        href="{{ route('sourcecode.index') }}"
        class="text-sm font-medium transition hover:text-xiw-cyan {{ request()->routeIs('sourcecode.*') ? 'text-xiw-cyan' : 'text-slate-300' }}"
        >Sourcecode</a
      >
      <a href="{{ url('/') }}#faq" class="text-sm font-medium text-slate-300 transition hover:text-xiw-cyan"
        >FAQ</a
      >
    </nav>

    <div class="flex items-center gap-3">
      <x-ui.button
        variant="primary"
        href="https://wa.me/6281318960576?text={{ urlencode('Halo, saya ingin konsultasi tentang project.') }}"
        external
        class="!px-4 !py-2.5 text-xs sm:!px-6 sm:!py-3.5 sm:text-sm"
      >
        <i class="fa fa-whatsapp text-lg"></i> Konsultasi Gratis
      </x-ui.button>
      <button
        type="button"
        id="mobile-nav-toggle"
        class="rounded-lg border border-white/10 p-2 text-white md:hidden"
        aria-label="Menu"
      >
        <i class="fa fa-bars"></i>
      </button>
    </div>
  </div>

  <div id="mobile-nav" class="hidden border-t border-white/5 bg-xiw-navy/95 px-4 py-4 md:hidden">
    <div class="flex flex-col gap-3">
      <a href="{{ url('/') }}#hero" class="py-2 text-slate-300">Home</a>
      <a href="{{ url('/') }}#layanan" class="py-2 text-slate-300">Layanan</a>
      <a href="{{ url('/') }}#portfolio" class="py-2 text-slate-300">Portfolio</a>
      <a href="{{ url('/') }}#testimoni" class="py-2 text-slate-300">Testimoni</a>
      <a href="{{ route('sourcecode.index') }}" class="py-2 text-slate-300">Sourcecode</a>
      <a href="{{ url('/') }}#faq" class="py-2 text-slate-300">FAQ</a>
    </div>
  </div>
</header>

@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var btn = document.getElementById('mobile-nav-toggle');
      var panel = document.getElementById('mobile-nav');
      if (!btn || !panel) return;
      btn.addEventListener('click', function () {
        panel.classList.toggle('hidden');
      });
    });
  </script>
@endpush
