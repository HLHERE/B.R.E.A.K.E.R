<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }
    
    public function handleGoogleCallback() {
        try {
            $user = Socialite::driver('google')->user();
            // dd($user->id);
            $finduser = User::where('google_id', $user->getId())->first();
            if($finduser) {
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }else {
                $newUser = User::create([
                    'name' => $user->name,
                    'username' => $user->email,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => bcrypt('12345678')
                ]);

                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }

        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
