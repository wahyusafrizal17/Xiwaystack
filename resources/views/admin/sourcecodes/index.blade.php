@extends('layouts.admin')

@section('title', 'Daftar Sourcecode')

@section('breadcrumb', 'Sourcecode')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
<style>
  .admin-content .alert { border-radius: 10px; border: none; }
  .dataTables_wrapper .dataTables_length select {
    padding: 0.4rem 2rem 0.4rem 0.75rem;
    border-radius: 8px;
    border: 1px solid #e2e8f0;
    font-size: 0.875rem;
    color: var(--admin-heading);
  }
  .dataTables_wrapper .dataTables_filter input {
    padding: 0.45rem 0.85rem;
    border-radius: 8px;
    border: 1px solid #e2e8f0;
    font-size: 0.875rem;
    margin-left: 0.5rem;
    transition: border-color 0.2s;
  }
  .dataTables_wrapper .dataTables_filter input:focus {
    border-color: var(--admin-sidebar-active);
    outline: none;
  }
  .dataTables_wrapper .dataTables_filter label,
  .dataTables_wrapper .dataTables_length label { font-size: 0.875rem; color: var(--admin-text); }
  .dataTables_wrapper .dataTables_paginate .paginate_button {
    padding: 0.4rem 0.75rem;
    margin: 0 2px;
    border-radius: 8px;
    font-size: 0.875rem;
    border: 1px solid #e2e8f0;
  }
  .dataTables_wrapper .dataTables_paginate .paginate_button.current {
    background: var(--admin-sidebar-active) !important;
    border-color: var(--admin-sidebar-active) !important;
    color: #fff !important;
  }
  .dataTables_wrapper .dataTables_info { font-size: 0.875rem; color: var(--admin-text); }
  #sourcecodes-table { border: none !important; }
  #sourcecodes-table thead th {
    border: none;
    border-bottom: 1px solid rgba(0,0,0,0.06);
    font-weight: 600;
    color: var(--admin-heading);
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    padding: 1rem;
  }
  #sourcecodes-table tbody td {
    border: none;
    border-bottom: 1px solid rgba(0,0,0,0.04);
    padding: 1rem;
    vertical-align: middle;
  }
  #sourcecodes-table tbody tr:hover td { background: rgba(0,0,0,0.02); }
  .dt-action-btns { display: flex; gap: 0.4rem; flex-wrap: wrap; }
  .dt-action-btns .btn { border-radius: 8px; padding: 0.35rem 0.6rem; }
  .thumb-cell { width: 64px; }
  .thumb-cell img { width: 48px; height: 48px; object-fit: cover; border-radius: 8px; }
  .thumb-cell .no-thumb {
    width: 48px; height: 48px;
    background: #f1f5f9;
    border-radius: 8px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 0.75rem;
    color: #94a3b8;
  }
</style>
@endpush

@section('content')
@if(session('success'))
  <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="admin-card">
  <div class="admin-card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
    <h1 class="page-title mb-0">Daftar Sourcecode</h1>
    <a href="{{ route('admin.sourcecodes.create') }}" class="btn btn-primary btn-add"><i class="fa fa-plus me-1"></i> Tambah Sourcecode</a>
  </div>
  <div class="admin-card-body">
    @if($sourcecodes->isEmpty())
      <div class="text-center py-5 px-3">
        <div class="rounded-3 d-inline-flex align-items-center justify-content-center mb-3" style="width: 64px; height: 64px; background: rgba(0,0,0,0.04);">
          <i class="fa fa-folder-open-o fa-2x" style="color: #94a3b8;"></i>
        </div>
        <p class="mb-3" style="color: var(--admin-text);">Belum ada sourcecode.</p>
        <a href="{{ route('admin.sourcecodes.create') }}" class="btn btn-primary btn-sm" style="border-radius: 8px;">Tambah pertama</a>
      </div>
    @else
      <table id="sourcecodes-table" class="table table-hover align-middle w-100" style="width:100%">
        <thead>
          <tr>
            <th style="width: 50px;">#</th>
            <th style="width: 70px;" class="no-sort">Thumbnail</th>
            <th>Judul</th>
            <th>Slug</th>
            <th style="width: 120px;">Harga</th>
            <th style="width: 110px;">Status</th>
            <th style="width: 100px;" class="no-sort">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($sourcecodes as $item)
            <tr>
              <td class="text-muted">{{ $loop->iteration }}</td>
              <td class="thumb-cell">
                @if($item->thumbnail_path)
                  <img src="{{ (str_starts_with($item->thumbnail_path ?? '', 'uploads/sourcecode/') || str_starts_with($item->thumbnail_path ?? '', 'sourcecode/')) ? asset($item->thumbnail_path) : asset('storage/' . $item->thumbnail_path) }}" alt="">
                @else
                  <span class="no-thumb">—</span>
                @endif
              </td>
              <td>
                <span class="fw-500 text-dark">{{ $item->title }}</span>
              </td>
              <td><span class="admin-slug">{{ $item->slug }}</span></td>
              <td>
                @if(! is_null($item->price))
                  <span class="fw-500 text-dark">Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                @else
                  <span class="text-muted">—</span>
                @endif
              </td>
              <td>
                @if($item->is_published)
                  <span class="admin-badge admin-badge-success">Published</span>
                @else
                  <span class="admin-badge admin-badge-secondary">Draft</span>
                @endif
                </td>
                <td>
                <div class="dt-action-btns">
                  <a href="{{ route('admin.sourcecodes.edit', $item) }}" class="btn btn-sm btn-outline-primary" title="Edit"><i class="fa fa-pencil"></i></a>
                  <form action="{{ route('admin.sourcecodes.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus sourcecode ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Hapus"><i class="fa fa-trash-o"></i></button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
  if ($('#sourcecodes-table').length) {
    $('#sourcecodes-table').DataTable({
      responsive: true,
      pageLength: 10,
      lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Semua"]],
      order: [[2, 'asc']],
      columnDefs: [
        { orderable: false, targets: 'no-sort' }
      ],
      language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json'
      }
    });
  }
});
</script>
@endpush
