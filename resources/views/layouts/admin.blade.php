<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') - Xiwaystack</title>
    <link href="{{ asset('assets/images/logo.png') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      :root {
        --admin-sidebar-bg: #1e293b;
        --admin-sidebar-text: rgba(255,255,255,0.82);
        --admin-sidebar-hover: rgba(255,255,255,0.06);
        --admin-sidebar-active: #f59e0b;
        --admin-navbar-bg: #fff;
        --admin-navbar-border: rgba(0,0,0,0.06);
        --admin-content-bg: #f1f5f9;
        --admin-card-bg: #fff;
        --admin-card-radius: 12px;
        --admin-card-shadow: 0 1px 3px rgba(0,0,0,0.04);
        --admin-text: #64748b;
        --admin-heading: #0f172a;
      }
      * { box-sizing: border-box; }
      body { margin: 0; font-family: 'Inter', system-ui, sans-serif; font-size: 0.9375rem; color: var(--admin-text); background: var(--admin-content-bg); -webkit-font-smoothing: antialiased; }
      .admin-wrapper { display: flex; min-height: 100vh; }
      .admin-sidebar {
        width: 260px;
        min-width: 260px;
        background: var(--admin-sidebar-bg);
        color: var(--admin-sidebar-text);
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        z-index: 100;
        display: flex;
        flex-direction: column;
        transition: width 0.2s;
      }
      .admin-sidebar-brand {
        padding: 1.5rem 1.25rem;
        border-bottom: 1px solid rgba(255,255,255,0.06);
      }
      .admin-sidebar-brand a {
        color: #fff;
        text-decoration: none;
        font-weight: 700;
        font-size: 1.2rem;
        letter-spacing: -0.02em;
        display: flex;
        align-items: center;
        gap: 0.5rem;
      }
      .admin-sidebar-brand a:hover { color: var(--admin-sidebar-active); }
      .admin-sidebar-nav { flex: 1; padding: 1rem 0; overflow-y: auto; }
      .admin-sidebar-nav .nav-label {
        padding: 0.5rem 1.25rem 0.35rem;
        font-size: 0.7rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: rgba(255,255,255,0.4);
      }
      .admin-sidebar-nav .nav-link {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.6rem 1.25rem;
        margin: 0 0.5rem;
        border-radius: 8px;
        color: var(--admin-sidebar-text);
        text-decoration: none;
        font-weight: 500;
        font-size: 0.9rem;
        transition: background 0.2s, color 0.2s;
      }
      .admin-sidebar-nav .nav-link:hover { background: var(--admin-sidebar-hover); color: #fff; }
      .admin-sidebar-nav .nav-link.active { background: rgba(245,158,11,0.15); color: var(--admin-sidebar-active); }
      .admin-sidebar-nav .nav-link i { width: 20px; text-align: center; opacity: 0.9; }
      .admin-main { flex: 1; margin-left: 260px; display: flex; flex-direction: column; min-height: 100vh; }
      .admin-navbar {
        background: var(--admin-navbar-bg);
        border-bottom: 1px solid var(--admin-navbar-border);
        padding: 0 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        min-height: 60px;
      }
      .admin-navbar .breadcrumb { margin: 0; background: none; padding: 0; font-size: 0.875rem; color: var(--admin-text); }
      .admin-navbar .breadcrumb-item a { color: var(--admin-text); text-decoration: none; }
      .admin-navbar .breadcrumb-item a:hover { color: var(--admin-sidebar-active); }
      .admin-navbar .breadcrumb-item.active { color: var(--admin-heading); font-weight: 500; }
      .admin-navbar-actions { display: flex; align-items: center; gap: 0.5rem; }
      .admin-navbar-actions .btn {
        font-size: 0.8125rem;
        font-weight: 500;
        padding: 0.45rem 0.9rem;
        border-radius: 8px;
      }
      .admin-content { flex: 1; padding: 1.5rem 1.75rem; }
      .admin-card {
        background: var(--admin-card-bg);
        border-radius: var(--admin-card-radius);
        box-shadow: var(--admin-card-shadow);
        border: 1px solid rgba(0,0,0,0.04);
        overflow: hidden;
      }
      .admin-card-header {
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid rgba(0,0,0,0.05);
        font-weight: 600;
        font-size: 1.05rem;
        color: var(--admin-heading);
        background: rgba(0,0,0,0.01);
      }
      .admin-card-body { padding: 1.5rem; }
      .admin-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.875rem;
      }
      .admin-table th {
        text-align: left;
        padding: 0.75rem 1rem;
        font-weight: 600;
        color: var(--admin-heading);
        background: transparent;
        border-bottom: 1px solid rgba(0,0,0,0.06);
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.03em;
      }
      .admin-table td { padding: 1rem; border-bottom: 1px solid rgba(0,0,0,0.04); vertical-align: middle; }
      .admin-table tbody tr { transition: background 0.15s; }
      .admin-table tbody tr:hover { background: rgba(0,0,0,0.02); }
      .admin-table tbody tr:last-child td { border-bottom: none; }
      .fw-500 { font-weight: 500; }
      .fw-600 { font-weight: 600; }
      .admin-badge {
        display: inline-block;
        padding: 0.28rem 0.65rem;
        font-size: 0.72rem;
        font-weight: 600;
        border-radius: 6px;
        letter-spacing: 0.02em;
      }
      .admin-badge-success { background: rgba(34,197,94,0.12); color: #16a34a; }
      .admin-badge-secondary { background: rgba(100,116,139,0.12); color: #64748b; }
      .admin-slug { font-family: ui-monospace, monospace; font-size: 0.8rem; color: #6366f1; background: rgba(99,102,241,0.08); padding: 0.25rem 0.5rem; border-radius: 6px; }
      .admin-content .page-title { font-size: 1.2rem; font-weight: 600; color: var(--admin-heading); margin-bottom: 0; letter-spacing: -0.02em; }
      .admin-content .btn-add { font-weight: 500; padding: 0.5rem 1rem; border-radius: 8px; font-size: 0.875rem; }
      /* Form clean style */
      .form-clean .form-group,
      .form-clean .mb-3 { margin-bottom: 1.5rem; }
      .form-clean .form-label {
        font-weight: 500;
        font-size: 0.875rem;
        color: var(--admin-heading);
        margin-bottom: 0.5rem;
      }
      .form-clean .form-control {
        border-radius: 0.5rem;
        border: 1px solid #e2e8f0;
        padding: 0.6rem 0.85rem;
        font-size: 0.9375rem;
      }
      .form-clean .form-control:focus {
        border-color: var(--admin-sidebar-active);
        box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.15);
      }
      .form-clean .form-control::placeholder { color: #94a3b8; }
      .form-clean .form-section {
        margin-top: 1.75rem;
        padding-top: 1.75rem;
        border-top: 1px solid rgba(0,0,0,0.06);
      }
      .form-clean .form-section-title {
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: #64748b;
        margin-bottom: 1rem;
      }
      .form-clean .form-actions { margin-top: 1.75rem; padding-top: 1.5rem; border-top: 1px solid rgba(0,0,0,0.06); }
      .form-clean .form-check-label { font-size: 0.9375rem; color: var(--admin-text); }
      .form-clean .form-publish-row { padding: 0.75rem 0; }
      .form-clean .form-switch-clean {
        padding-left: 0;
        align-items: center;
        min-height: 1.5rem;
        gap: 0;
      }
      .form-clean .form-switch-clean .form-check-input {
        width: 2.75em;
        height: 1.375em;
        margin: 0;
        background-color: #e2e8f0;
        border: none;
        cursor: pointer;
        flex-shrink: 0;
      }
      .form-clean .form-switch-clean .form-check-input:checked { background-color: #22c55e; }
      .form-clean .form-switch-clean .form-check-input:focus { box-shadow: 0 0 0 0.2rem rgba(34, 197, 94, 0.35); }
      .form-clean .form-switch-clean .form-check-label { margin-bottom: 0; user-select: none; }
      .form-clean .thumb-preview { max-height: 88px; border-radius: 0.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.08); }
      .form-clean input[type="file"].form-control { padding: 0.5rem 0.75rem; font-size: 0.875rem; }
      /* Drag & drop zone */
      .form-clean .dropzone {
        border: 2px dashed #cbd5e1;
        border-radius: 0.5rem;
        padding: 1.5rem;
        text-align: center;
        cursor: pointer;
        transition: border-color 0.2s, background 0.2s;
        position: relative;
      }
      .form-clean .dropzone:hover,
      .form-clean .dropzone.dragover { border-color: var(--admin-sidebar-active); background: rgba(245, 158, 11, 0.04); }
      .form-clean .dropzone .dropzone-input { position: absolute; inset: 0; opacity: 0; cursor: pointer; width: 100%; height: 100%; }
      .form-clean .dropzone .dropzone-text { font-size: 0.9375rem; color: #64748b; margin-bottom: 0.25rem; }
      .form-clean .dropzone .dropzone-hint { font-size: 0.8125rem; color: #94a3b8; }
      .form-clean .dropzone .dropzone-files { font-size: 0.875rem; color: var(--admin-heading); margin-top: 0.5rem; font-weight: 500; }
      .form-clean .dropzone .dropzone-icon { font-size: 1.75rem; color: #94a3b8; margin-bottom: 0.5rem; }
      @media (max-width: 991px) {
        .admin-sidebar { width: 72px; min-width: 72px; }
        .admin-sidebar-brand span:not(.fa) { display: none; }
        .admin-sidebar-nav .nav-label, .admin-sidebar-nav .nav-link span { display: none; }
        .admin-sidebar-nav .nav-link { justify-content: center; padding: 0.75rem; }
        .admin-main { margin-left: 72px; }
      }
    </style>
    @stack('styles')
  </head>
  <body>
    <div class="admin-wrapper">
      <aside class="admin-sidebar">
        <div class="admin-sidebar-brand">
          <a href="{{ route('admin.sourcecodes.index') }}">
            <i class="fa fa-code"></i>
            <span>Xiwaystack</span>
          </a>
        </div>
        <nav class="admin-sidebar-nav">
          <div class="nav-label">Menu</div>
          <a href="{{ route('admin.sourcecodes.index') }}" class="nav-link {{ request()->routeIs('admin.sourcecodes*') ? 'active' : '' }}">
            <i class="fa fa-folder-open-o"></i>
            <span>Sourcecode</span>
          </a>
        </nav>
      </aside>
      <div class="admin-main">
        <header class="admin-navbar">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="{{ route('admin.sourcecodes.index') }}">Admin</a></li>
              <li class="breadcrumb-item active" aria-current="page">@yield('breadcrumb', 'Sourcecode')</li>
            </ol>
          </nav>
          <div class="admin-navbar-actions">
            <a href="{{ route('sourcecode.index') }}" target="_blank" class="btn btn-outline-secondary btn-sm">
              <i class="fa fa-external-link"></i> Website
            </a>
            <form method="POST" action="{{ route('admin.logout') }}" class="d-inline">
              @csrf
              <button type="submit" class="btn btn-sm" style="background: rgba(245,158,11,0.12); color: #d97706;">
                <i class="fa fa-sign-out"></i> Logout
              </button>
            </form>
          </div>
        </header>
        <main class="admin-content">
          @yield('content')
        </main>
      </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script>
    (function() {
      function initDropzones() {
        document.querySelectorAll('.dropzone').forEach(function(zone) {
          var input = zone.querySelector('.dropzone-input');
          var labelEl = zone.querySelector('.dropzone-files');
          if (!input || !labelEl) return;
          function updateLabel() {
            var files = input.files;
            if (files.length === 0) { labelEl.textContent = ''; return; }
            if (files.length === 1) labelEl.textContent = files[0].name;
            else labelEl.textContent = files.length + ' file dipilih';
          }
          input.addEventListener('change', updateLabel);
          zone.addEventListener('dragover', function(e) { e.preventDefault(); e.stopPropagation(); zone.classList.add('dragover'); });
          zone.addEventListener('dragleave', function(e) { e.preventDefault(); zone.classList.remove('dragover'); });
          zone.addEventListener('drop', function(e) {
            e.preventDefault();
            zone.classList.remove('dragover');
            var files = e.dataTransfer.files;
            if (!files.length) return;
            var dt = new DataTransfer();
            for (var i = 0; i < files.length; i++) {
              if (input.multiple) dt.items.add(files[i]);
              else { dt.items.add(files[0]); break; }
            }
            input.files = dt.files;
            updateLabel();
          });
        });
      }
      if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', initDropzones);
      else initDropzones();
    })();
    </script>
    @stack('scripts')
  </body>
</html>
