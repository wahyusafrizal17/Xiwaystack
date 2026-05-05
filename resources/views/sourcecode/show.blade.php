@extends('layouts.site')

@section('title', $sourcecode->title)

@section('content')
<section class="relative py-10 sm:py-14">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <nav class="mb-6 text-sm text-slate-400">
      <a href="{{ url('/') }}" class="hover:text-xiw-cyan">Home</a>
      <span class="mx-2 text-slate-600">/</span>
      <a href="{{ route('sourcecode.index') }}" class="hover:text-xiw-cyan">Sourcecode</a>
      <span class="mx-2 text-slate-600">/</span>
      <span class="text-slate-300">{{ $sourcecode->title }}</span>
    </nav>

    <div class="grid gap-8 lg:grid-cols-12">
      <div class="lg:col-span-8">
        <div class="flex items-start justify-between gap-4">
          <h1 class="font-display text-2xl font-bold text-white sm:text-4xl">{{ $sourcecode->title }}</h1>
          @if(! is_null($sourcecode->price))
            <x-ui.badge variant="gold" class="mt-1 shrink-0">Rp {{ number_format($sourcecode->price, 0, ',', '.') }}</x-ui.badge>
          @endif
        </div>

        @if($sourcecode->thumbnail_path)
          <div class="mt-6 overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">
            <img
              src="{{ (str_starts_with($sourcecode->thumbnail_path ?? '', 'uploads/sourcecode/') || str_starts_with($sourcecode->thumbnail_path ?? '', 'sourcecode/')) ? asset($sourcecode->thumbnail_path) : asset('storage/' . $sourcecode->thumbnail_path) }}"
              alt="{{ $sourcecode->title }}"
              class="w-full object-contain"
            >
          </div>
        @endif

        @if($sourcecode->images->isNotEmpty())
          <p class="mt-6 text-xs font-semibold uppercase tracking-widest text-slate-500">Gambar detail</p>
          <div class="mt-3 flex gap-2 overflow-x-auto pb-2">
            @foreach($sourcecode->images as $index => $img)
              @php
                $src = (str_starts_with($img->image_path ?? '', 'uploads/sourcecode/') || str_starts_with($img->image_path ?? '', 'sourcecode/')) ? asset($img->image_path) : asset('storage/' . $img->image_path);
              @endphp
              <button
                type="button"
                class="detail-thumb flex h-[72px] w-[72px] shrink-0 items-center justify-center overflow-hidden rounded-xl border border-white/10 bg-white/[0.04] transition hover:border-xiw-cyan/40"
                data-src="{{ $src }}"
                data-alt="{{ $img->caption ?? $sourcecode->title }}"
                aria-label="Lihat gambar {{ $index + 1 }}"
              >
                <img src="{{ $src }}" alt="" class="h-full w-full object-contain">
              </button>
            @endforeach
          </div>

          <div class="detail-image-modal fixed inset-0 z-[9999] hidden items-center justify-center bg-black/80 p-4 backdrop-blur">
            <div class="relative max-h-[90vh] max-w-[95vw]">
              <button type="button" class="modal-close absolute -top-10 right-0 flex h-9 w-9 items-center justify-center rounded-xl bg-white/10 text-white hover:bg-white/20" aria-label="Tutup">&times;</button>
              <button type="button" class="modal-nav modal-prev absolute left-2 top-1/2 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/25" aria-label="Gambar sebelumnya"><i class="fa fa-chevron-left"></i></button>
              <img id="detail-modal-img" src="" alt="" class="max-h-[90vh] max-w-[95vw] rounded-2xl">
              <button type="button" class="modal-nav modal-next absolute right-2 top-1/2 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/25" aria-label="Gambar berikutnya"><i class="fa fa-chevron-right"></i></button>
            </div>
          </div>
        @endif

        @if($sourcecode->description)
          <div class="prose prose-invert mt-8 max-w-none prose-p:text-slate-300 prose-headings:text-white">
            {!! $sourcecode->description !!}
          </div>
        @endif

        @if($sourcecode->features && count($sourcecode->features) > 0)
          <h2 class="mt-10 font-display text-xl font-semibold text-white">Fitur</h2>
          <ul class="mt-4 space-y-2">
            @foreach($sourcecode->features as $feature)
              <li class="flex items-start gap-2 text-slate-300">
                <i class="fa fa-check-circle mt-0.5 text-xiw-cyan"></i>
                <span>{{ is_array($feature) ? ($feature['label'] ?? $feature['name'] ?? json_encode($feature)) : $feature }}</span>
              </li>
            @endforeach
          </ul>
        @endif
      </div>

      <aside class="lg:col-span-4">
        <div class="glass-panel sticky top-24 p-6">
          <h3 class="font-display text-sm font-semibold uppercase tracking-widest text-white">Kontak</h3>
          <div class="mt-4 space-y-2 text-sm text-slate-400">
            <p><span class="text-white/80">WhatsApp:</span> <a class="hover:text-xiw-cyan" href="https://wa.me/6281318960576" target="_blank" rel="noopener">0813-1896-0576</a></p>
            <p><span class="text-white/80">Instagram:</span> <a class="hover:text-xiw-cyan" href="https://instagram.com/wahyuu.sz" target="_blank" rel="noopener">@wahyuu.sz</a></p>
            <p><span class="text-white/80">TikTok:</span> <a class="hover:text-xiw-cyan" href="https://www.tiktok.com/@xiwaystack.id" target="_blank" rel="noopener">@xiwaystack.id</a></p>
          </div>

          <x-ui.button
            variant="whatsapp"
            href="https://wa.me/6281318960576?text={{ urlencode('Halo, saya tertarik membeli sourcecode: ' . $sourcecode->title) }}"
            external
            class="mt-6 w-full"
          >
            <i class="fa fa-whatsapp"></i> Beli Sourcecode
          </x-ui.button>
        </div>

        @if(isset($latestSourcecodes) && $latestSourcecodes->isNotEmpty())
          <div class="mt-6">
            <p class="text-xs font-semibold uppercase tracking-widest text-slate-500">Sourcecode terbaru</p>
            <div class="mt-3 space-y-3">
              @foreach($latestSourcecodes as $item)
                <a href="{{ route('sourcecode.show', $item) }}" class="flex items-center gap-3 rounded-2xl border border-white/10 bg-white/[0.03] p-3 transition hover:border-xiw-cyan/30">
                  <div class="h-12 w-12 overflow-hidden rounded-xl bg-white/[0.04]">
                    @if($item->thumbnail_path)
                      <img src="{{ (str_starts_with($item->thumbnail_path ?? '', 'uploads/sourcecode/') || str_starts_with($item->thumbnail_path ?? '', 'sourcecode/')) ? asset($item->thumbnail_path) : asset('storage/' . $item->thumbnail_path) }}" alt="{{ $item->title }}" class="h-full w-full object-cover">
                    @else
                      <div class="flex h-full w-full items-center justify-center text-white/20"><i class="fa fa-code"></i></div>
                    @endif
                  </div>
                  <div class="min-w-0">
                    <p class="truncate font-medium text-white">{{ $item->title }}</p>
                    <p class="truncate text-xs text-slate-500">{{ Str::limit(strip_tags($item->description ?? ''), 70) }}</p>
                  </div>
                </a>
              @endforeach
            </div>
          </div>
        @endif
      </aside>
    </div>
  </div>
</section>

@if($sourcecode->images->isNotEmpty())
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
  var thumbs = document.querySelectorAll('.detail-thumb');
  var modal = document.querySelector('.detail-image-modal');
  var modalImg = document.getElementById('detail-modal-img');
  var modalClose = document.querySelector('.detail-image-modal .modal-close');
  var modalPrev = document.querySelector('.detail-image-modal .modal-prev');
  var modalNext = document.querySelector('.detail-image-modal .modal-next');

  var slides = [];
  thumbs.forEach(function(t) {
    slides.push({ src: t.getAttribute('data-src'), alt: t.getAttribute('data-alt') || '' });
  });
  var currentIndex = 0;

  function updateModalImage() {
    if (!modalImg || !slides.length) return;
    var s = slides[currentIndex];
    modalImg.src = s.src || '';
    modalImg.alt = s.alt || '';
    if (modalPrev) modalPrev.style.display = slides.length <= 1 ? 'none' : 'flex';
    if (modalNext) modalNext.style.display = slides.length <= 1 ? 'none' : 'flex';
  }

  function openModal(index) {
    if (!modal || !modalImg || index < 0 || index >= slides.length) return;
    currentIndex = index;
    updateModalImage();
    modal.classList.add('flex');
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  }
  function closeModal() {
    if (!modal) return;
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = '';
  }
  function goPrev() {
    if (slides.length <= 1) return;
    currentIndex = currentIndex <= 0 ? slides.length - 1 : currentIndex - 1;
    updateModalImage();
  }
  function goNext() {
    if (slides.length <= 1) return;
    currentIndex = currentIndex >= slides.length - 1 ? 0 : currentIndex + 1;
    updateModalImage();
  }

  thumbs.forEach(function(thumb, i) {
    thumb.addEventListener('click', function() { openModal(i); });
  });
  if (modalClose) modalClose.addEventListener('click', closeModal);
  if (modalPrev) modalPrev.addEventListener('click', function(e) { e.stopPropagation(); goPrev(); });
  if (modalNext) modalNext.addEventListener('click', function(e) { e.stopPropagation(); goNext(); });
  if (modal) {
    modal.addEventListener('click', function(e) { if (e.target === modal) closeModal(); });
  }
  document.addEventListener('keydown', function(e) {
    if (!modal || modal.classList.contains('hidden')) return;
    if (e.key === 'Escape') closeModal();
    if (e.key === 'ArrowLeft') goPrev();
    if (e.key === 'ArrowRight') goNext();
  });
});
</script>
@endpush
@endif
@endsection
