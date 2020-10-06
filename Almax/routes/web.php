<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
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
    return view('auth.login');
});

Route::resource('products', ProductController::class);
Route::resource('invoices', InvoiceController::class);
Route::resource('providers', ProviderController::class);
Route::resource('outlets', OutletController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth:sanctum', 'verified'])->name('dashboard');
