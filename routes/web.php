<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CollectionController;


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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/user',[UserController::class,'index'])->name('user.daftarPengguna');
    Route::get('/user/create',[UserController::class,'create'])->name('user.registrasi');
    Route::post('/userStore',[UserController::class,'store'])->name('user.storePengguna');
    Route::get('/userView/{user}',[UserController::class,'show'])->name('user.infoPengguna');

    Route::get('/koleksi',[CollectionController::class,'index'])->name('koleksi.daftarKoleksi');
    Route::get('/koleksi/create',[CollectionController::class,'create'])->name('koleksi.registrasi');
    Route::post('/koleksiStore',[CollectionController::class,'store'])->name('koleksi.storeKoleksi');
    Route::get('/koleksiView/{collection}',[CollectionController::class,'show'])->name('koleksi.infoKoleksi');

    // 6706220149-Muhammad Kafaby-4604



   
    
});

require __DIR__.'/auth.php';
