<?php

namespace App\Http\Controllers;

use App\Models\boost;
use App\Models\cryptopayment;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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

    public function cryptosuccess($id){

                $order = boost::where('id', $id)->get()->first();

                if(Auth::id() != $order->user_id){
                    return redirect('/dashboard');
                }

                $payment = payment::where('order_id', $order->id)->get()->first();
                
                if($payment->order_status != "incomplete"){
                    return redirect('/dashboard')->with('status', 'Order has been paid for!');
                }

                $cryptopayment = cryptopayment::where('order_id', $order->id)->get()->first();

                $req['version'] = 1;
                $req['cmd'] = 'get_tx_info';
                $req['txid'] = $cryptopayment->transaction_id;
                $req['key'] = '4414bbf7d7180b5c0f3340d6e768aa22c69e8f63ffa05547252b72b2c7919450';
                $req['format'] = 'json';
                $post_data = Arr::query($req);
            
                $hmac = hash_hmac('sha512', $post_data, '376bB676679081ca72B78F1c49599e20136Bfb765eE4acE249A5f9168be102Be');
            
                $response = Http::withHeaders([
                    'HMAC' => $hmac,
                ])->asForm()->post('https://www.coinpayments.net/api.php', $req);
                    
                $json = json_decode($response, true);

                if($json['result']['status'] >= 100 OR $json['result']['status'] == 2){
                    
                    $order = payment::where('order_id', $order->id)->get()->first();
     
                    $order->update(['order_status' => 'completed']);
                
                    return view('dashboard', ['order' => $order])->with('status', 'Order marked paid!');
                }else{
                    return redirect('/dashboard')->with('status', 'Payment for this order was not received!');
                }
    }

    public function cryptofail($id){
        return redirect('dashboard')->with('status', 'Failed to complete payment');
    }
}
