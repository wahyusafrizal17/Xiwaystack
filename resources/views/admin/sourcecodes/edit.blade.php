@extends('layouts.admin')

@section('title', 'Edit Sourcecode')

@section('breadcrumb', 'Edit Sourcecode')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h4 class="mb-0 fw-600" style="color: var(--admin-heading);">Edit Sourcecode</h4>
  <a href="{{ route('admin.sourcecodes.index') }}" class="btn btn-outline-secondary btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
</div>

<div class="admin-card">
  <div class="admin-card-header">Form Sourcecode</div>
  <div class="admin-card-body p-4">
    <form action="{{ route('admin.sourcecodes.update', $sourcecode) }}" method="POST" enctype="multipart/form-data">
      @include('admin.sourcecodes._form')
    </form>
  </div>
</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
<script>
$(document).ready(function() {
  if ($('#description').length) {
    $('#description').summernote({
      placeholder: 'Deskripsi lengkap dengan format rich text',
      height: 320,
      minHeight: 200,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture']],
        ['view', ['codeview', 'fullscreen']]
      ],
      styleTags: ['p', 'h2', 'h3', 'h4', 'pre']
    });
  }
});
</script>
@endpush
