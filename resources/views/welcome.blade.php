<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xiwaystack - Jasa Pembuatan Aplikasi Web, Mobile & Skripsi</title>
    <meta name="description" content="Xiwaystack menyediakan layanan pembuatan aplikasi web, mobile, dan bantuan pengerjaan skripsi dengan profesional dan tepat waktu.">
    <meta name="keywords" content="jasa pembuatan aplikasi, jasa skripsi, jasa tugas akhir, jasa web, jasa mobile, xiwaystack">
    <meta name="author" content="Xiwaystack">
    <meta name="robots" content="index, follow">
    <!-- Open Graph Meta (untuk share ke sosial media) -->
    <meta property="og:title" content="Xiwaystack - Jasa Pembuatan Aplikasi & Skripsi">
    <meta property="og:description" content="Solusi digital lengkap untuk pembuatan aplikasi dan pengerjaan skripsi.">
    <meta property="og:image" content="https://xiwaystack.com/assets/images/preview.jpg">
    <meta property="og:url" content="https://xiwaystack.com">
    <meta property="og:type" content="website">
    <!-- Favicons -->
    <link href="{{ asset('assets/images/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/images/logo.png') }}" rel="apple-touch-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Font Awesome 4.7.0 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  </head>
  <body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="https://bootstrapmade.com/content/demo/Strategy/assets/img/logo.webp" alt=""> -->
          <h1 class="sitename">Xiwaystack</h1>
        </a>
        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
              <a href="#hero" class="active">Home</a>
            </li>
            {{-- <li>
																														<a href="#about">About</a>
																													</li> --}}
            <li>
              <a href="#services">Services</a>
            </li>
            <li>
              <a href="#testimoni">Testimoni</a>
            </li>
            <li>
              <a href="{{ route('sourcecode.index') }}">Sourcecode</a>
            </li>
            <li>
              <a href="#team">About</a>
            </li>
            {{-- <li class="dropdown">
																														<a href="#">
																															<span>Dropdown</span>
																															<i class="fa fa-chevron-down toggle-dropdown"></i>
																														</a>
																														<ul>
																															<li>
																																<a href="#">Dropdown 1</a>
																															</li>
																															<li class="dropdown">
																																<a href="#">
																																	<span>Deep Dropdown</span>
																																	<i class="fa fa-chevron-down toggle-dropdown"></i>
																																</a>
																																<ul>
																																	<li>
																																		<a href="#">Deep Dropdown 1</a>
																																	</li>
																																	<li>
																																		<a href="#">Deep Dropdown 2</a>
																																	</li>
																																	<li>
																																		<a href="#">Deep Dropdown 3</a>
																																	</li>
																																	<li>
																																		<a href="#">Deep Dropdown 4</a>
																																	</li>
																																	<li>
																																		<a href="#">Deep Dropdown 5</a>
																																	</li>
																																</ul>
																															</li>
																															<li>
																																<a href="#">Dropdown 2</a>
																															</li>
																															<li>
																																<a href="#">Dropdown 3</a>
																															</li>
																															<li>
																																<a href="#">Dropdown 4</a>
																															</li>
																														</ul>
																													</li> --}}
            {{-- <li>
																														<a href="#contact">Contact</a>
																													</li> --}}
          </ul>
          <i class="mobile-nav-toggle d-xl-none fa fa-list"></i>
        </nav>
        <a class="btn-getstarted" href="https://wa.me/6281318960576?text=Hai%2C%20kak.%20Saya%20ingin%20konsultasi%20tentang%20tugas" target="_blank"> Konsultasi Gratis </a>
      </div>
    </header>
    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="hero section">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 content-col" data-aos="fade-up">
              <div class="content">
                <div class="agency-name">
                  <h5>JASA & PORTOFOLIO</h5>
                </div>
                <div class="main-heading">
                  <h1>BUAT <br>APLIKASI IMPIANMU </h1>
                </div>
                <div class="divider"></div>
                <div class="description">
                  <p>Saya membantu Anda membuat aplikasi web dan mobile, menyelesaikan skripsi berbasis IT, dan memodifikasi konten digital sesuai kebutuhan Anda. Dengan pengalaman dan pendekatan kreatif, saya siap menjadi partner terbaik untuk mewujudkan ide Anda secara profesional dan efisien.</p>
                </div>
                <div class="cta-button">
                  <a href="#services" class="btn">
                    <span>LIHAT LAYANAN</span>
                    <i class="fa fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-5" data-aos="zoom-out">
              <div class="visual-content">
                <div class="fluid-shape">
                  <img src="{{ asset('assets/images/logo.png') }}" alt="Abstract Fluid Shape" class="fluid-img">
                </div>
                <div class="stats-card">
                  <div class="stats-number">
                    <h2>Rp.250.000</h2>
                  </div>
                  <div class="stats-label">
                    <p>Harga Mulai</p>
                  </div>
                  {{-- <div class="stats-arrow">
																																			<a href="#portfolio">
																																				<i class="fa fa-arrow-up"></i>
																																			</a>
																																		</div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Hero Section -->
      <!-- About Section -->
      <section id="about" class="about section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Tentang Saya</h2>
          <div>
            <span>Kenali Lebih Dekat</span>
            <span class="description-title">Profil Saya</span>
          </div>
        </div>
        <!-- End Section Title -->
        <div class="container">
          <div class="row gx-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
              <div class="about-image position-relative">
                <img src="https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/04/internship-rendi-photo-backend.png" class="img-fluid rounded-4 shadow-sm" alt="About Image" loading="lazy">
                <div class="experience-badge">
                  <span class="years">5+</span>
                  <span class="text">Tahun Pengalaman</span>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="300">
              <div class="about-content">
                <h2>Solusi Digital Kreatif & Profesional</h2>
                <p class="lead">Saya adalah pengembang independen yang menyediakan layanan pembuatan aplikasi web, mobile, serta bimbingan skripsi dan modifikasi konten digital.</p>
                <p>Dengan pendekatan yang fleksibel dan komunikasi yang terbuka, saya siap membantu klien untuk mencapai tujuan digital mereka — mulai dari ide awal hingga implementasi akhir.</p>
                <div class="row g-4 mt-3">
                  <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="feature-item">
                      <i class="fa fa-check-circle"></i>
                      <h5>Respons Cepat & Fleksibel</h5>
                      <p>Setiap proyek ditangani secara personal dan cepat, menyesuaikan kebutuhan spesifik Anda.</p>
                    </div>
                  </div>
                  <div class="col-md-6" data-aos="zoom-in" data-aos-delay="450">
                    <div class="feature-item">
                      <i class="fa fa-lightbulb-o"></i>
                      <h5>Konsultasi Gratis</h5>
                      <p>Saya siap berdiskusi mengenai ide Anda sebelum memulai proyek, tanpa biaya awal.</p>
                    </div>
                  </div>
                </div>
                <a href="#services" class="btn btn-primary mt-4">Lihat Layanan</a>
              </div>
            </div>
          </div>
          <!-- Testimonial Section -->
          <div id="testimoni" class="testimonial-section mt-5 pt-5" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
              <div class="col-lg-4" data-aos="fade-right" data-aos-delay="200">
                <div class="testimonial-intro">
                  <h3>Testimoni</h3>
                  <p>Beberapa testimoni dari klien yang puas dengan hasil kerja saya dalam berbagai proyek.</p>
                  <div class="swiper-nav-buttons mt-4">
                    <button class="slider-prev">
                      <i class="fa fa-arrow-left"></i>
                    </button>
                    <button class="slider-next">
                      <i class="fa fa-arrow-right"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-lg-8" data-aos="fade-left" data-aos-delay="300">
                <div class="testimonial-slider swiper init-swiper">
                  <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 800,
                      "autoplay": {
                        "delay": 5000
                      },
                      "slidesPerView": 1,
                      "spaceBetween": 30,
                      "navigation": {
                        "nextEl": ".slider-next",
                        "prevEl": ".slider-prev"
                      },
                      "breakpoints": {
                        "768": {
                          "slidesPerView": 2
                        }
                      }
                    }
                  </script>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <div class="rating mb-3">
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <p>"Saya dibantu membuat aplikasi skripsi dari awal sampai selesai. Hasilnya sangat memuaskan dan komunikasinya enak!"</p>
                        <div class="client-info d-flex align-items-center mt-4">
                          <img src="https://bootstrapmade.com/content/demo/Strategy/assets/img/person/person-f-1.webp" class="client-img" alt="Client" loading="lazy">
                          <div>
                            <h6 class="mb-0">Nadia Rahma</h6>
                            <span>Mahasiswi Teknik Informatika</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <div class="rating mb-3">
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <p>"Situs company profile kami dikerjakan dengan cepat dan hasilnya profesional. Terima kasih untuk bantuannya!"</p>
                        <div class="client-info d-flex align-items-center mt-4">
                          <img src="https://bootstrapmade.com/content/demo/Strategy/assets/img/person/person-m-1.webp" class="client-img" alt="Client" loading="lazy">
                          <div>
                            <h6 class="mb-0">Rizky Aditya</h6>
                            <span>Mahasiswi Teknik Informatika</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <div class="rating mb-3">
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <p>"Aplikasi mobile untuk tugas akhir saya selesai tepat waktu. Kode rapi dan dokumentasinya jelas. Sangat recommended!"</p>
                        <div class="client-info d-flex align-items-center mt-4">
                          <img src="https://i.pravatar.cc/150?img=1" class="client-img" alt="Client" loading="lazy">
                          <div>
                            <h6 class="mb-0">Dewi Sartika</h6>
                            <span>Mahasiswa Sistem Informasi</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <div class="rating mb-3">
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <p>"Bimbingan skripsi dari proposal sampai sidang sangat membantu. Dosen pun mengapresiasi struktur dan analisisnya."</p>
                        <div class="client-info d-flex align-items-center mt-4">
                          <img src="https://i.pravatar.cc/150?img=2" class="client-img" alt="Client" loading="lazy">
                          <div>
                            <h6 class="mb-0">Budi Santoso</h6>
                            <span>Alumni Teknik Informatika</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <div class="rating mb-3">
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <p>"Website toko online kami jadi lebih modern dan mudah dioperasikan. Pembayaran dan stok otomatis, mantap!"</p>
                        <div class="client-info d-flex align-items-center mt-4">
                          <img src="https://i.pravatar.cc/150?img=3" class="client-img" alt="Client" loading="lazy">
                          <div>
                            <h6 class="mb-0">Siti Aminah</h6>
                            <span>Pemilik UMKM</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <div class="rating mb-3">
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <p>"Revisi dikerjakan dengan cepat dan sesuai saran dosen. Saya lulus tepat waktu berkat bantuan pembuatan sistemnya."</p>
                        <div class="client-info d-flex align-items-center mt-4">
                          <img src="https://i.pravatar.cc/150?img=4" class="client-img" alt="Client" loading="lazy">
                          <div>
                            <h6 class="mb-0">Andi Pratama</h6>
                            <span>Mahasiswa Teknik Komputer</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <div class="rating mb-3">
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <p>"Jasa makalah dan analisis data untuk penelitian saya sangat memuaskan. Hasilnya rapi dan mudah dipresentasikan."</p>
                        <div class="client-info d-flex align-items-center mt-4">
                          <img src="https://i.pravatar.cc/150?img=5" class="client-img" alt="Client" loading="lazy">
                          <div>
                            <h6 class="mb-0">Fitri Handayani</h6>
                            <span>Mahasiswi Manajemen</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <div class="rating mb-3">
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <p>"Aplikasi SPK untuk pemilihan supplier yang saya pesan berjalan baik. Perhitungan dan laporannya sesuai teori."</p>
                        <div class="client-info d-flex align-items-center mt-4">
                          <img src="https://i.pravatar.cc/150?img=6" class="client-img" alt="Client" loading="lazy">
                          <div>
                            <h6 class="mb-0">Eko Prasetyo</h6>
                            <span>Staff IT Perusahaan</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <div class="rating mb-3">
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <p>"Komunikasi sangat responsif via WhatsApp. Proses dari briefing sampai delivery smooth. Harga juga bersaing."</p>
                        <div class="client-info d-flex align-items-center mt-4">
                          <img src="https://i.pravatar.cc/150?img=7" class="client-img" alt="Client" loading="lazy">
                          <div>
                            <h6 class="mb-0">Rina Wulandari</h6>
                            <span>Freelancer</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <div class="rating mb-3">
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <p>"Sistem informasi perpustakaan untuk skripsi saya diterima dosen tanpa revisi berat. Terima kasih banyak!"</p>
                        <div class="client-info d-flex align-items-center mt-4">
                          <img src="https://i.pravatar.cc/150?img=8" class="client-img" alt="Client" loading="lazy">
                          <div>
                            <h6 class="mb-0">Ahmad Fauzi</h6>
                            <span>Mahasiswa Teknik Informatika</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Testimonial Section -->
        </div>
      </section>
      <!-- /About Section -->
      <!-- Services Section -->
      <section id="services" class="services section">
        <div class="container section-title" data-aos="fade-up">
          <h2>Layanan</h2>
          <div>
            <span class="description-title">Layanan Saya</span>
          </div>
        </div>
        <!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="service-header">
            <div class="row align-items-center">
              <div class="col-lg-8 col-md-12">
                <div class="service-intro">
                  <h2 class="service-heading">
                    <div>Layanan Digital & Akademik</div>
                    <div>
                      <span>yang Profesional & Terpercaya</span>
                    </div>
                  </h2>
                </div>
              </div>
              <div class="col-lg-4 col-md-12">
                <div class="service-summary">
                  <p> Saya menyediakan jasa pembuatan aplikasi, bimbingan skripsi, dan modifikasi konten dengan pendekatan yang fleksibel, cepat, dan sesuai kebutuhan Anda. </p>
                  <a href="#contact" class="service-btn"> Hubungi Saya <i class="fa fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-card position-relative z-1 text-center">
                <img src="{{ asset('assets/images/skripsi.png') }}" alt="" width="100%">
                <a href="" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                  <i class="fa fa-arrow-up"></i>
                </a>
                <h3 class="text-center"> Jasa Website </h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-card position-relative z-1 text-center">
                <img src="{{ asset('assets/images/tesis.png') }}" alt="" width="78%">
                <a href="" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                  <i class="fa fa-arrow-up"></i>
                </a>
                <h3 class="text-center"> Jasa Tesis </h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-card position-relative z-1 text-center">
                <img src="{{ asset('assets/images/jurnal.png') }}" alt="" width="73%">
                <a href="" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                  <i class="fa fa-arrow-up"></i>
                </a>
                <h3 class="text-center"> Jasa Makalah </h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-card position-relative z-1 text-center">
                <img src="{{ asset('assets/images/makalah.png') }}" alt="" width="100%">
                <a href="" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                  <i class="fa fa-arrow-up"></i>
                </a>
                <h3 class="text-center"> Jasa Mobile </h3>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Services Section -->
      <section id="call-to-action" class="call-to-action section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="advertise-1 d-flex flex-column flex-lg-row gap-4 align-items-center position-relative">
            <div class="content-left flex-grow-1" data-aos="fade-right" data-aos-delay="200">
              <span class="badge text-uppercase mb-2">Gratis Konsultasi</span>
              <h2>Butuh Bantuan Skripsi atau Aplikasi?</h2>
              <p class="my-4"> Saya siap membantu kamu menyelesaikan tugas akhir, membuat aplikasi web/mobile, atau memodifikasi sistem sesuai kebutuhan. Semua proses cepat, profesional, dan bisa dibimbing sampai tuntas. </p>
              <div class="features d-flex flex-wrap gap-3 mb-4">
                <div class="feature-item">
                  <i class="fa fa-check-circle"></i>
                  <span>Respons Cepat via WhatsApp</span>
                </div>
                <div class="feature-item">
                  <i class="fa fa-check-circle"></i>
                  <span>Bisa Revisi & Diskusi</span>
                </div>
                <div class="feature-item">
                  <i class="fa fa-check-circle"></i>
                  <span>Harga Terjangkau</span>
                </div>
              </div>
              <div class="cta-buttons d-flex flex-wrap gap-3">
                <a href="https://wa.me/6281318960576?text=Hai%2C%20kak.%20Saya%20ingin%20konsultasi%20tentang%20tugas" target="_blank" class="btn btn-primary"> Konsultasi Sekarang </a>
                <a href="#services" class="btn btn-outline"> Lihat Layanan </a>
              </div>
            </div>
            <div class="content-right position-relative" data-aos="fade-left" data-aos-delay="300">
              <img src="https://freemockupzone.com/wp-content/uploads/2022/11/Free-Black-Mug-Beside-Laptop-Website-Mockup.jpg" alt="Layanan Digital" class="img-fluid rounded-4">
              <div class="floating-card">
                <div class="card-icon">
                  <i class="fa fa-users"></i>
                </div>
                <div class="card-content">
                  <span class="stats-number">+150</span>
                  <span class="stats-text">Klien Terbantu</span>
                </div>
              </div>
            </div>
            <div class="decoration">
              <div class="circle-1"></div>
              <div class="circle-2"></div>
            </div>
          </div>
        </div>
      </section>

      <section class="faq-9 faq section" id="team">
        <div class="container">
          <div class="row">
            <div class="col-lg-5" data-aos="fade-up">
              <h2 class="faq-title">Punya Pertanyaan? Temukan Jawabannya di Sini</h2>
              <p class="faq-description">Di bawah ini adalah kumpulan pertanyaan yang sering diajukan oleh klien kami terkait jasa pembuatan skripsi, aplikasi web/mobile, dan pengembangan konten. Temukan jawaban cepat sebelum kamu konsultasi lebih lanjut.</p>
              <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
                <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z" fill="currentColor"></path>
                </svg>
              </div>
            </div>
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
              <div class="faq-container">
                <div class="faq-item faq-active">
                  <h3>Apakah bisa bantu skripsi dari awal sampai selesai?</h3>
                  <div class="faq-content">
                    <p>Ya, saya menyediakan bantuan mulai dari penentuan judul, pembuatan proposal, hingga penyusunan laporan akhir. Semua dikerjakan sesuai kebutuhan dan revisi dari dosen.</p>
                  </div>
                  <i class="faq-toggle fa fa-chevron-right"></i>
                </div>
                <div class="faq-item">
                  <h3>Apakah bisa minta aplikasi berbasis web atau mobile saja?</h3>
                  <div class="faq-content">
                    <p>Tentu! Saya melayani pembuatan aplikasi sesuai permintaan — bisa berbasis web, mobile (Android/iOS), atau keduanya. Anda tinggal kirimkan spesifikasi atau contoh referensinya.</p>
                  </div>
                  <i class="faq-toggle fa fa-chevron-right"></i>
                </div>
                <div class="faq-item">
                  <h3>Berapa lama waktu pengerjaan?</h3>
                  <div class="faq-content">
                    <p>Waktu pengerjaan tergantung pada tingkat kesulitan dan kebutuhan revisi. Biasanya skripsi 1–2 bulan, aplikasi 1–4 minggu. Bisa lebih cepat jika dibutuhkan.</p>
                  </div>
                  <i class="faq-toggle fa fa-chevron-right"></i>
                </div>
                <div class="faq-item">
                  <h3>Apakah ada revisi jika belum sesuai?</h3>
                  <div class="faq-content">
                    <p>Ya, revisi gratis akan diberikan sesuai dengan kesepakatan awal. Saya juga akan bantu diskusi dan penyesuaian berdasarkan masukan dari dosen atau pembimbing.</p>
                  </div>
                  <i class="faq-toggle fa fa-chevron-right"></i>
                </div>
                <div class="faq-item">
                  <h3>Bagaimana proses pembayarannya?</h3>
                  <div class="faq-content">
                    <p>Pembayaran bisa dilakukan melalui transfer bank atau e-wallet. Umumnya 50% di awal dan 50% setelah pengerjaan selesai, atau sesuai kesepakatan.</p>
                  </div>
                  <i class="faq-toggle fa fa-chevron-right"></i>
                </div>
                <div class="faq-item">
                  <h3>Bagaimana cara konsultasi atau order?</h3>
                  <div class="faq-content">
                    <p>Sangat mudah! Klik tombol WhatsApp di halaman ini atau langsung hubungi saya di 0813-1896-0576. Sertakan detail kebutuhan Anda, dan saya akan bantu sesegera mungkin.</p>
                  </div>
                  <i class="faq-toggle fa fa-chevron-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Faq Section -->
    </main>
    <footer id="footer" class="footer">
      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-6 col-md-12 footer-about">
            <a href="/" class="logo d-flex align-items-center">
              <span class="sitename">Xiwaystack</span>
            </a>
            <p>Xiwaystack adalah solusi digital kreatif untuk kamu yang butuh pembuatan aplikasi web, mobile, hingga bantuan pengerjaan skripsi dan tugas akhir. Fokus kami adalah membantu kamu menyelesaikan proyek dengan cepat dan berkualitas.</p>
            <div class="social-links d-flex mt-4">
              <a href="https://facebook.com/xiwaystack" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="https://instagram.com/xiwaystack" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>
              <a href="https://linkedin.com/in/xiwaystack" target="_blank">
                <i class="fa fa-linkedin"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li>
                <a href="/">Home</a>
              </li>
              <li>
                <a href="/#services">Services</a>
              </li>
              <li>
                <a href="/#testimoni">Testimoni</a>
              </li>
              <li>
                <a href="{{ route('sourcecode.index') }}">Sourcecode</a>
              </li>
              <li>
                <a href="/#team">About</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>Cimahi, Jawa barat</p>
            <p>Indonesia</p>
            <p class="mt-4">
              <strong>Phone:</strong>
              <span>0813-1896-0576</span>
            </p>
            <p>
              <strong>Email:</strong>
              <span>wahyusafrizal174@gmail.com</span>
            </p>
          </div>
        </div>
      </div>
      <div class="container copyright text-center mt-4">
        <p>
          <span>Copyright</span> by <strong class="px-1 sitename">Xiwaystack</strong> ©{{date('Y')}}
        </p>
      </div>
    </footer>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
      <i class="fa fa-arrow-up-short"></i>
    </a>
    <!-- Preloader -->
    <div id="preloader"></div>
    <!-- Vendor JS Files -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/validate.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>