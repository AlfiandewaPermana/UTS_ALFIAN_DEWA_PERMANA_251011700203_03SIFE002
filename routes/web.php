<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DigitalArtController;

Route::get('/', [DigitalArtController::class, 'index'])->name('arts.index');
Route::get('/art/{id}', [DigitalArtController::class, 'show'])->name('arts.show');