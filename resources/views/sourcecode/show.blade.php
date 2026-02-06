@extends('layouts.site')

@section('title', $sourcecode->title)

@push('styles')
<style>
  .sourcecode-detail-section { padding-top: 120px; padding-bottom: 80px; }
  .sourcecode-detail-section .breadcrumb {
    background: transparent;
    padding: 0;
    margin-bottom: 2rem;
    font-size: 0.875rem;
  }
  .sourcecode-detail-section .breadcrumb-item a {
    color: rgba(255, 255, 255, 0.7);
    text-decoration: none;
    transition: color 0.2s;
  }
  .sourcecode-detail-section .breadcrumb-item a:hover { color: var(--accent-color); }
  .sourcecode-detail-section .breadcrumb-item.active { color: var(--heading-color); font-weight: 500; }
  .sourcecode-detail-section .breadcrumb-item + .breadcrumb-item::before { color: rgba(255,255,255,0.35); }

  .sourcecode-detail-section .detail-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1.5rem;
    margin-bottom: 1.25rem;
  }
  .sourcecode-detail-section .detail-title {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--heading-color);
    line-height: 1.3;
    margin-bottom: 0;
  }

  .sourcecode-detail-section .detail-price {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    font-size: 0.95rem;
    font-weight: 600;
    color: var(--accent-color);
    background: rgba(227, 161, 39, 0.08);
    border: 1px solid rgba(227, 161, 39, 0.35);
    padding: 0.45rem 0.9rem;
    border-radius: 999px;
  }

  .sourcecode-detail-section .media-wrap {
    border-radius: 16px;
    overflow: hidden;
    background: rgba(0, 0, 0, 0.25);
    margin-bottom: 1.75rem;
    border: 1px solid rgba(255, 255, 255, 0.06);
  }
  .sourcecode-detail-section .media-wrap img {
    max-height: 420px;
    width: 100%;
    object-fit: contain;
    display: block;
  }

  .sourcecode-detail-section .content-body {
    font-size: 1rem;
    line-height: 1.7;
    color: var(--default-color);
  }
  .sourcecode-detail-section .content-body p { margin-bottom: 1rem; }
  .sourcecode-detail-section .content-body h2, .sourcecode-detail-section .content-body h3 { margin-top: 1.5rem; margin-bottom: 0.75rem; color: var(--heading-color); }

  .sourcecode-detail-section .sidebar-card {
    background: var(--surface-color);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 16px;
    padding: 1.5rem;
    position: sticky;
    top: 100px;
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.15);
  }
  .sourcecode-detail-section .sidebar-card .card-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--heading-color);
    margin-bottom: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
  }
  .sourcecode-detail-section .sidebar-card .card-desc {
    font-size: 0.875rem;
    color: var(--default-color);
    opacity: 0.9;
    line-height: 1.55;
    margin-bottom: 1.25rem;
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  .sourcecode-detail-section .sidebar-card .btn-back {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    width: 100%;
    padding: 0.65rem 1rem;
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--contrast-color);
    background: var(--accent-color);
    border: none;
    border-radius: 10px;
    text-decoration: none;
    transition: opacity 0.2s, transform 0.2s;
  }
  .sourcecode-detail-section .sidebar-card .btn-back:hover {
    color: var(--contrast-color);
    opacity: 0.95;
    transform: translateX(-2px);
  }

  .sourcecode-detail-section .sidebar-card .btn-buy {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    width: 100%;
    margin-top: 0.75rem;
    padding: 0.65rem 1rem;
    font-size: 0.9rem;
    font-weight: 600;
    color: #ffffff;
    background: #25d366; /* WhatsApp green */
    border: none;
    border-radius: 10px;
    text-decoration: none;
    transition: opacity 0.2s, transform 0.2s, box-shadow 0.2s;
  }
  .sourcecode-detail-section .sidebar-card .btn-buy:hover {
    color: #ffffff;
    opacity: 0.96;
    transform: translateY(-1px);
    box-shadow: 0 6px 18px rgba(37, 211, 102, 0.35);
  }

  .sourcecode-detail-section .features-title { font-size: 1.1rem; font-weight: 600; color: var(--heading-color); margin-top: 1.75rem; margin-bottom: 0.75rem; }
  .sourcecode-detail-section .feature-item { display: flex; align-items: flex-start; margin-bottom: 0.5rem; font-size: 0.9375rem; color: var(--default-color); }
  .sourcecode-detail-section .feature-item i { color: var(--accent-color); margin-right: 0.5rem; margin-top: 0.2rem; flex-shrink: 0; }

  .sourcecode-detail-section .detail-thumbs {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
  }
  .sourcecode-detail-section .detail-thumb {
    width: 72px;
    height: 72px;
    border-radius: 10px;
    overflow: hidden;
    border: 2px solid transparent;
    cursor: pointer;
    transition: border-color 0.2s, opacity 0.2s;
    flex-shrink: 0;
    background: rgba(0,0,0,0.2);
  }
  .sourcecode-detail-section .detail-thumb:hover { opacity: 0.9; }
  .sourcecode-detail-section .detail-thumb.active { border-color: var(--accent-color); }
  .sourcecode-detail-section .detail-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .detail-image-modal {
    position: fixed;
    inset: 0;
    z-index: 9999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    background: rgba(0, 0, 0, 0.85);
    backdrop-filter: blur(4px);
  }
  .detail-image-modal.show { display: flex; }
  .detail-image-modal .modal-inner {
    max-width: 95vw;
    max-height: 90vh;
    position: relative;
  }
  .detail-image-modal .modal-inner img {
    max-width: 100%;
    max-height: 90vh;
    width: auto;
    height: auto;
    object-fit: contain;
    border-radius: 12px;
    display: block;
  }
  .detail-image-modal .modal-close {
    position: absolute;
    top: -40px;
    right: 0;
    width: 36px;
    height: 36px;
    border: none;
    background: rgba(255,255,255,0.15);
    color: #fff;
    font-size: 1.5rem;
    line-height: 1;
    cursor: pointer;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s;
  }
  .detail-image-modal .modal-close:hover { background: rgba(255,255,255,0.25); }

  .sourcecode-detail-section .latest-wrap { margin-top: 1.5rem; }
  .sourcecode-detail-section .latest-title {
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: rgba(255,255,255,0.5);
    margin-bottom: 0.75rem;
  }
  .sourcecode-detail-section .latest-cards { display: flex; flex-direction: column; gap: 0.75rem; }
  .sourcecode-detail-section .latest-item {
    display: flex;
    align-items: center;
    gap: 0.875rem;
    padding: 0.875rem 1rem;
    background: var(--surface-color);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 12px;
    text-decoration: none;
    color: inherit;
    transition: border-color 0.2s, box-shadow 0.2s, transform 0.2s;
  }
  .sourcecode-detail-section .latest-item:hover {
    border-color: rgba(227, 161, 39, 0.25);
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
    transform: translateX(4px);
    color: inherit;
  }
  .sourcecode-detail-section .latest-item .latest-thumb {
    width: 52px;
    height: 52px;
    border-radius: 10px;
    overflow: hidden;
    flex-shrink: 0;
    background: rgba(0,0,0,0.2);
  }
  .sourcecode-detail-section .latest-item .latest-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .sourcecode-detail-section .latest-item .latest-thumb .no-thumb {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: rgba(255,255,255,0.2);
    font-size: 1.15rem;
  }
  .sourcecode-detail-section .latest-item .latest-body { flex: 1; min-width: 0; display: flex; flex-direction: column; gap: 0.25rem; }
  .sourcecode-detail-section .latest-item .latest-text {
    font-size: 0.9rem;
    font-weight: 500;
    color: var(--heading-color);
    line-height: 1.35;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  .sourcecode-detail-section .latest-item .latest-desc {
    font-size: 0.75rem;
    color: rgba(255,255,255,0.55);
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
</style>
@endpush

@section('content')
<section class="section sourcecode-detail-section">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('sourcecode.index') }}">Sourcecode</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $sourcecode->title }}</li>
      </ol>
    </nav>

    <div class="row">
      <div class="col-lg-8" data-aos="fade-up">
        <div class="detail-header">
          <h1 class="detail-title">{{ $sourcecode->title }}</h1>
          @if(! is_null($sourcecode->price))
            <div class="detail-price">Rp {{ number_format($sourcecode->price, 0, ',', '.') }}</div>
          @endif
        </div>

        {{-- Thumbnail di atas (gambar utama) --}}
        @if($sourcecode->thumbnail_path)
          <div class="media-wrap mb-3">
            <img src="{{ (str_starts_with($sourcecode->thumbnail_path ?? '', 'uploads/sourcecode/') || str_starts_with($sourcecode->thumbnail_path ?? '', 'sourcecode/')) ? asset($sourcecode->thumbnail_path) : asset('storage/' . $sourcecode->thumbnail_path) }}" alt="{{ $sourcecode->title }}">
          </div>
        @endif

        {{-- Gambar detail: hanya list thumbnail, klik buka modal --}}
        @if($sourcecode->images->isNotEmpty())
          <p class="small text-uppercase mb-2" style="color: rgba(255,255,255,0.5); letter-spacing: 0.05em;">Gambar detail</p>
          <div class="detail-thumbs mb-4">
            @foreach($sourcecode->images as $index => $img)
              @php
                $src = (str_starts_with($img->image_path ?? '', 'uploads/sourcecode/') || str_starts_with($img->image_path ?? '', 'sourcecode/')) ? asset($img->image_path) : asset('storage/' . $img->image_path);
              @endphp
              <button type="button" class="detail-thumb" data-src="{{ $src }}" data-alt="{{ $img->caption ?? $sourcecode->title }}" aria-label="Lihat gambar {{ $index + 1 }}">
                <img src="{{ $src }}" alt="">
              </button>
            @endforeach
          </div>
          <div class="detail-image-modal" id="detail-image-modal" aria-hidden="true">
            <div class="modal-inner">
              <button type="button" class="modal-close" id="detail-modal-close" aria-label="Tutup">&times;</button>
              <img id="detail-modal-img" src="" alt="">
            </div>
          </div>
        @endif

        @if($sourcecode->description)
          <div class="content-body">
            {!! $sourcecode->description !!}
          </div>
        @endif

        @if($sourcecode->features && count($sourcecode->features) > 0)
          <h5 class="features-title">Fitur</h5>
          <ul class="list-unstyled">
            @foreach($sourcecode->features as $feature)
              <li class="feature-item">
                <i class="fa fa-check-circle"></i>
                <span>{{ is_array($feature) ? ($feature['label'] ?? $feature['name'] ?? json_encode($feature)) : $feature }}</span>
              </li>
            @endforeach
          </ul>
        @endif
      </div>
      <div class="col-lg-4" data-aos="fade-left">
        <div class="sidebar-card">
          <h5 class="card-title">Kontak</h5>
          <div class="card-desc">
            <p class="mb-2">
              <strong>Whatsapp</strong>:
              <a href="https://wa.me/6281318960576" target="_blank" rel="noopener">
                0813-1896-0576
              </a>
            </p>
            <p class="mb-2">
              <strong>Instagram</strong>:
              <a href="https://instagram.com/wahyuu.sz" target="_blank" rel="noopener">
                @wahyuu.sz
              </a>
            </p>
            <p class="mb-0">
              <strong>Tiktok</strong>:
              <a href="https://www.tiktok.com/@waystack.com" target="_blank" rel="noopener">
                @waystack.com
              </a>
            </p>
          </div>
          <a
            href="https://wa.me/6281318960576?text={{ urlencode('Halo, saya tertarik membeli sourcecode: ' . $sourcecode->title) }}"
            target="_blank"
            rel="noopener"
            class="btn-buy"
          >
            <i class="fa fa-whatsapp"></i>
            Beli Sourcecode via WhatsApp
          </a>
        </div>
        @if(isset($latestSourcecodes) && $latestSourcecodes->isNotEmpty())
          <div class="latest-wrap">
            <p class="latest-title">Sourcecode terbaru</p>
            <div class="latest-cards">
              @foreach($latestSourcecodes as $item)
                <a href="{{ route('sourcecode.show', $item) }}" class="latest-item">
                  <div class="latest-thumb">
                    @if($item->thumbnail_path)
                      <img src="{{ (str_starts_with($item->thumbnail_path ?? '', 'uploads/sourcecode/') || str_starts_with($item->thumbnail_path ?? '', 'sourcecode/')) ? asset($item->thumbnail_path) : asset('storage/' . $item->thumbnail_path) }}" alt="{{ $item->title }}">
                    @else
                      <span class="no-thumb"><i class="fa fa-code"></i></span>
                    @endif
                  </div>
                  <div class="latest-body">
                    <span class="latest-text">{{ $item->title }}</span>
                    <span class="latest-desc">{{ Str::limit(strip_tags($item->description ?? ''), 70) }}</span>
                  </div>
                </a>
              @endforeach
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>
</section>

@if($sourcecode->images->isNotEmpty())
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
  var thumbs = document.querySelectorAll('.detail-thumb');
  var modal = document.getElementById('detail-image-modal');
  var modalImg = document.getElementById('detail-modal-img');
  var modalClose = document.getElementById('detail-modal-close');

  function openModal(src, alt) {
    if (!modal || !modalImg) return;
    modalImg.src = src || '';
    modalImg.alt = alt || '';
    modal.classList.add('show');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }
  function closeModal() {
    if (!modal) return;
    modal.classList.remove('show');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  thumbs.forEach(function(thumb) {
    thumb.addEventListener('click', function() {
      var src = this.getAttribute('data-src');
      var alt = this.getAttribute('data-alt') || '';
      openModal(src, alt);
    });
  });
  if (modalClose) modalClose.addEventListener('click', closeModal);
  if (modal) {
    modal.addEventListener('click', function(e) { if (e.target === modal) closeModal(); });
  }
  document.addEventListener('keydown', function(e) { if (e.key === 'Escape') closeModal(); });
});
</script>
@endpush
@endif
@endsection
