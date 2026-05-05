<section id="faq" class="relative border-t border-white/5 pb-24 pt-12">
  <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
    <h2 class="text-center font-display text-2xl font-bold text-white sm:text-3xl">FAQ Singkat</h2>
    <div class="mt-10 space-y-4">
      @foreach ([
          ['q' => 'Berapa lama pengerjaan?', 'a' => 'Tergantung scope — rata-rata 2–6 minggu untuk aplikasi skripsi.'],
          ['q' => 'Bisa revisi?', 'a' => 'Ya, sesuai paket yang disepakati di awal.'],
          ['q' => 'Bayar gimana?', 'a' => 'Biasanya DP + pelunasan; detail di WhatsApp.'],
          ['q' => 'Mulai harga berapa?', 'a' => 'Mulai Rp250.000 (tergantung kebutuhan). Chat WhatsApp untuk estimasi cepat.'],
          ['q' => 'Bisa custom sesuai request?', 'a' => 'Bisa. Kamu cukup kirim referensi/fitur yang diinginkan, nanti kami susun scope & timeline.'],
          ['q' => 'Apakah ada garansi?', 'a' => 'Ada. Revisi diberikan sesuai kesepakatan paket di awal agar hasilnya sesuai target.'],
          ['q' => 'Bisa bantu sampai sidang/presentasi?', 'a' => 'Bisa. Kami bantu penjelasan fitur, alur sistem, dan persiapan demo sesuai kebutuhan.'],
          ['q' => 'Sourcecode yang dijual dapat apa saja?', 'a' => 'Umumnya dapat file sourcecode + panduan singkat. Detailnya tergantung item sourcecode yang kamu pilih.'],
      ] as $faq)
        <details class="group glass-panel rounded-2xl border border-white/10 p-5 open:border-xiw-cyan/30">
          <summary
            class="flex cursor-pointer list-none items-center justify-between font-medium text-white marker:content-none"
          >
            {{ $faq['q'] }}
            <i class="fa fa-chevron-down text-xiw-cyan transition group-open:rotate-180"></i>
          </summary>
          <p class="mt-3 text-sm text-slate-400">{{ $faq['a'] }}</p>
        </details>
      @endforeach
    </div>
  </div>
</section>
