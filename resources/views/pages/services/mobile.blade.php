@extends('layouts.app')

@section('title', 'Jasa Aplikasi Mobile')
@section('meta_description', 'Jasa pembuatan aplikasi mobile Android/cross-platform untuk bisnis & tugas akhir. Mulai Rp250.000. Konsultasi gratis via WhatsApp.')

@section('content')
  <section class="relative overflow-hidden py-16 sm:py-20">
    <div class="pointer-events-none absolute inset-0 bg-hero-mesh"></div>
    <div class="tech-grid pointer-events-none absolute inset-0 opacity-60"></div>
    <div class="relative mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
      <x-ui.badge variant="violet">Mobile App</x-ui.badge>
      <h1 class="mt-6 font-display text-3xl font-extrabold text-white sm:text-5xl">Jasa Aplikasi Mobile</h1>
      <p class="mt-4 max-w-2xl text-slate-400">
        Buat aplikasi Android untuk UMKM, internal kantor, atau tugas akhir. Bisa integrasi API, login, dan fitur sesuai kebutuhan.
      </p>
      <div class="mt-8 flex flex-wrap gap-4">
        <x-ui.button variant="whatsapp" href="https://wa.me/6281318960576?text={{ urlencode('Halo, saya ingin bikin aplikasi mobile. Bisa konsultasi?') }}" external>
          <i class="fa fa-whatsapp"></i> Konsultasi Gratis
        </x-ui.button>
        <x-ui.button variant="outline" href="{{ url('/') }}#layanan">Lihat Layanan <i class="fa fa-arrow-right"></i></x-ui.button>
      </div>

      <div class="mt-12 grid gap-6 sm:grid-cols-3">
        <x-ui.card>
          <p class="text-sm font-semibold text-white">UI Modern</p>
          <p class="mt-2 text-sm text-slate-400">Desain clean, animasi halus, responsif untuk berbagai device.</p>
        </x-ui.card>
        <x-ui.card>
          <p class="text-sm font-semibold text-white">Integrasi API</p>
          <p class="mt-2 text-sm text-slate-400">Auth, payment, WhatsApp, maps, dan layanan pihak ketiga.</p>
        </x-ui.card>
        <x-ui.card>
          <p class="text-sm font-semibold text-white">Siap Demo</p>
          <p class="mt-2 text-sm text-slate-400">Build APK, dokumentasi singkat, dan support revisi sesuai paket.</p>
        </x-ui.card>
      </div>
    </div>
  </section>
@endsection

