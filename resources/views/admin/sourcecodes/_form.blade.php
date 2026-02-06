@csrf
@if(isset($sourcecode) && $sourcecode->exists)
  @method('PUT')
@endif

<div class="form-clean">
  <div class="mb-3">
    <label for="title" class="form-label">Judul <span class="text-danger">*</span></label>
    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $sourcecode->title ?? '') }}" placeholder="Judul sourcecode" required>
    @error('title')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $sourcecode->slug ?? '') }}" placeholder="{{ isset($sourcecode) && $sourcecode->exists ? 'url-friendly (kosongkan = auto dari judul)' : 'Akan diisi otomatis dari judul' }}">
    @error('slug')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">Harga (Rp)</label>
    <input
      type="number"
      name="price"
      id="price"
      min="0"
      step="1000"
      class="form-control @error('price') is-invalid @enderror"
      value="{{ old('price', $sourcecode->price ?? '') }}"
      placeholder="Contoh: 150000"
    >
    @error('price')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-section">
    <div class="form-section-title">Deskripsi</div>
    <div class="mb-3">
      <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="8" placeholder="Deskripsi lengkap dengan format rich text">{{ old('description', $sourcecode->description ?? '') }}</textarea>
      @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
  </div>

  <div class="form-section">
    <div class="form-section-title">Media</div>
    <div class="mb-3">
      <label for="thumbnail" class="form-label">Thumbnail</label>
      @if(isset($sourcecode) && $sourcecode->thumbnail_path)
        <div class="mb-2">
          <img src="{{ (str_starts_with($sourcecode->thumbnail_path ?? '', 'uploads/sourcecode/') || str_starts_with($sourcecode->thumbnail_path ?? '', 'sourcecode/')) ? asset($sourcecode->thumbnail_path) : asset('storage/' . $sourcecode->thumbnail_path) }}" alt="" class="thumb-preview">
          <span class="text-muted small d-block mt-1">Ganti dengan upload file baru di bawah.</span>
        </div>
      @endif
      <div class="dropzone dropzone-single" data-input="thumbnail" data-label="dropzone-thumb-label">
        <input type="file" name="thumbnail" id="thumbnail" class="dropzone-input @error('thumbnail') is-invalid @enderror" accept="image/*">
        <div class="dropzone-icon"><i class="fa fa-cloud-upload"></i></div>
        <div class="dropzone-text">Drag file ke sini atau klik untuk memilih</div>
        <div class="dropzone-hint">Satu file gambar (JPG, PNG, dll.)</div>
        <div class="dropzone-files" id="dropzone-thumb-label"></div>
      </div>
      @error('thumbnail')
        <div class="invalid-feedback d-block">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label class="form-label d-block">Gambar Detail</label>
      <p class="text-muted small mb-2">Gambar yang ditampilkan di halaman detail (slider). Bisa upload banyak sekaligus.</p>
      @if(isset($sourcecode) && $sourcecode->exists && $sourcecode->images->isNotEmpty())
        <div class="row g-2 mb-3">
          @foreach($sourcecode->images as $img)
            <div class="col-6 col-md-4 col-lg-3">
              <div class="border rounded p-2" style="background: #f8fafc;">
                <img src="{{ (str_starts_with($img->image_path ?? '', 'uploads/sourcecode/') || str_starts_with($img->image_path ?? '', 'sourcecode/')) ? asset($img->image_path) : asset('storage/' . $img->image_path) }}" alt="" class="img-fluid rounded w-100" style="height: 80px; object-fit: cover;">
                <label class="d-flex align-items-center mt-2 small text-muted mb-0">
                  <input type="checkbox" name="delete_images[]" value="{{ $img->id }}" class="form-check-input me-2"> Hapus
                </label>
              </div>
            </div>
          @endforeach
        </div>
      @endif
      <div class="dropzone dropzone-multiple" data-input="detail_images" data-label="dropzone-detail-label">
        <input type="file" name="detail_images[]" id="detail_images" class="dropzone-input @error('detail_images') is-invalid @enderror" accept="image/*" multiple>
        <div class="dropzone-icon"><i class="fa fa-cloud-upload"></i></div>
        <div class="dropzone-text">Drag file ke sini atau klik untuk memilih</div>
        <div class="dropzone-hint">Bisa pilih banyak file sekaligus</div>
        <div class="dropzone-files" id="dropzone-detail-label"></div>
      </div>
      @error('detail_images')
        <div class="invalid-feedback d-block">{{ $message }}</div>
      @enderror
    </div>
  </div>

  <div class="mb-3 form-publish-row">
    <div class="form-check form-switch form-switch-clean d-flex align-items-center">
      <input type="hidden" name="is_published" value="0">
      <input type="checkbox" name="is_published" id="is_published" value="1" class="form-check-input" {{ old('is_published', $sourcecode->is_published ?? true) ? 'checked' : '' }}>
      <label class="form-check-label ms-3" for="is_published">Publikasikan</label>
    </div>
  </div>

  <div class="form-actions d-flex gap-2 flex-wrap">
    <button type="submit" class="btn btn-primary px-4">{{ isset($sourcecode) && $sourcecode->exists ? 'Simpan Perubahan' : 'Tambah Sourcecode' }}</button>
    <a href="{{ route('admin.sourcecodes.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
  </div>
</div>
