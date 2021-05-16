<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    //todo landing page in future
    return redirect()->route('dashboard');
});

Route::middleware(['guest'])->group(function () {
    Route::get('login', \App\Http\Livewire\Auth\Login::class)->name('login');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('dashboard', \App\Http\Livewire\Admin\Dashboard\Index::class)->name('dashboard');
});
