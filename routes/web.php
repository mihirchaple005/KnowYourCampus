<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Image;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/chirps/{chirp}', [ChirpController::class, 'show'])->name('chirp.show');
Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store'])
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/login', [LoginController::class, 'login'])->name('login');
// Route::get('/gallery', function () {
//     return view('gallery');
// })->name('gallery');
Route::get('/chirp/show/{id}', [ChirpController::class, 'show'])->name('chirp.show');


Route::get('/gallery', function () {
    $images = Image::with('chirps')->get();
    return view('gallery', compact('images'));
})->name('gallery.show');
require __DIR__.'/auth.php';
