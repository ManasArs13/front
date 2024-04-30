<?php

use App\Http\Controllers\CookieController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\ResController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReqController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
//Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/docs', [HomeController::class, 'docs'])->name('docs');

Route::get('/support', [HomeController::class, 'support'])->name('support');
Route::post('/support', [HomeController::class, 'store'])->name('support.store');


Route::resource('response', ResController::class)->only([
    'index', 'store','update', 'show', 'destroy'
]);

Route::resource('request', ReqController::class)->only([
    'index', 'store', 'update', 'show', 'destroy'
]);

Route::resource('header', HeaderController::class)->only(['store', 'destroy']);
Route::resource('cookie', CookieController::class)->only(['store', 'destroy']);
Route::resource('input', InputController::class)->only('store', 'destroy');


Route::get('/dashboard', function () {
    return redirect()->route('home');
//    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
