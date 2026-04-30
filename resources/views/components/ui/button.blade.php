@props([
  'variant' => 'primary',
  'href' => null,
  'type' => 'button',
  'external' => false,
])

@php
  $base =
      'inline-flex items-center justify-center gap-2 rounded-2xl px-6 py-3.5 text-sm font-semibold tracking-wide transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-xiw-cyan/50 focus:ring-offset-2 focus:ring-offset-xiw-navy disabled:opacity-50';
  $variants = [
      'primary' =>
          'bg-gradient-to-r from-xiw-cyan to-cyan-400 text-xiw-navy shadow-neon-cyan hover:-translate-y-0.5 hover:shadow-[0_0_28px_rgba(0,209,255,0.45)]',
      'secondary' =>
          'bg-gradient-to-r from-xiw-violet to-purple-500 text-white shadow-neon-violet hover:-translate-y-0.5',
      'outline' =>
          'border border-xiw-cyan/40 bg-transparent text-xiw-cyan hover:bg-xiw-cyan/10 hover:border-xiw-cyan/70',
      'whatsapp' =>
          'bg-[#25D366] text-white shadow-lg shadow-green-500/20 hover:-translate-y-0.5 hover:bg-[#20BD5A]',
  ];
  $class = $base . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if ($href)
  <a
    href="{{ $href }}"
    @if ($external) target="_blank" rel="noopener noreferrer" @endif
    {{ $attributes->merge(['class' => $class]) }}
  >
    {{ $slot }}
  </a>
@else
  <button type="{{ $type }}" {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
  </button>
@endif
