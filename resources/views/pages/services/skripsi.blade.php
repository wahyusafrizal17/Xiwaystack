@extends('layouts.app')

@section('title', 'Jasa Skripsi & Tugas Akhir (IT)')
@section('meta_description', 'Bantuan pembuatan aplikasi skripsi/TA (web/mobile), bimbingan fitur, revisi, dan dokumentasi. Konsultasi gratis via WhatsApp.')

@section('content')
  <section class="relative overflow-hidden py-16 sm:py-20">
    <div class="pointer-events-none absolute inset-0 bg-hero-mesh"></div>
    <div class="tech-grid pointer-events-none absolute inset-0 opacity-60"></div>
    <div class="relative mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
      <x-ui.badge variant="gold">Skripsi / Tugas Akhir</x-ui.badge>
      <h1 class="mt-6 font-display text-3xl font-extrabold text-white sm:text-5xl">Jasa Skripsi & Tugas Akhir (IT)</h1>
      <p class="mt-4 max-w-2xl text-slate-400">
        Fokus untuk kebutuhan akademik: aplikasi, fitur sesuai judul, laporan, dan revisi. Komunikasi jelas dan progress terukur.
      </p>
      <div class="mt-8 flex flex-wrap gap-4">
        <x-ui.button variant="whatsapp" href="https://wa.me/6281318960576?text={{ urlencode('Halo, saya ingin bantuan skripsi/TA (aplikasi). Bisa konsultasi?') }}" external>
          <i class="fa fa-whatsapp"></i> Konsultasi Gratis
        </x-ui.button>
        <x-ui.button variant="outline" href="{{ route('sourcecode.index') }}">Lihat Sourcecode <i class="fa fa-arrow-right"></i></x-ui.button>
      </div>

      <div class="mt-12 grid gap-6 sm:grid-cols-3">
        <x-ui.card>
          <p class="text-sm font-semibold text-white">Aplikasi Sesuai Judul</p>
          <p class="mt-2 text-sm text-slate-400">CRUD, laporan, metode SPK, QR, autentikasi, dll.</p>
        </x-ui.card>
        <x-ui.card>
          <p class="text-sm font-semibold text-white">Bimbingan & Revisi</p>
          <p class="mt-2 text-sm text-slate-400">Diskusi fitur, revisi sesuai arahan dosen/pembimbing.</p>
        </x-ui.card>
        <x-ui.card>
          <p class="text-sm font-semibold text-white">Dokumentasi</p>
          <p class="mt-2 text-sm text-slate-400">Bantu outline dan penjelasan modul agar mudah dipresentasikan.</p>
        </x-ui.card>
      </div>
    </div>
  </section>
@endsection

