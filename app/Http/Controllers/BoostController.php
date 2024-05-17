<?php

namespace App\Http\Controllers;

use App\Models\boost;
use App\Models\coaching;
use App\Models\coachingpayment;
use App\Models\contact;
use App\Models\orderamounts;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

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
        $order = coaching::where('id', $order_id)->get()->first();
        return view('coaching.checkout', ['order' => $order]);
    }

    public function checkoutpayment($order_id){
        $order = boost::where('id', $order_id)->get()->first();

        $order_amount = orderamounts::where('boost_type', $order->boost_type)->where('current_level', $order->current_level)->where('desired_level', $order->desired_level)->get()->first();
        if(empty($order_amount)){
            return back()->with('error', 'Cannot process order with selected values');
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
            $total_amount = $total_amount + $side_amount;
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

        $stripePriceId = 'price_1OivADJAQvzmTijpmLbSd4t3';
        $quantity = 1;
        $stripeamount = $total_amount * 100;
    
        return $request->user()->checkout([$stripePriceId => $quantity],[
            'mode' => 'payment',
            'payment_method_types' => ['card', 'giropay', 'sofort', 'paypal', 'link'],
            'line_items' => [
                [
                    'price_data' => [
                        'product_data' => [
                            'name' => $stripePriceId,
                        ],
                        'currency' => 'usd',
                        'unit_amount' => $stripeamount,
                    ],
                    'quantity' => 1,
                ]
            ],
            'success_url' => route('home').'?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout-cancel'),
        ]);
    }

    public function payment($order_id, Request $request){
        
        $order = boost::where('id', $order_id)->where('user_id', Auth::id())->get()->first();
            
            $order_amount = orderamounts::where('boost_type', $order->boost_type)->where('current_level', $order->current_level)->where('desired_level', $order->desired_level)->get()->first();
            if(empty($order_amount)){
                return back()->with('error', 'Cannot process order with selected values');
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
                $total_amount = $total_amount + $side_amount;
            }

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
        $stripeamount = $total_amount * 100;

        return $request->user()->checkout([$stripePriceId => $quantity],[
            'mode' => 'payment',
            'payment_method_types' => ['card', 'paypal', 'link'],
            'line_items' => [
                [
                    'price_data' => [
                        'product_data' => [
                            'name' => $stripePriceId,
                        ],
                        'currency' => 'usd',
                        'unit_amount' => $stripeamount,
                    ],
                    'quantity' => 1,
                ]
            ],
            'metadata' => ['order_id' => $order_id],
            'success_url' => route('home').'?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout-cancel'),
        ]);

    }   
}
