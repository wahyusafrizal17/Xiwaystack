<section id="keunggulan" class="relative border-y border-white/5 bg-white/[0.02] py-20 sm:py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <p class="text-sm font-semibold uppercase tracking-widest text-xiw-violet">Mengapa Xiwaystack</p>
      <h2 class="mt-2 font-display text-3xl font-bold text-white sm:text-4xl">Keunggulan</h2>
    </div>

    <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      @foreach ([
          ['emoji' => '⚡', 'title' => 'Respons Cepat', 'text' => 'Balasan chat & update progress yang konsisten.'],
          ['emoji' => '🎯', 'title' => 'Bergaransi', 'text' => 'Revisi sesuai kesepakatan hingga kamu puas.'],
          ['emoji' => '💬', 'title' => 'Konsultasi Gratis', 'text' => 'Diskusi awal tanpa biaya sebelum deal.'],
          ['emoji' => '🔧', 'title' => 'Custom Sesuai Kebutuhan', 'text' => 'Fitur disesuaikan scope & budget kamu.'],
      ] as $row)
        <x-ui.card>
          <div class="text-3xl">{{ $row['emoji'] }}</div>
          <h3 class="mt-4 font-display font-semibold text-white">{{ $row['title'] }}</h3>
          <p class="mt-2 text-sm text-slate-400">{{ $row['text'] }}</p>
        </x-ui.card>
      @endforeach
    </div>
  </div>
</section>
