<?php

namespace App\Http\Controllers;

use App\Models\boost;
use App\Models\coaching;
use App\Models\coachingpayment;
use App\Models\contact;
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

        if($boost = boost::create($array)){
            return redirect('/checkout/'.$boost->id)->with('boostorder', $boost);
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
        $boost = boost::where('id', $order_id)->get()->first();
        return view('checkout', ['boostorder' => $boost]);
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
            'payment_method' => $request->e,
            'total_amount' => $total_amount,
            'order_status' => 'Pending Payment',
        );

        coachingpayment::create($payment);

        dd('Coaching Order Placed, now to redirect to Stripe if Stripe selected OR redirect to Crypto if Crypto selected.');

    }

    public function payment($order_id, Request $request){
        $order = boost::where('id', $order_id)->where('user_id', Auth::id())->get()->first();

        if($order->boost_type == "Rank Boost" OR $order->boost_type == "Danger Zone Boost" OR $order->boost_type == "Elo Boost" OR $order->boost_type == "ESEA Rank Boost" OR $order->boost_type == "Esportal Rank Boost"){

            if($order->desired_level == "Silver I"){
                $order_amount = 10;
            }else if($order->desired_level = "SilverII"){
                $order_amount = 15;
            }else if($order->desired_level = "SilverIII"){
                $order_amount = 20;
            }else if($order->desired_level = "SilverIV"){
                $order_amount = 25;
            }else if($order->desired_level = "SilverElite"){
                $order_amount = 30;
            }else if($order->desired_level = "SilverEliteMaster"){
                $order_amount = 35;
            }else if($order->desired_level = "GoldNovaI"){
                $order_amount = 40;
            }else if($order->desired_level = "GoldNovaII"){
                $order_amount = 45;
            }else if($order->desired_level = "GoldNovaIII"){
                $order_amount = 50;
            }else if($order->desired_level = "GoldNovaMaster"){
                $order_amount = 55;
            }else if($order->desired_level = "MasterGuardian"){
                $order_amount = 60;
            }else if($order->desired_level = "MasterGuardianII"){
                $order_amount = 65;
            }else if($order->desired_level = "MasterGuardianElite"){
                $order_amount = 70;
            }else if($order->desired_level = "DistunguishedMasterGuardian"){
                $order_amount = 75;
            }else if($order->desired_level = "LegendaryEagle"){
                $order_amount = 80;
            }else if($order->desired_level = "LegendaryEagleMaster"){
                $order_amount = 85;
            }else if($order->desired_level = "SupremeMaster"){
                $order_amount = 90;
            }else if($order->desired_level = "GlobalElite"){
                $order_amount = 100;
            }

        }

        if($order->boost_type == "Win Boost" OR $order->boost_type == "FaceIt Win Boost" OR $order->boost_type == "ESEA Win Boost"){
            $order_amount = $order->desired_level * 7;
        }

            if($order->solo_play == 1){
                $side_amount = ($order_amount * 20) / 5; 
                $total_amount = $order_amount + $side_amount;
            }else if($order->priority_order == 1){
                $side_amount = ($order_amount * 20) / 5; 
                $total_amount = $order_amount + $side_amount;
            }else if($order->play_with_booster == 1){
                $side_amount = ($order_amount * 20) / 5; 
                $total_amount = $order_amount + $side_amount;
            }else{
                $total_amount = $order_amount;
            }



        $payment = array(
            'order_id' => $order_id,
            'name' => $request->name,
            'skype_id' => $request->skype_id,
            'discord_username' => $request->discord_username,
            'available_time' => $request->available_time,
            'account_data' => $request->account_data,
            'payment_method' => $request->e,
            'total_amount' => $total_amount,
            'order_status' => 'Pending Payment',
        );

        payment::create($payment);

        dd('Boosting Order Placed, now to redirect to Stripe if Stripe selected OR redirect to Crypto if Crypto selected.');
    }   
}
