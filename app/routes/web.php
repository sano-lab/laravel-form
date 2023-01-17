<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

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
    return redirect()->route('inquiry.index');
});

Route::get('/inquiry', [InquiryController::class, 'index'])->name('inquiry.index');

Route::post('/confirm', [InquiryController::class, 'confirm'])->name('inquiry.confirm');
Route::get('/confirm', [InquiryController::class, 'confirm']);

Route::post('/complete', [InquiryController::class, 'store'])->name('inquiry.store');
Route::get('/complete', [InquiryController::class, 'store']);

Route::get('/admin', [InquiryController::class, 'store']);