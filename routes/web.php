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
    return redirect()->route('login');
});

Auth::routes([
    'register' => false,
    'reset' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('vaccination_infos', App\Http\Controllers\VaccinationInfoController::class)->middleware('admin');
    Route::resource('vaccinations', App\Http\Controllers\VaccinationController::class);
    Route::resource('xodim', \App\Http\Controllers\XodimController::class)->middleware('admin');
    Route::resource('bemor', \App\Http\Controllers\BemorsController::class);
    Route::get('/download', [\App\Http\Controllers\DownloadController::class, 'download'])->name('download');
});

