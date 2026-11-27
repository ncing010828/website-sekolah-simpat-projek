<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TestimonialController;

Route::get('/', [LandingController::class, 'index']);
Route::post('/testimonials', [TestimonialController::class, 'store'])
    ->name('testimonials.store');