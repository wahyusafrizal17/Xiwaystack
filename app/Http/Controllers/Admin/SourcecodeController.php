<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sourcecode;
use App\Models\SourcecodeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SourcecodeController extends Controller
{
    public function index()
    {
        $sourcecodes = Sourcecode::orderBy('sort_order')->orderBy('id')->get();

        return view('admin.sourcecodes.index', compact('sourcecodes'));
    }

    public function create()
    {
        return view('admin.sourcecodes.create', ['sourcecode' => new Sourcecode]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'price' => ['nullable', 'integer', 'min:0'],
            'description' => ['nullable', 'string'],
            'thumbnail' => ['nullable', 'image', 'max:2048'],
            'is_published' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'detail_images' => ['nullable', 'array'],
            'detail_images.*' => ['image', 'max:2048'],
        ]);

        $slug = ! empty($data['slug']) ? $this->uniqueSlug(Str::slug($data['slug'])) : $this->uniqueSlug(Str::slug($data['title']));
        $data['slug'] = $slug;
        $data['price'] = array_key_exists('price', $data) && $data['price'] !== null ? (int) $data['price'] : null;
        $data['is_published'] = (bool) ($data['is_published'] ?? true);
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);
        $data['features'] = [];
        unset($data['thumbnail'], $data['detail_images']);

        $sourcecode = Sourcecode::create($data);

        if ($request->hasFile('thumbnail')) {
            $path = $this->saveToPublicSourcecode($request->file('thumbnail'), $sourcecode->id, null);
            $sourcecode->update(['thumbnail_path' => $path]);
        }

        if ($request->hasFile('detail_images')) {
            $order = 0;
            foreach ($request->file('detail_images') as $file) {
                $path = $this->saveToPublicSourcecode($file, $sourcecode->id, 'gallery');
                $sourcecode->images()->create(['image_path' => $path, 'sort_order' => ++$order]);
            }
        }

        return redirect()->route('admin.sourcecodes.index')->with('success', 'Sourcecode berhasil ditambah.');
    }

    public function edit(Sourcecode $sourcecode)
    {
        $sourcecode->load('images');

        return view('admin.sourcecodes.edit', compact('sourcecode'));
    }

    public function update(Request $request, Sourcecode $sourcecode)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:sourcecodes,slug,' . $sourcecode->id],
            'price' => ['nullable', 'integer', 'min:0'],
            'description' => ['nullable', 'string'],
            'thumbnail' => ['nullable', 'image', 'max:2048'],
            'is_published' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'delete_images' => ['nullable', 'array'],
            'delete_images.*' => ['integer', 'exists:sourcecode_images,id'],
            'detail_images' => ['nullable', 'array'],
            'detail_images.*' => ['image', 'max:2048'],
        ]);

        $data['slug'] = $data['slug'] ?? $this->uniqueSlug(Str::slug($data['title']), $sourcecode->id);
        $data['price'] = array_key_exists('price', $data) && $data['price'] !== null ? (int) $data['price'] : null;
        $data['is_published'] = (bool) ($data['is_published'] ?? true);
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);
        $data['features'] = [];
        unset($data['thumbnail'], $data['delete_images'], $data['detail_images']);

        $sourcecode->update($data);

        if ($request->hasFile('thumbnail')) {
            if ($sourcecode->thumbnail_path && File::exists(public_path($sourcecode->thumbnail_path))) {
                File::delete(public_path($sourcecode->thumbnail_path));
            }
            $path = $this->saveToPublicSourcecode($request->file('thumbnail'), $sourcecode->id, null);
            $sourcecode->update(['thumbnail_path' => $path]);
        }

        if ($request->filled('delete_images')) {
            $toDelete = SourcecodeImage::where('sourcecode_id', $sourcecode->id)->whereIn('id', $request->delete_images)->get();
            foreach ($toDelete as $img) {
                if (File::exists(public_path($img->image_path))) {
                    File::delete(public_path($img->image_path));
                }
                $img->delete();
            }
        }

        if ($request->hasFile('detail_images')) {
            $maxOrder = (int) $sourcecode->images()->max('sort_order');
            foreach ($request->file('detail_images') as $file) {
                $path = $this->saveToPublicSourcecode($file, $sourcecode->id, 'gallery');
                $maxOrder++;
                $sourcecode->images()->create(['image_path' => $path, 'sort_order' => $maxOrder]);
            }
        }

        return redirect()->route('admin.sourcecodes.index')->with('success', 'Sourcecode berhasil diubah.');
    }

    public function destroy(Sourcecode $sourcecode)
    {
        $dir = public_path('uploads/sourcecode/' . $sourcecode->id);
        if (File::isDirectory($dir)) {
            File::deleteDirectory($dir);
        }
        $sourcecode->delete();

        return redirect()->route('admin.sourcecodes.index')->with('success', 'Sourcecode berhasil dihapus.');
    }

    /** Simpan file ke public/uploads/sourcecode/{id}/ atau public/uploads/sourcecode/{id}/gallery/ */
    private function saveToPublicSourcecode($file, int $sourcecodeId, ?string $subdir = null): string
    {
        $relativeBase = 'uploads/sourcecode/' . $sourcecodeId;
        $base = public_path($relativeBase);
        $dir = $subdir ? $base . '/' . $subdir : $base;
        File::ensureDirectoryExists($dir);

        $filename = Str::random(10) . '_' . time() . '.' . $file->getClientOriginalExtension();
        $file->move($dir, $filename);

        $relative = $relativeBase . ($subdir ? '/' . $subdir : '') . '/' . $filename;
        return $relative;
    }

    private function uniqueSlug(string $base, ?int $excludeId = null): string
    {
        $slug = $base;
        $q = Sourcecode::where('slug', $slug);
        if ($excludeId) {
            $q->where('id', '!=', $excludeId);
        }
        $n = 1;
        while ($q->exists()) {
            $slug = $base . '-' . $n;
            $q = Sourcecode::where('slug', $slug);
            if ($excludeId) {
                $q->where('id', '!=', $excludeId);
            }
            $n++;
        }

        return $slug;
    }

}
