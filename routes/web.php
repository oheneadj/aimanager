<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\ProfileController;

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
});

Route::middleware('auth')->group(function () {
    Route::get('/finances', [FinanceController::class, 'index'])->name('finances');
    Route::get('/finances/create', [FinanceController::class, 'create'])->name('finances.create');
    Route::post('/finances', [FinanceController::class, 'store'])->name('finances');
    Route::get('/finances/{item}', [FinanceController::class, 'show'])->name('finances.show');
    Route::patch('/finances', [FinanceController::class, 'edit'])->name('finances');
    Route::get('/finances/{item}', [FinanceController::class, 'update'])->name('finances.update');
    Route::delete('/finances', [FinanceController::class, 'destroy'])->name('finances');
});

require __DIR__ . '/auth.php';
