<?php

use App\Http\Controllers\BoostController;
use App\Http\Controllers\CsgoboostController;
use App\Http\Controllers\EseaController;
use App\Http\Controllers\EsportalController;
use App\Http\Controllers\FaceitController;
use App\Http\Controllers\PaymentController;
use App\Mail\registered;
use App\Models\payment;
use Illuminate\Http\Request;
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

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/faqs', [BoostController::class, 'faqs']);

Route::get('/mail', function() {
    Mail::to('luqmanalihrp@gmail.com')->send(new registered());
});


Route::get('/csboost', [BoostController::class, 'csgoboost']);
Route::get('/faceit', [BoostController::class, 'faceit']);
Route::get('/esea', [BoostController::class, 'esea']);
Route::get('/esportal', [BoostController::class, 'esportal']);
Route::get('/coaching', [BoostController::class, 'coaching']);
Route::get('/about', [BoostController::class, 'about']);
Route::get('/contact', [BoostController::class, 'contact']);
Route::post('/contact', [BoostController::class, 'savecontact']);

Route::get('/jobs', [BoostController::class, 'jobs']);
Route::get('/apply-jobs', [BoostController::class, 'applyjobs']);
Route::get('/terms', [BoostController::class, 'terms']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/checkout/success', [PaymentController::class, 'success'])->name('home');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/checkout/{order_id}', [BoostController::class, 'checkoutpayment']);
    Route::post('/cs2/checkout', [BoostController::class, 'cs2checkout']);
    Route::post('/faceit/checkout', [BoostController::class, 'faceitcheckout']);
    Route::post('/esea/checkout', [BoostController::class, 'eseacheckout']);
    Route::post('/esportal/checkout', [BoostController::class, 'esportalcheckout']);
    
    Route::post('/payment/{order_id}', [BoostController::class, 'payment']);

    Route::post('/coaching/checkout', [BoostController::class, 'coachingcheckout']);
    Route::get('/coaching-checkout/{order_id}', [BoostController::class, 'CoachingCheckoutPayment']);
    Route::post('/coaching-payment/{order_id}', [BoostController::class, 'Coachingpayment']);

    Route::get('/checkout/failure', function (Request $request) {
        dd("Faield");
    })->name('checkout-cancel');
    
     
});
