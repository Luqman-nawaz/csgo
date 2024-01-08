<?php

use App\Http\Controllers\BoostController;
use App\Http\Controllers\CsgoboostController;
use App\Http\Controllers\EseaController;
use App\Http\Controllers\EsportalController;
use App\Http\Controllers\FaceitController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/faqs', [BoostController::class, 'faqs']);

Route::get('/csgoboost', [BoostController::class, 'csgoboost']);
Route::get('/faceit', [BoostController::class, 'faceit']);
Route::get('/esea', [BoostController::class, 'esea']);
Route::get('/esportal', [BoostController::class, 'esportal']);
Route::get('/coaching', [BoostController::class, 'coaching']);
Route::get('/about', [BoostController::class, 'about']);
Route::get('/contact', [BoostController::class, 'contact']);
Route::post('/contact', [BoostController::class, 'savecontact']);

Route::get('/jobs', [BoostController::class, 'jobs']);
Route::get('/terms', [BoostController::class, 'terms']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/checkout/{order_id}', [BoostController::class, 'checkoutpayment']);
    Route::post('/checkout', [BoostController::class, 'checkout']);
    Route::post('/payment', [BoostController::class, 'payment']);
});
