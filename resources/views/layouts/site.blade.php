<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sourcecode') - Xiwaystack</title>
    <link href="{{ asset('assets/images/logo.png') }}" rel="icon">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @stack('styles')
  </head>
  <body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
          <h1 class="sitename">Xiwaystack</h1>
        </a>
        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
              <a href="/" class="{{ request()->path() === '' ? 'active' : '' }}">Home</a>
            </li>
            <li>
              <a href="/#services">Services</a>
            </li>
            <li>
              <a href="/#testimoni">Testimoni</a>
            </li>
            <li>
              <a href="{{ route('sourcecode.index') }}" class="{{ request()->routeIs('sourcecode.*') ? 'active' : '' }}">Sourcecode</a>
            </li>
            <li>
              <a href="/#team">About</a>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none fa fa-list"></i>
        </nav>
        <a class="btn-getstarted" href="https://wa.me/6281318960576?text=Hai%2C%20kak.%20Saya%20ingin%20konsultasi%20tentang%20tugas" target="_blank">Konsultasi Gratis</a>
      </div>
    </header>
    <main class="main">
      @yield('content')
    </main>
    <footer id="footer" class="footer">
      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-6 col-md-12 footer-about">
            <a href="/" class="logo d-flex align-items-center">
              <span class="sitename">Xiwaystack</span>
            </a>
            <p>Xiwaystack adalah solusi digital kreatif untuk kamu yang butuh pembuatan aplikasi web, mobile, hingga bantuan pengerjaan skripsi dan tugas akhir.</p>
            <div class="social-links d-flex mt-4">
              <a href="https://facebook.com/xiwaystack" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="https://instagram.com/xiwaystack" target="_blank"><i class="fa fa-instagram"></i></a>
              <a href="https://linkedin.com/in/xiwaystack" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/#services">Services</a></li>
              <li><a href="/#testimoni">Testimoni</a></li>
              <li><a href="{{ route('sourcecode.index') }}">Sourcecode</a></li>
              <li><a href="/#team">About</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>Cimahi, Jawa Barat</p>
            <p>Indonesia</p>
            <p class="mt-4"><strong>Phone:</strong> 0813-1896-0576</p>
            <p><strong>Email:</strong> wahyusafrizal174@gmail.com</p>
          </div>
        </div>
      </div>
      <div class="container copyright text-center mt-4">
        <p><span>Copyright</span> by <strong class="px-1 sitename">Xiwaystack</strong> ©{{ date('Y') }}</p>
      </div>
    </footer>
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up-short"></i></a>
    <div id="preloader"></div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
  </body>
</html>
