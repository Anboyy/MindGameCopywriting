<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\serviceController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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

Route::get('service', [serviceController::class, 'index'])->name('service');
Route::get('/about', [aboutController::class, 'index'])->name('about');
Route::get('contact', [contactController::class, 'index'])->name('contact');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/policy', function () {
    return view('term.privacy');
});
Route::get('/term', function () {
    return view('term.term');
});
