@extends('layouts.site')

@section('title', 'Sourcecode')

@push('styles')
<style>
  .sourcecode-section { padding-top: 120px; padding-bottom: 80px; }
  .sourcecode-section .section-title {
    text-align: center;
    max-width: 560px;
    margin-left: auto;
    margin-right: auto;
  }
  .sourcecode-section .section-title .main-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--heading-color);
    margin-bottom: 0.35rem;
    letter-spacing: -0.02em;
  }
  .sourcecode-section .section-title .sub-title {
    font-size: 1rem;
    font-weight: 500;
    color: var(--accent-color);
    letter-spacing: 0.02em;
  }

  .sourcecode-card {
    height: 100%;
    background: var(--surface-color);
    border-radius: 16px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.06);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: block;
    text-decoration: none;
    color: inherit;
  }
  .sourcecode-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.25);
    color: inherit;
    border-color: rgba(227, 161, 39, 0.2);
  }

  .sourcecode-card .card-image {
    position: relative;
    width: 100%;
    aspect-ratio: 16 / 10;
    overflow: hidden;
    background: rgba(0, 0, 0, 0.2);
  }
  .sourcecode-card .card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
  }
  .sourcecode-card:hover .card-image img { transform: scale(1.03); }

  .sourcecode-card .card-image .img-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 0, 0, 0.15);
    color: rgba(255, 255, 255, 0.12);
    font-size: 1.75rem;
  }

  .sourcecode-card .card-body {
    padding: 1.25rem 1.5rem;
  }
  .sourcecode-card .card-title {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--heading-color);
    margin-bottom: 0.5rem;
    line-height: 1.35;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  .sourcecode-card .card-desc {
    font-size: 0.875rem;
    color: var(--default-color);
    opacity: 0.85;
    margin-bottom: 1rem;
    line-height: 1.5;
    min-height: 2.85em;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  .sourcecode-card .card-price {
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--accent-color);
    background: rgba(227, 161, 39, 0.06);
    border: 1px solid rgba(227, 161, 39, 0.25);
    padding: 0.3rem 0.7rem;
    border-radius: 999px;
    margin-bottom: 0.5rem;
  }
  .sourcecode-card .card-link {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--accent-color);
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    transition: gap 0.2s ease;
  }
  .sourcecode-card:hover .card-link { gap: 0.5rem; }
</style>
@endpush

@section('content')
<section class="section sourcecode-section">
  <div class="container">
    <div class="container section-title aos-init aos-animate" data-aos="fade-up">
      <h2>Sourcecode</h2>
      <div>
        <span>Koleksi Sourcecode Siap Pakai</span>
      </div>
    </div>
    {{-- <header class="section-title mb-5" data-aos="fade-up">
      <h2 class="main-title">Sourcecode</h2>
      <p class="sub-title mb-0">Koleksi Sourcecode Siap Pakai</p>
    </header> --}}
    <div class="row g-4 justify-content-center">
      @forelse($sourcecodes as $item)
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ min($loop->iteration * 50, 150) }}">
          <a href="{{ route('sourcecode.show', $item) }}" class="sourcecode-card">
            <div class="card-image">
              @if($item->thumbnail_path)
                <img src="{{ (str_starts_with($item->thumbnail_path ?? '', 'uploads/sourcecode/') || str_starts_with($item->thumbnail_path ?? '', 'sourcecode/')) ? asset($item->thumbnail_path) : asset('storage/' . $item->thumbnail_path) }}" alt="{{ $item->title }}" loading="lazy">
              @else
                <div class="img-placeholder"><i class="fa fa-code"></i></div>
              @endif
            </div>
            <div class="card-body">
              <h3 class="card-title">{{ $item->title }}</h3>
              @if(! is_null($item->price))
                <div class="card-price">Rp {{ number_format($item->price, 0, ',', '.') }}</div>
              @endif
              <p class="card-desc">{{ $item->description ? Str::limit(strip_tags($item->description), 100) : '—' }}</p>
              <span class="card-link">Lihat Detail <i class="fa fa-arrow-right"></i></span>
            </div>
          </a>
        </div>
      @empty
        <div class="col-12 text-center py-5" data-aos="fade-up">
          <div class="rounded-3 mx-auto mb-3 d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background: rgba(255,255,255,0.05); color: rgba(255,255,255,0.2); font-size: 2rem;"><i class="fa fa-folder-open-o"></i></div>
          <h4 class="mb-2" style="color: var(--heading-color);">Belum ada sourcecode</h4>
          <p class="mb-0" style="color: var(--default-color); opacity: 0.8;">Sourcecode akan ditampilkan di sini setelah ditambahkan dari panel admin.</p>
        </div>
      @endforelse
    </div>
  </div>
</section>
@endsection
