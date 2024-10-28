<?php

namespace App\Http\Controllers;

use App\Mail\registered;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Support\Facades\Mail;

class TwitterController extends Controller
{
    public function redirectToTwitter(){
        return Socialite::driver('twitter')->redirect();
    }

    public function handleTwitterCallback(){
        try{

            $user = Socialite::driver('twitter')->user();

            $finduser = User::where('twitter_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                return redirect()->intended('dashboard');

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'twitter_id'=> $user->id,
                    'password' => encrypt('123456dummy'),
                    'email_verified_at' => now(),
                ]);

                Auth::login($newUser);

                Mail::to($user->email)->send(new registered());

                return redirect()->intended('dashboard');
            }

        }catch (Exception $e) {
            return redirect(route('login'))->with('status', 'Twitter authentication failed.');
        }       
    }
}
