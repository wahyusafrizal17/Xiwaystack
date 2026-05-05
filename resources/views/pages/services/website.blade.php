@extends('layouts.app')

@section('title', 'Jasa Pembuatan Website')
@section('meta_description', 'Jasa pembuatan website (landing page, company profile, dashboard) — modern, cepat, dan bisa custom. Mulai Rp250.000. Konsultasi gratis via WhatsApp.')

@section('content')
  <section class="relative overflow-hidden py-16 sm:py-20">
    <div class="pointer-events-none absolute inset-0 bg-hero-mesh"></div>
    <div class="tech-grid pointer-events-none absolute inset-0 opacity-60"></div>
    <div class="relative mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
      <x-ui.badge variant="cyan">Web Development</x-ui.badge>
      <h1 class="mt-6 font-display text-3xl font-extrabold text-white sm:text-5xl">Jasa Pembuatan Website</h1>
      <p class="mt-4 max-w-2xl text-slate-400">
        Cocok untuk UMKM, personal brand, atau kebutuhan skripsi. Kami buat website yang cepat, responsif, dan tampil premium.
      </p>
      <div class="mt-8 flex flex-wrap gap-4">
        <x-ui.button variant="whatsapp" href="https://wa.me/6281318960576?text={{ urlencode('Halo, saya ingin bikin website. Bisa konsultasi?') }}" external>
          <i class="fa fa-whatsapp"></i> Konsultasi Gratis
        </x-ui.button>
        <x-ui.button variant="outline" href="{{ url('/') }}#portfolio">Lihat Portfolio <i class="fa fa-arrow-right"></i></x-ui.button>
      </div>

      <div class="mt-12 grid gap-6 sm:grid-cols-3">
        <x-ui.card>
          <p class="text-sm font-semibold text-white">Landing Page</p>
          <p class="mt-2 text-sm text-slate-400">Untuk promosi produk/jasa, fokus ke konversi & CTA.</p>
        </x-ui.card>
        <x-ui.card>
          <p class="text-sm font-semibold text-white">Company Profile</p>
          <p class="mt-2 text-sm text-slate-400">Tampil kredibel: layanan, portofolio, kontak, testimoni.</p>
        </x-ui.card>
        <x-ui.card>
          <p class="text-sm font-semibold text-white">Dashboard / Admin</p>
          <p class="mt-2 text-sm text-slate-400">CRUD, laporan, role, export, integrasi API.</p>
        </x-ui.card>
      </div>
    </div>
  </section>
@endsection

