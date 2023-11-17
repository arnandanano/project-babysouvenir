<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    //return view('landing_page');
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::controller(App\Http\Controllers\Admin\KategoriController::class)->group(function () {
        Route::get('/kategori', 'index');
        Route::get('/kategori/tambah', 'tambah');
        Route::post('/kategori', 'simpan');
        Route::get('/kategori/{kategori}/edit', 'edit');
        Route::put('/kategori/{kategori}', 'update');
    });

    Route::get('nota', App\Livewire\Admin\Nota\Index::class);

});
