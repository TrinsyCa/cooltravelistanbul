<?php

use App\Http\Controllers\TransferController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/services', function() {
    return view('pages.services');
});

Route::get('/safe-travel', function() {
    return view('pages.safe-travel');
});

Route::get('/about', function() {
    return view('pages.about');
});

Route::get('/policies', function() {
    return view('pages.policies');
});

Route::get('/gallery', function() {
    return view('pages.gallery');
});

Route::get('/reviews', function() {
    return view('pages.reviews');
});

Route::get('/transfer', function () {
    return view('test.transfer');
});

Route::post('/calculate-distance', [TransferController::class, 'calculateDistance']);
