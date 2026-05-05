@php
  $baseUrl = rtrim(config('app.url') ?: 'https://xiwaystack.com', '/');
  $pageUrl = url()->current();
  $name = 'Xiwaystack';
  $phone = '+6281318960576';
@endphp

<script type="application/ld+json">
{!! json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'WebSite',
  'name' => $name,
  'url' => $baseUrl,
  'potentialAction' => [
    '@type' => 'SearchAction',
    'target' => $baseUrl . '/sourcecode?search={search_term_string}',
    'query-input' => 'required name=search_term_string'
  ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>

<script type="application/ld+json">
{!! json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'ProfessionalService',
  'name' => $name,
  'url' => $baseUrl,
  'telephone' => $phone,
  'areaServed' => 'ID',
  'address' => [
    '@type' => 'PostalAddress',
    'addressLocality' => 'Cimahi',
    'addressRegion' => 'Jawa Barat',
    'addressCountry' => 'ID',
  ],
  'sameAs' => [
    'https://instagram.com/wahyuu.sz',
    'https://www.tiktok.com/@xiwaystack.id',
  ],
  'serviceType' => [
    'Jasa pembuatan website',
    'Jasa aplikasi mobile',
    'Bimbingan skripsi & tugas akhir',
    'Integrasi API & sistem',
  ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>

