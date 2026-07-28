<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::middleware('guest')->group(function () {
    Route::get('/auth/login', function () {
        return view('pages.auth.login');
    })->name('login');

    Route::post('/auth/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('/auth/registration', function () {
        return view('pages.auth.registration');
    })->name('registration');

    Route::post('/auth/registration', [RegisteredUserController::class, 'store'])
        ->name('register');
});

Route::get('/home', function () {
    return view('pages/home');
})->name('home');

Route::get('/create', function () {
    return view('pages.post.create');
})->name('post.create');

Route::get('/tags', function () {
    return view('pages.post.tags');
})->name('post.tags');


Route::get('/detail/{id}', function ($id) {
    return view('pages.detail');
})->name('detail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
