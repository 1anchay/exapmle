<?php

use App\Http\Controllers\MyPlaceController;

Route::get('/my_page', [MyPlaceController::class, 'index']);

use Illuminate\Support\Facades\Route;

Route::get('/main', function () {
    return view('main');
});
Route::get('/tailwind-demo', function () {
    return view('tailwind-demo');
});
Route::get('/', function () {
    return view('sad');
});

Route::get('/team', function () {
    return view('team');  // Открывает файл team.blade.php
})->name('team');

Route::get('/history', function () {
    return view('history');
})->name('history');

use App\Http\Controllers\MainController;

Route::get('/main', [MainController::class, 'index'])->name('main');




