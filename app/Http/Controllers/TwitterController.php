<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Exception;

class TwitterController extends Controller
{
    public function redirectToTwitter(){
        return Socialite::driver('twitter')->redirect();
    }

    public function handleTwitterCallback(){
        try{
            $user = Socialite::driver('twitter')->user();
        }catch (Exception $e) {
            return redirect(route('login'))->with('status', 'Twitter authentication failed.');
        }

        $existingUser = User::where('twitter_id', $user->id)->first();

        if ($existingUser){
            Auth::login($existingUser);
        } else {
            $newUser = User::updateOrCreate([
                'email' => $user->email
            ], [
                'name' => $user->name,
                'twitter_id'=> $user->id,
                'password' => bcrypt(request(Str::random())) // Set a random password
            ]);
            Auth::login($newUser);
        }
        return redirect()->intended('dashboard');
    }
}
