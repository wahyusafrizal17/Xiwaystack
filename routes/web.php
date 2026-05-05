<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Models\Sourcecode;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/jasa-pembuatan-website', 'pages.services.website')->name('services.website');
Route::view('/jasa-aplikasi-mobile', 'pages.services.mobile')->name('services.mobile');
Route::view('/jasa-skripsi-tugas-akhir', 'pages.services.skripsi')->name('services.skripsi');
Route::view('/jasa-api-integrasi', 'pages.services.api')->name('services.api');

Route::get('/sitemap.xml', function () {
    $base = rtrim(config('app.url') ?: url('/'), '/');

    $static = [
        ['loc' => $base . '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['loc' => $base . '/#layanan', 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => $base . '/#portfolio', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => $base . '/#testimoni', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => $base . '/#faq', 'priority' => '0.5', 'changefreq' => 'monthly'],
        ['loc' => route('sourcecode.index', absolute: true), 'priority' => '0.8', 'changefreq' => 'weekly'],
        ['loc' => route('services.website', absolute: true), 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['loc' => route('services.mobile', absolute: true), 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['loc' => route('services.skripsi', absolute: true), 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['loc' => route('services.api', absolute: true), 'priority' => '0.9', 'changefreq' => 'monthly'],
    ];

    $items = [];
    foreach ($static as $s) {
        $items[] = [
            'loc' => $s['loc'],
            'lastmod' => now()->toAtomString(),
            'changefreq' => $s['changefreq'],
            'priority' => $s['priority'],
        ];
    }

    $sourcecodes = Sourcecode::query()
        ->where('is_published', true)
        ->orderByDesc('updated_at')
        ->get(['slug', 'updated_at']);

    foreach ($sourcecodes as $sc) {
        $items[] = [
            'loc' => route('sourcecode.show', $sc->slug, true),
            'lastmod' => optional($sc->updated_at)->toAtomString() ?? now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.7',
        ];
    }

    $xml = view('seo.sitemap', ['items' => $items])->render();
    return Response::make($xml, 200, ['Content-Type' => 'application/xml; charset=UTF-8']);
})->name('sitemap');

Route::get('/sourcecode', [\App\Http\Controllers\SourcecodeController::class, 'index'])->name('sourcecode.index');
Route::get('/sourcecode/{sourcecode:slug}', [\App\Http\Controllers\SourcecodeController::class, 'show'])->name('sourcecode.show');

Route::prefix('admin')->group(function () {
    Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/sourcecodes', [\App\Http\Controllers\Admin\SourcecodeController::class, 'index'])->name('admin.sourcecodes.index');
        Route::get('/sourcecodes/create', [\App\Http\Controllers\Admin\SourcecodeController::class, 'create'])->name('admin.sourcecodes.create');
        Route::post('/sourcecodes', [\App\Http\Controllers\Admin\SourcecodeController::class, 'store'])->name('admin.sourcecodes.store');
        Route::get('/sourcecodes/{sourcecode}/edit', [\App\Http\Controllers\Admin\SourcecodeController::class, 'edit'])->name('admin.sourcecodes.edit');
        Route::put('/sourcecodes/{sourcecode}', [\App\Http\Controllers\Admin\SourcecodeController::class, 'update'])->name('admin.sourcecodes.update');
        Route::delete('/sourcecodes/{sourcecode}', [\App\Http\Controllers\Admin\SourcecodeController::class, 'destroy'])->name('admin.sourcecodes.destroy');
    });
});
