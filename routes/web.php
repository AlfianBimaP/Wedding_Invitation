<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RSVPController;
use App\Http\Controllers\BestWishesController;

Route::get('/', function () {
    return view('section_combined');
});

Route::post('/submit-rsvp', [RSVPController::class, 'store'])->name('rsvp.store');
Route::post('/submit-best-wishes', [BestWishesController::class, 'store'])->name('best-wishes.store');