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

@push('scripts')
<script src="https://cdn.tiny.cloud/1/zjf3oktgtjt6un0nqg7xa4mg1i4u0tikp8xf6dijrguvrv5c/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  if (document.getElementById('description')) {
    tinymce.init({
      selector: '#description',
      height: 420,
      menubar: 'file edit view insert format tools table',
      plugins: 'lists link image table code charmap preview fullscreen codesample anchor searchreplace wordcount',
      toolbar: 'undo redo | blocks fontsize | bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image table | charmap codesample | removeformat | code fullscreen preview',
      toolbar_mode: 'wrap',
      block_formats: 'Paragraf=p; Heading 2=h2; Heading 3=h3; Heading 4=h4; Preformatted=pre',
      fontsize_formats: '12px 14px 16px 18px 24px 36px',
      image_advtab: true,
      image_caption: true,
      table_toolbar: 'tableprops tabledelete | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol',
      content_style: 'body { font-family: Inter, system-ui, sans-serif; font-size: 14px; line-height: 1.6; }',
      promotion: false,
      branding: false
    });
  }
});
</script>
@endpush
