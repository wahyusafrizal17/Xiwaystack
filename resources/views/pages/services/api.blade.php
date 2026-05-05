@extends('layouts.app')

@section('title', 'Jasa API & Integrasi Sistem')
@section('meta_description', 'Jasa integrasi API: payment gateway, WhatsApp, webhook, automation, dan koneksi sistem. Konsultasi gratis via WhatsApp.')

@section('content')
  <section class="relative overflow-hidden py-16 sm:py-20">
    <div class="pointer-events-none absolute inset-0 bg-hero-mesh"></div>
    <div class="tech-grid pointer-events-none absolute inset-0 opacity-60"></div>
    <div class="relative mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
      <x-ui.badge variant="cyan">API & Integrasi</x-ui.badge>
      <h1 class="mt-6 font-display text-3xl font-extrabold text-white sm:text-5xl">Jasa API & Integrasi Sistem</h1>
      <p class="mt-4 max-w-2xl text-slate-400">
        Hubungkan aplikasi kamu dengan layanan pihak ketiga: payment, WhatsApp, email, Google Sheet, dan lainnya.
      </p>
      <div class="mt-8 flex flex-wrap gap-4">
        <x-ui.button variant="whatsapp" href="https://wa.me/6281318960576?text={{ urlencode('Halo, saya butuh integrasi API untuk aplikasi saya. Bisa konsultasi?') }}" external>
          <i class="fa fa-whatsapp"></i> Konsultasi Gratis
        </x-ui.button>
        <x-ui.button variant="outline" href="{{ url('/') }}#layanan">Lihat Layanan <i class="fa fa-arrow-right"></i></x-ui.button>
      </div>

      <div class="mt-12 grid gap-6 sm:grid-cols-3">
        <x-ui.card>
          <p class="text-sm font-semibold text-white">Payment Gateway</p>
          <p class="mt-2 text-sm text-slate-400">Midtrans/Xendit-style flow, webhook, status transaksi.</p>
        </x-ui.card>
        <x-ui.card>
          <p class="text-sm font-semibold text-white">WhatsApp / Notifikasi</p>
          <p class="mt-2 text-sm text-slate-400">Notifikasi order, OTP, broadcast, integrasi CRM.</p>
        </x-ui.card>
        <x-ui.card>
          <p class="text-sm font-semibold text-white">Automation</p>
          <p class="mt-2 text-sm text-slate-400">Cron, queue, sync data antar sistem, export/import.</p>
        </x-ui.card>
      </div>
    </div>
  </section>
@endsection

