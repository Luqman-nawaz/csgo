<?php

namespace App\Http\Controllers;

use App\Models\boost;
use App\Models\coaching;
use App\Models\coachingpayment;
use App\Models\contact;
use App\Models\cryptopayment;
use App\Models\orderamounts;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hexters\CoinPayment\CoinPayment;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use PDO;
use stdClass;

class BoostController extends Controller
{
    public function csgoboost(){
        return view('boost.csgo');
    }

    public function faqs(){
        return view('faqs');
    }

    public function faceit(){
        return view('boost.faceit');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function jobs(){
        return view('jobs');
    }

    public function applyjobs(){
        return view('applyjobs');
    }

    public function terms(){
        return view('terms');
    }

    public function coaching(){
        return view('boost.coaching');
    }

    public function savecontact(Request $request){
        $array = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        );
        if(contact::create($array)){
            return redirect('/contact')->with('success', 'Query Received! We will get back to you soon!');
        }else{
            return redirect('/contact')->with('error', 'Could not send message!');
        }
    }

    public function esea(){
        return view('boost.esea');
    }

    public function esportal(){
        return view('boost.esportal');
    }

    public function premier(){
        return view('boost.premiere');
    }

    public function cs2checkout(Request $request){
        if(isset($request->solo_play)) { $solo_play = true; }else{ $solo_play = false; }
        if(isset($request->priority_order)) { $priority_order = true; }else{ $priority_order = false; }
        if(isset($request->play_with_booster)) { $play_with_booster = true; }else{ $play_with_booster = false; }
        
        $array = array(
            'user_id' => Auth::id(),
            'boost_id' => 1,
            'boost_type' => $request->boost_type,
            'current_level' => $request->current_level,
            'desired_level' => $request->desired_level,
            'map' => $request->map,
            'solo_play' => $solo_play,
            'priority_order' => $priority_order,
            'play_with_booster' => $play_with_booster,
        );

        if($order = boost::create($array)){
            return redirect('/checkout/'.$order->id)->with(['boostorder' => $order]);
        }else{
            return back()->with('status', 'Failed to Place Order!');    
        }
    }

    public function faceitcheckout(Request $request){
        if(isset($request->solo_play)) { $solo_play = true; }else{ $solo_play = false; }
        if(isset($request->priority_order)) { $priority_order = true; }else{ $priority_order = false; }
        if(isset($request->play_with_booster)) { $play_with_booster = true; }else{ $play_with_booster = false; }
        
        $array = array(
            'user_id' => Auth::id(),
            'boost_id' => 2,
            'boost_type' => $request->boost_type,
            'current_level' => $request->current_level,
            'desired_level' => $request->desired_level,
            'solo_play' => $solo_play,
            'priority_order' => $priority_order,
            'play_with_booster' => $play_with_booster,
        );

        if($boost = boost::create($array)){
            return redirect('/checkout/'.$boost->id)->with('boostorder', $boost);
        }else{
            return back()->with('status', 'Failed to Place Order!');    
        }
    }

    public function eseacheckout(Request $request){
        if(isset($request->solo_play)) { $solo_play = true; }else{ $solo_play = false; }
        if(isset($request->priority_order)) { $priority_order = true; }else{ $priority_order = false; }
        if(isset($request->play_with_booster)) { $play_with_booster = true; }else{ $play_with_booster = false; }
        
        $array = array(
            'user_id' => Auth::id(),
            'boost_id' => 3,
            'boost_type' => $request->boost_type,
            'current_level' => $request->current_level,
            'desired_level' => $request->desired_level,
            'solo_play' => $solo_play,
            'priority_order' => $priority_order,
            'play_with_booster' => $play_with_booster,
        );

        if($boost = boost::create($array)){
            return redirect('/checkout/'.$boost->id)->with('boostorder', $boost);
        }else{
            return back()->with('status', 'Failed to Place Order!');    
        }
    }

    public function esportalcheckout(Request $request){
        if(isset($request->solo_play)) { $solo_play = true; }else{ $solo_play = false; }
        if(isset($request->priority_order)) { $priority_order = true; }else{ $priority_order = false; }
        if(isset($request->play_with_booster)) { $play_with_booster = true; }else{ $play_with_booster = false; }
        
        $array = array(
            'user_id' => Auth::id(),
            'boost_id' => 4,
            'boost_type' => $request->boost_type,
            'current_level' => $request->current_level,
            'desired_level' => $request->desired_level,
            'solo_play' => $solo_play,
            'priority_order' => $priority_order,
            'play_with_booster' => $play_with_booster,
        );

        if($boost = boost::create($array)){
            return redirect('/checkout/'.$boost->id)->with('boostorder', $boost);
        }else{
            return back()->with('status', 'Failed to Place Order!');    
        }
    }

    public function premiercheckout(Request $request){
        if(isset($request->solo_play)) { $solo_play = true; }else{ $solo_play = false; }
        if(isset($request->priority_order)) { $priority_order = true; }else{ $priority_order = false; }
        if(isset($request->play_with_booster)) { $play_with_booster = true; }else{ $play_with_booster = false; }
        
        $array = array(
            'user_id' => Auth::id(),
            'boost_id' => 5,
            'boost_type' => $request->boost_type,
            'current_level' => $request->current_level,
            'desired_level' => $request->desired_level,
            'solo_play' => $solo_play,
            'priority_order' => $priority_order,
            'play_with_booster' => $play_with_booster,
        );

        if($boost = boost::create($array)){
            return redirect('/checkout/'.$boost->id)->with('boostorder', $boost);
        }else{
            dd($boost);
            return back()->with('status', 'Failed to Place Order!');    
        }
    }

    public function coachingcheckout(Request $request){
        
        if(isset($request->priority_order)) { $priority_order = true; }else{ $priority_order = false; }

        $array = array(
            'user_id' => Auth::id(),
            'boost_type' => $request->boost_type,
            'ingame_role' => $request->ingame_role,
            'no_of_reviews' => $request->no_of_reviews,
            'priority_order' => $priority_order,
        );

        if($boost = coaching::create($array)){
            return redirect('/coaching-checkout/'.$boost->id);
        }else{
            return back()->with('status', 'Failed to Place Order!');    
        }
    }

    public function CoachingCheckoutPayment($order_id){

        $order = coaching::where('id', $order_id)->where('user_id', Auth::id())->get()->first();

        $amount = $order->no_of_reviews * 20;
        if($order->priority_order == 1){
            $side_order = ($order->no_of_reviews * 20)/5;
        }else{
            $side_order = 0;
        }

        $total_amount = $amount + $side_order;

        return view('coaching.checkout', ['order' => $order, 'total_amount' => $total_amount]);
    }

    public function checkoutpayment($order_id){
        $order = boost::where('id', $order_id)->get()->first();

        if($order->boost_type == "Premier Rank Boost"){
            
            $difference = $order->desired_level - $order->current_level;
            $difference = round($difference, -3);

            $amount = $difference * 0.011;

            $prices = array(
                "0" => "1.00",
                "1000" => "1.00",
                "2000" => "1.00",
                "3000" => "1.00",
                "4000" => "1.00",
                "5000" => "2.00",
                "6000" => "2.00",
                "7000" => "2.00",
                "8000" => "2.00",
                "9000" => "2.00",
                "10000" => "2.73",
                "11000" => "2.73",
                "12000" => "2.73",
                "13000" => "2.73",
                "14000" => "2.73",
                "15000" => "3.28",
                "16000" => "3.28",
                "17000" => "3.28",
                "18000" => "3.28",
                "19000" => "3.28",
                "20000" => "4.56",
                "21000" => "4.56",
                "22000" => "4.56",
                "23000" => "4.56",
                "24000" => "4.56",
                "25000" => "5.84",
                "26000" => "5.84",
                "27000" => "5.84",
                "28000" => "5.84",
                "29000" => "5.84",
                "30000" => "10.57",
                "31000" => "10.57",
                "32000" => "10.57",
                "33000" => "10.57",
                "34000" => "10.57",
                "35000" => "10.57",
                "36000" => "10.57",
                "37000" => "10.57",
                "38000" => "10.57",
                "39000" => "10.57",
                "40000" => "10.57",
                "41000" => "10.57",
                "42000" => "10.57",
                "43000" => "10.57",
                "44000" => "10.57",
                "45000" => "10.57",
                "46000" => "10.57",
            );

            $newgoal = round($order->desired_level, -3);

            $price = $prices[$newgoal];
            
            $order_amount = new stdClass();
            $order_amount->amount = $amount * $price;
            

        }else if($order->boost_type == 'Elo Boost'){

            $difference = $order->desired_level - $order->current_level;
            $amount = $difference * 0.05;

            if($order->desired_level < 500){
                $extra = 1.1;
            }else if($order->desired_level <= 1000){
                $extra = 1.3;
            }else if($order->desired_level <= 1500){
                $extra = 1.6;
            }else if($order->desired_level <= 2000){
                $extra = 3.5;
            }else if($order->desired_level <= 2500){
                $extra = 6.0;
            }else if($order->desired_level <= 3000){
                $extra = 9.5;
            }else if($order->desired_level <= 3500){
                $extra = 14.5;
            }else if($order->desired_level <= 4000){
                $extra = 15.5;
            }else if($order->desired_level <= 4500){
                $extra = 15.9;
            }else if($order->desired_level <= 5000){
                $extra = 16.0;
            }
            
            $order_amount = new stdClass();
            $order_amount->amount = $amount * $extra;


        }else{

            $order_amount = orderamounts::where('boost_type', $order->boost_type)->where('current_level', $order->current_level)->where('desired_level', $order->desired_level)->get()->first();
            if(empty($order_amount)){
                return back()->with('error', 'Cannot process order with selected values');
            }

        }

        $order_amount = $order_amount->amount;

        $side_amount = ($order_amount * 0.20); 
        
        $total_amount = $order_amount;

        if($order->solo_play == 1){
            $total_amount = $total_amount + $side_amount;
        }
    
        if($order->priority_order == 1){
            $total_amount = $total_amount + $side_amount;
        }

        if($order->play_with_booster == 1){
            $total_amount = $total_amount + ($order_amount * 0.50);
        }
        return view('checkout', ['boostorder' => $order, 'total_amount' => $total_amount, 'order_amount' => $order_amount]);
    }

    public function Coachingpayment($order_id, Request $request){

        $order = coaching::where('id', $order_id)->where('user_id', Auth::id())->get()->first();

        $amount = $order->no_of_reviews * 20;
        if($order->priority_order == 1){
            $side_order = ($order->no_of_reviews * 20)/5;
        }else{
            $side_order = 0;
        }

        $total_amount = $amount + $side_order;

        $payment = array(
            'coaching_id' => $order_id,
            'name' => $request->name,
            'skype_id' => $request->skype_id,
            'discord_username' => $request->discord_username,
            'available_time' => $request->available_time,
            'account_data' => $request->account_data,
            'payment_method' => "card",
            'total_amount' => $total_amount,
            'order_status' => 'Pending Payment',
        );

        coachingpayment::create($payment);



        if($request->payment_method == 'card'){
            $stripePriceId = 'price_1OivADJAQvzmTijpmLbSd4t3';
            $quantity = 1;
            $stripeamount = $total_amount * 100;
        
            return $request->user()->checkout([$stripePriceId => $quantity],[
                'mode' => 'payment',
                'payment_method_types' => ['card', 'giropay', 'paypal', 'link'],
                'line_items' => [
                    [
                        'price_data' => [
                            'product_data' => [
                                'name' => $stripePriceId,
                            ],
                            'currency' => 'eur',
                            'unit_amount' => $stripeamount,
                        ],
                        'quantity' => 1,
                    ]
                ],
                'success_url' => route('home').'?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('checkout-cancel'),
            ]);
        }else{

            $payment = array(
                'coaching_id' => $order_id,
                'name' => $request->name,
                'skype_id' => $request->skype_id,
                'discord_username' => $request->discord_username,
                'available_time' => $request->available_time,
                'account_data' => $request->account_data,
                'payment_method' => 'crypto',
                'total_amount' => $total_amount,
                'order_status' => 'incomplete',
            );

            $createdpayment = coachingpayment::create($payment);

            $req['version'] = 1;
            $req['cmd'] = 'create_transaction';
            $req['amount'] = $total_amount;
            $req['currency1'] = 'EUR';
            $req['currency2'] = $request->crypto_currency;
            $req['buyer_email'] = Auth::user()->email;
            $req['item_name'] = 'Coaching';
            $req['item_number'] = $order_id;
            $req['ipn_url'] = 'Boost';
            $req['success_url'] = '/checkout/cryptosuccess/'.$order_id;
            $req['cancel_url'] = '/checkout/cryptofail/'.$order_id;
        
            $req['key'] = '9426644aed1497fbbdea883c0284ee8a87e3424ecdb7d60dabdfb0418f965c8b';
            $req['format'] = 'json';
            $post_data = Arr::query($req);
            
            $hmac = hash_hmac('sha512', $post_data, '8bf7577fa582C8e4B158659F45b8af05ef623d8B87EB9976d8A297Ef406DbF08');
        
            $response = Http::withHeaders([
                'HMAC' => $hmac,
            ])->asForm()->post('https://www.coinpayments.net/api.php', $req);
                
            $json = json_decode($response, true);
                
            $cryptopayment = array(
                'order_id' => $order_id,
                'payment_id' => $createdpayment->id,
                'transaction_id' => $json['result']['txn_id'],
                'payment_url' => $json['result']['checkout_url'],
            );

            cryptopayment::create($cryptopayment);
        
            return redirect($json['result']['checkout_url']);
        }
    }

    public function payment($order_id, Request $request){
        
        $order = boost::where('id', $order_id)->where('user_id', Auth::id())->get()->first();
            
            if($order->boost_type == "Premier Rank Boost"){
                
                $difference = $order->desired_level - $order->current_level;
                $difference = round($difference, -3);
                $order_amount = orderamounts::where('boost_type', $order->boost_type)->where('current_level', $difference)->where('desired_level', $difference)->get()->first();
                
                if(empty($order_amount)){
                        return back()->with('error', 'Cannot process order with selected values');
                }

            }else if($order->boost_type == 'Elo Boost'){

                $difference = $order->desired_level - $order->current_level;
                $amount = $difference * 0.05;
                
                $order_amount = new stdClass();
                $order_amount->amount = $amount;


            }else{

                $order_amount = orderamounts::where('boost_type', $order->boost_type)->where('current_level', $order->current_level)->where('desired_level', $order->desired_level)->get()->first();
                if(empty($order_amount)){
                    return back()->with('error', 'Cannot process order with selected values');
                }

            }       

            $order_amount = $order_amount->amount;

            $side_amount = ($order_amount * 0.20); 

            $total_amount = $order_amount;

            if($order->solo_play == 1){
                $total_amount = $total_amount + $side_amount;
            }
        
            if($order->priority_order == 1){
                $total_amount = $total_amount + $side_amount;
            }

            if($order->play_with_booster == 1){
                $total_amount = $total_amount + ($order_amount * 0.50);
            }

            //stripe payment
            if($request->payment_method == 'card'){

                $payment = array(
                    'order_id' => $order_id,
                    'name' => $request->name,
                    'skype_id' => $request->skype_id,
                    'discord_username' => $request->discord_username,
                    'available_time' => $request->available_time,
                    'account_data' => $request->account_data,
                    'payment_method' => 'stripe',
                    'boost_order_price' => $order_amount,
                    'total_amount' => $total_amount,
                    'order_status' => 'incomplete',
                );

                payment::create($payment);

                $stripePriceId = 'price_1OivADJAQvzmTijpmLbSd4t3';
                $quantity = 1;
                $stripeamount = floor($total_amount * 100);

                return $request->user()->checkout([$stripePriceId => $quantity],[
                    'mode' => 'payment',
                    'payment_method_types' => ['card', 'giropay', 'paypal', 'link'],
                    'line_items' => [
                        [
                            'price_data' => [
                                'product_data' => [
                                    'name' => $stripePriceId,
                                ],
                                'currency' => 'eur',
                                'unit_amount' => $stripeamount,
                            ],
                            'quantity' => 1,
                        ]
                    ],
                    'metadata' => ['order_id' => $order_id],
                    'success_url' => route('home').'?session_id={CHECKOUT_SESSION_ID}',
                    'cancel_url' => route('checkout-cancel'),
                ]);

            }else{
                //crypto payment
                $payment = array(
                    'order_id' => $order_id,
                    'name' => $request->name,
                    'skype_id' => $request->skype_id,
                    'discord_username' => $request->discord_username,
                    'available_time' => $request->available_time,
                    'account_data' => $request->account_data,
                    'payment_method' => 'crypto',
                    'boost_order_price' => $order_amount,
                    'total_amount' => $total_amount,
                    'order_status' => 'incomplete',
                );

                $createdpayment = payment::create($payment);

                $req['version'] = 1;
                $req['cmd'] = 'create_transaction';
                $req['amount'] = $total_amount;
                $req['currency1'] = 'EUR';
                $req['currency2'] = $request->crypto_currency;
                $req['buyer_email'] = Auth::user()->email;
                $req['item_name'] = 'Boost';
                $req['item_number'] = $order_id;
                $req['ipn_url'] = 'Boost';
                $req['success_url'] = '/checkout/cryptosuccess/'.$order_id;
                $req['cancel_url'] = '/checkout/cryptofail/'.$order_id;
            
                $req['key'] = '9426644aed1497fbbdea883c0284ee8a87e3424ecdb7d60dabdfb0418f965c8b';
                $req['format'] = 'json';
                $post_data = Arr::query($req);
                
                $hmac = hash_hmac('sha512', $post_data, '8bf7577fa582C8e4B158659F45b8af05ef623d8B87EB9976d8A297Ef406DbF08');
            
                $response = Http::withHeaders([
                    'HMAC' => $hmac,
                ])->asForm()->post('https://www.coinpayments.net/api.php', $req);
                    
                $json = json_decode($response, true);

                $cryptopayment = array(
                    'order_id' => $order_id,
                    'payment_id' => $createdpayment->id,
                    'transaction_id' => $json['result']['txn_id'],
                    'payment_url' => $json['result']['checkout_url'],
                );

                cryptopayment::create($cryptopayment);
            
                return redirect($json['result']['checkout_url']);

            }

    }   
}
