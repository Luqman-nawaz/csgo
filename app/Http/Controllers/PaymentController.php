<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Cashier;

class PaymentController extends Controller
{
    public function success(Request $request){
        $sessionId = $request->get('session_id');

        $orderId = Cashier::stripe()->checkout->sessions->retrieve($sessionId)['metadata']['order_id'] ?? null;
     
        $order = payment::where('order_id', $orderId)->get()->first();
     
        $order->update(['order_status' => 'completed']);
     
        return view('dashboard', ['order' => $order]);
    }
}
