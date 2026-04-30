@props(['hover' => true])

<div
  {{ $attributes->merge([
      'class' =>
          'glass-panel group relative overflow-hidden p-6 transition-all duration-300 ' .
          ($hover
              ? 'hover:-translate-y-1 hover:border-xiw-cyan/30 hover:shadow-neon-cyan'
              : ''),
  ]) }}
>
  {{ $slot }}
</div>
