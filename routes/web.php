<?php

use Illuminate\Support\Facades\Route;

Route::get('/css/custom.css', function () {
    $path = resource_path('css/custom.css');

    if (! file_exists($path)) {
        abort(404);
    }

    return response()->file($path, [
        'Content-Type' => 'text/css',
    ]);
})->name('custom.css');

// Redirect URL pendukung untuk kemudahan navigasi
Route::redirect('/dashboard', '/')->name('dashboard.redirect');
Route::redirect('/pegawais', '/pegawai')->name('pegawai.redirect');
