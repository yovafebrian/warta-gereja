<?php

use Illuminate\Support\Facades\Route;
use App\Models\Warta;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/warta', function () {
    $latestWarta = Warta::latest()->first();
    return view('warta', compact('latestWarta'));
})->name('warta.latest'); // Tambahkan ini