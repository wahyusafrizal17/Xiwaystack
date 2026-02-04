<?php

namespace Database\Seeders;

use App\Models\Sourcecode;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SourcecodeSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'title' => 'Sistem Informasi Perpustakaan',
                'description' => "Sistem informasi perpustakaan berbasis web untuk mengelola koleksi buku, anggota, peminjaman, dan pengembalian. Dilengkapi dashboard admin, laporan transaksi, dan notifikasi.\n\nTech stack: PHP, MySQL, Bootstrap.",
                'features' => ['Manajemen buku & kategori', 'Data anggota perpustakaan', 'Peminjaman & pengembalian', 'Laporan & statistik', 'Dashboard admin'],
                'sort_order' => 1,
            ],
            [
                'title' => 'E-Commerce Sederhana',
                'description' => "Aplikasi e-commerce untuk skripsi atau tugas akhir. Fitur katalog produk, keranjang, checkout, dan panel admin untuk mengelola produk serta order.\n\nCocok untuk mata kuliah Pemrograman Web atau Sistem Informasi.",
                'features' => ['Katalog produk & kategori', 'Keranjang belanja', 'Checkout & konfirmasi', 'Manajemen order', 'Panel admin'],
                'sort_order' => 2,
            ],
            [
                'title' => 'Aplikasi Buku Tamu Digital',
                'description' => "Buku tamu berbasis web atau mobile untuk pencatatan tamu pada acara, kantor, atau sekolah. Data bisa diexport ke Excel.\n\nMendukung QR code untuk check-in cepat.",
                'features' => ['Input data tamu', 'Export ke Excel', 'Filter & pencarian', 'Tampilan responsif'],
                'sort_order' => 3,
            ],
            [
                'title' => 'Sistem Pendukung Keputusan (SPK)',
                'description' => "Sistem pendukung keputusan dengan metode seperti AHP, SAW, atau TOPSIS. Contoh kasus: pemilihan guru terbaik, pemilihan supplier, atau perankingan beasiswa.\n\nInclude perhitungan bobot dan normalisasi.",
                'features' => ['Metode AHP / SAW / TOPSIS', 'Input kriteria & alternatif', 'Perhitungan bobot', 'Hasil perankingan', 'Laporan'],
                'sort_order' => 4,
            ],
            [
                'title' => 'Company Profile Website',
                'description' => "Website company profile modern dengan section hero, layanan, portofolio, testimoni, dan formulir kontak. Siap pakai untuk tugas atau proyek klien.\n\nDesign responsif dan SEO friendly.",
                'features' => ['Landing page', 'Section layanan & portofolio', 'Testimoni', 'Form kontak', 'Responsive'],
                'sort_order' => 5,
            ],
        ];

        foreach ($items as $item) {
            Sourcecode::updateOrCreate(
                ['slug' => Str::slug($item['title'])],
                [
                    'title' => $item['title'],
                    'description' => $item['description'],
                    'features' => $item['features'],
                    'is_published' => true,
                    'sort_order' => $item['sort_order'],
                    'thumbnail_path' => null,
                ]
            );
        }
    }
}
