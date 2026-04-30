@extends('layouts.app')

@section('title', 'Beranda')

@section('meta_description', 'Xiwaystack — jasa aplikasi web, mobile, skripsi & API. Mulai Rp250.000. Konsultasi gratis.')

@section('content')
  @include('home.hero')
  @include('home.services')
  @include('home.advantages')
  @include('home.portfolio')
  @include('home.testimonials')
  @include('home.cta')
  @include('home.faq')
@endsection

@push('styles')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof Swiper === 'undefined') return;
      new Swiper('.testimoni-swiper', {
        loop: true,
        speed: 600,
        autoplay: { delay: 4500, disableOnInteraction: false },
        slidesPerView: 1,
        spaceBetween: 24,
        navigation: { nextEl: '.testimoni-next', prevEl: '.testimoni-prev' },
        breakpoints: {
          640: { slidesPerView: 2 },
          1024: { slidesPerView: 3 },
        },
      });
    });
  </script>
@endpush
