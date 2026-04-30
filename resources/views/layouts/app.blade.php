<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Xiwaystack — jasa aplikasi web, mobile, skripsi & integrasi API. Konsultasi gratis.')">
    <title>@yield('title', 'Xiwaystack') — Jasa Aplikasi & Skripsi</title>
    <link href="{{ asset('assets/images/logo.png') }}" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700;800&display=swap"
      rel="stylesheet"
    >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
  </head>
  <body class="min-h-screen bg-xiw-navy font-sans text-slate-300">
    @include('partials.site-nav')

    <main class="pt-20">
      @yield('content')
    </main>

    @include('partials.site-footer')

    <a
      href="#"
      id="scroll-top"
      class="fixed bottom-6 right-6 z-40 flex h-12 w-12 items-center justify-center rounded-2xl border border-white/10 bg-white/5 text-xiw-cyan opacity-0 shadow-glass backdrop-blur transition hover:bg-xiw-cyan/20"
      aria-label="Ke atas"
      style="pointer-events: none"
      ><i class="fa fa-arrow-up"></i
    ></a>

    @stack('scripts')
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var btn = document.getElementById('scroll-top');
        if (!btn) return;
        window.addEventListener('scroll', function () {
          if (window.scrollY > 400) {
            btn.style.opacity = '1';
            btn.style.pointerEvents = 'auto';
          } else {
            btn.style.opacity = '0';
            btn.style.pointerEvents = 'none';
          }
        });
        btn.addEventListener('click', function (e) {
          e.preventDefault();
          window.scrollTo({ top: 0, behavior: 'smooth' });
        });
      });
    </script>
  </body>
</html>
