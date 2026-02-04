<?php

use Illuminate\Support\Facades\Route;

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
