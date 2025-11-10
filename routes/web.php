<?php

use Illuminate\Support\Facades\Route;
use App\Models\Warta;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/warta', function () {
    $latestWarta = Warta::latest()->first();
    return view('warta', compact('latestWarta'));
})->name('warta.latest');


Route::get('/warta-terbaru', function () {
    $latestWarta = Warta::latest()->first(); //

    if ($latestWarta) {
        // Jika warta ada, langsung arahkan (redirect) ke file PDF-nya
        return redirect(asset('storage/' . $latestWarta->file_path)); //
    } else {
        // Jika belum ada warta sama sekali
        return 'Belum ada warta yang diunggah.';
    }
})->name('warta.redirect'); // Kita beri nama baru 'warta.redirect'