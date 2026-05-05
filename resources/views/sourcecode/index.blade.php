@extends('layouts.site')

@section('title', 'Sourcecode')

@section('content')
<section class="relative py-16 sm:py-20">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <p class="text-sm font-semibold uppercase tracking-widest text-xiw-cyan">Sourcecode</p>
      <h1 class="mt-2 font-display text-3xl font-bold text-white sm:text-4xl">Koleksi Sourcecode Siap Pakai</h1>
      <p class="mt-4 text-slate-400">Pilih yang sesuai kebutuhanmu. Bisa langsung tanya & beli via WhatsApp.</p>
    </div>

    <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      @forelse($sourcecodes as $item)
        <a
          href="{{ route('sourcecode.show', $item) }}"
          class="group overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03] transition hover:-translate-y-1 hover:border-xiw-cyan/30 hover:shadow-neon-cyan"
        >
          <div class="aspect-[16/10] overflow-hidden bg-white/[0.04]">
            @if($item->thumbnail_path)
              <img
                src="{{ (str_starts_with($item->thumbnail_path ?? '', 'uploads/sourcecode/') || str_starts_with($item->thumbnail_path ?? '', 'sourcecode/')) ? asset($item->thumbnail_path) : asset('storage/' . $item->thumbnail_path) }}"
                alt="{{ $item->title }}"
                loading="lazy"
                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
              >
            @else
              <div class="flex h-full w-full items-center justify-center text-white/20">
                <i class="fa fa-code text-3xl"></i>
              </div>
            @endif
          </div>
          <div class="p-6">
            <h3 class="font-display text-lg font-semibold text-white line-clamp-2">{{ $item->title }}</h3>
            @if(! is_null($item->price))
              <x-ui.badge variant="gold" class="mt-3">Rp {{ number_format($item->price, 0, ',', '.') }}</x-ui.badge>
            @endif
            <p class="mt-3 text-sm text-slate-400 line-clamp-2">{{ $item->description ? Str::limit(strip_tags($item->description), 110) : '—' }}</p>
            <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-xiw-cyan">
              Lihat Detail <i class="fa fa-arrow-right text-xs transition group-hover:translate-x-0.5"></i>
            </span>
          </div>
        </a>
      @empty
        <div class="col-span-full py-14 text-center">
          <div class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-2xl border border-white/10 bg-white/[0.04] text-white/20">
            <i class="fa fa-folder-open-o text-3xl"></i>
          </div>
          <h3 class="font-display text-xl font-semibold text-white">Belum ada sourcecode</h3>
          <p class="mt-2 text-sm text-slate-400">Sourcecode akan tampil di sini setelah ditambahkan dari panel admin.</p>
        </div>
      @endforelse
    </div>
  </div>
</section>
@endsection
