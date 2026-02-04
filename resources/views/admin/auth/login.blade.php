<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Xiwaystack</title>
    <link href="{{ asset('assets/images/logo.png') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <style>
      :root {
        --login-bg: linear-gradient(135deg, #0a1628 0%, #0d2137 50%, #0f2847 100%);
        --login-accent: #e3a127;
        --login-accent-hover: #c98d1f;
        --login-text: #1a1a2e;
        --login-muted: #6b7280;
        --login-border: #e5e7eb;
      }
      * { box-sizing: border-box; }
      body { margin: 0; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; overflow-x: hidden; }
      .login-wrap { min-height: 100vh; display: flex; flex-wrap: wrap; }
      .login-brand {
        flex: 1 1 45%;
        min-height: 100vh;
        background: var(--login-bg);
        color: #fff;
        padding: 3rem 3.5rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      .login-brand .badge {
        display: inline-block;
        background: rgba(227, 161, 39, 0.2);
        color: var(--login-accent);
        padding: 0.35rem 0.85rem;
        border-radius: 999px;
        font-size: 0.75rem;
        font-weight: 600;
        letter-spacing: 0.05em;
        margin-bottom: 2rem;
      }
      .login-brand h1 { font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem; letter-spacing: -0.02em; }
      .login-brand .welcome { font-size: 0.8rem; opacity: 0.85; text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 1rem; }
      .login-brand .headline { font-size: clamp(1.75rem, 4vw, 2.25rem); font-weight: 700; line-height: 1.25; margin-bottom: 1rem; }
      .login-brand .desc { font-size: 0.95rem; opacity: 0.9; line-height: 1.6; margin-bottom: 2rem; max-width: 380px; }
      .login-brand .features { list-style: none; padding: 0; margin: 0; }
      .login-brand .features li {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 0.9rem;
        margin-bottom: 0.85rem;
        opacity: 0.95;
      }
      .login-brand .features li::before {
        content: '';
        width: 6px;
        height: 6px;
        background: var(--login-accent);
        border-radius: 50%;
        flex-shrink: 0;
      }
      .login-brand .copyright { margin-top: auto; font-size: 0.75rem; opacity: 0.6; }
      .login-form-wrap {
        flex: 1 1 55%;
        min-height: 100vh;
        background: #f8fafc;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem;
      }
      .login-form-card {
        width: 100%;
        max-width: 400px;
        background: #fff;
        border-radius: 1.25rem;
        box-shadow: 0 4px 24px rgba(0,0,0,0.06), 0 0 1px rgba(0,0,0,0.04);
        padding: 2.5rem;
      }
      .login-form-card .welcome-back { font-size: 0.75rem; color: var(--login-muted); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.25rem; }
      .login-form-card .title { font-size: 1.5rem; font-weight: 700; color: var(--login-text); margin-bottom: 0.5rem; }
      .login-form-card .subtitle { font-size: 0.9rem; color: var(--login-muted); margin-bottom: 1.75rem; line-height: 1.5; }
      .login-form-card .form-label { font-weight: 500; color: var(--login-text); font-size: 0.9rem; margin-bottom: 0.5rem; }
      .login-form-card .form-control {
        border-radius: 0.75rem;
        border: 1px solid var(--login-border);
        padding: 0.75rem 1rem;
        font-size: 0.95rem;
      }
      .login-form-card .form-control:focus {
        border-color: var(--login-accent);
        box-shadow: 0 0 0 3px rgba(227, 161, 39, 0.15);
      }
      .login-form-card .form-control::placeholder { color: #9ca3af; }
      .login-form-card .btn-login {
        width: 100%;
        padding: 0.85rem 1.25rem;
        font-weight: 600;
        font-size: 0.95rem;
        border-radius: 0.75rem;
        background: var(--login-text);
        border: none;
        color: #fff;
        transition: background 0.2s, transform 0.05s;
      }
      .login-form-card .btn-login:hover { background: #2d2d44; color: #fff; }
      .login-form-card .btn-login:active { transform: scale(0.99); }
      .login-form-card .link-back { font-size: 0.875rem; color: var(--login-accent); font-weight: 500; }
      .login-form-card .link-back:hover { color: var(--login-accent-hover); }
      .login-form-card .form-check-label { font-size: 0.9rem; color: var(--login-muted); }
      @media (max-width: 991px) {
        .login-brand { min-height: auto; padding: 2.5rem 2rem; }
        .login-form-wrap { min-height: auto; padding: 2.5rem 1.5rem; }
      }
    </style>
  </head>
  <body>
    <div class="login-wrap">
      <div class="login-brand">
        <span class="badge">Admin Panel</span>
        <h1 class="sitename">Xiwaystack</h1>
        <p class="welcome">Welcome</p>
        <h2 class="headline">Kelola sourcecode dengan mudah dan aman.</h2>
        <p class="desc">Masuk ke panel admin untuk menambah, mengedit, dan menghapus sourcecode serta mengelola galeri gambar.</p>
        <ul class="features">
          <li>Dashboard ringkas & mudah dipakai</li>
          <li>Upload multi gambar & thumbnail</li>
          <li>Akses aman hanya untuk admin</li>
        </ul>
        <p class="copyright">© {{ date('Y') }} Xiwaystack</p>
      </div>
      <div class="login-form-wrap">
        <div class="login-form-card">
          <p class="welcome-back">Welcome back</p>
          <h2 class="title">Masuk</h2>
          <p class="subtitle">Masuk untuk mengelola Sourcecode dan konten website.</p>

          <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input id="email" type="email" name="email" value="{{ old('email') }}"
                     class="form-control form-control-lg @error('email') is-invalid @enderror"
                     placeholder="nama@email.com" required autofocus>
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input id="password" type="password" name="password"
                     class="form-control form-control-lg @error('password') is-invalid @enderror"
                     placeholder="••••••••" required>
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div class="form-check mb-0">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" value="1">
                <label class="form-check-label" for="remember">Remember me</label>
              </div>
              <a href="{{ url('/') }}" class="link-back">Kembali ke website</a>
            </div>
            <button type="submit" class="btn btn-login">Log in</button>
          </form>
        </div>
      </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
