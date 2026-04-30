@props(['variant' => 'gold'])

@php
  $base = 'inline-flex items-center gap-1.5 rounded-full px-4 py-1.5 text-xs font-semibold uppercase tracking-wider';
  $variants = [
      'gold' => 'border border-xiw-gold/40 bg-xiw-gold/10 text-xiw-gold shadow-neon-gold',
      'cyan' => 'border border-xiw-cyan/40 bg-xiw-cyan/10 text-xiw-cyan',
      'violet' => 'border border-xiw-violet/40 bg-xiw-violet/10 text-xiw-violet',
  ];
  $class = $base . ' ' . ($variants[$variant] ?? $variants['gold']);
@endphp

<span {{ $attributes->merge(['class' => $class]) }}>
  {{ $slot }}
</span>
