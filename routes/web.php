<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    //ENVIO CORREOS
    Route::get('/send-emails', [EmailController::class, 'index'])->name('send-emails.index');
    Route::post('/send-emails', [EmailController::class, 'store'])->name('send-emails.store');
    Route::get('/emails', [EmailController::class, 'sendEmail'])->name('sendEmail');
    Route::get('/delete-emails', [EmailController::class, 'deleteEmail'])->name('deleteEmail');


});

require __DIR__.'/auth.php';
