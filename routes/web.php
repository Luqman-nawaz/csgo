<?php

use App\Http\Controllers\BoostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CsgoboostController;
use App\Http\Controllers\EseaController;
use App\Http\Controllers\EsportalController;
use App\Http\Controllers\FaceitController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TwitterController;
use App\Mail\registered;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Laravel\Cashier\Cashier;

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

Route::get('/discord', [ContactController::class, 'discord']);

Route::get('/privacy', function () {
    return view('privacy');
});

Route::controller(BoostController::class)->group(function(){
    Route::get('/faqs', 'faqs');
    Route::get('/csboost', 'csgoboost');
    Route::get('/faceit', 'faceit');
    Route::get('/esea', 'esea');
    Route::get('/esportal', 'esportal');
    Route::get('/premier', 'premier');
    Route::get('/coaching', 'coaching');
    Route::get('/about', 'about');
    Route::get('/contact', 'contact');
    Route::post('/contact', 'savecontact');
    Route::get('/jobs', 'jobs');
    Route::get('/apply-jobs', 'applyjobs');
    Route::get('/terms', 'terms');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/checkout/success', [PaymentController::class, 'success'])->name('home');
    Route::get('/checkout/cryptosuccess/{id}', [PaymentController::class, 'cryptosuccess'])->name('cryptohome');
    Route::get('/checkout/cryptofail/{id}', [PaymentController::class, 'cryptofail'])->name('cryptofail');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/checkout/orderpayment/{order_id}', [BoostController::class, 'checkoutpaymentnew']);
    Route::get('/checkout/{order_id}', [BoostController::class, 'checkoutpayment']);
    Route::post('/cs2/checkout', [BoostController::class, 'cs2checkout']);
    Route::post('/faceit/checkout', [BoostController::class, 'faceitcheckout']);
    Route::post('/esea/checkout', [BoostController::class, 'eseacheckout']);
    Route::post('/esportal/checkout', [BoostController::class, 'esportalcheckout']);
    Route::post('/premier/checkout', [BoostController::class, 'premiercheckout']);
    
    Route::post('/payment/{order_id}', [BoostController::class, 'payment']);
    Route::post('/payment/orderpayment/{order_id}', [BoostController::class, 'fakepayment']);

    Route::post('/coaching/checkout', [BoostController::class, 'coachingcheckout']);
    Route::get('/coaching-checkout/{order_id}', [BoostController::class, 'CoachingCheckoutPayment']);
    Route::post('/coaching-payment/{order_id}', [BoostController::class, 'Coachingpayment']);

    Route::get('/checkout/failure', function (Request $request) {
        dd("Faield");
    })->name('checkout-cancel');
        
});


Route::controller(GoogleController::class)->group(function(){
    Route::get('/auth/google', 'redirectToGoogle');
    Route::get('/auth/google/callback', 'handleGoogleCallback');
});

Route::controller(TwitterController::class)->group(function(){
    Route::get('auth/twitter', 'redirectToTwitter')->name('auth.twitter');
    Route::get('auth/twitter/callback', 'handleTwitterCallback');
});
