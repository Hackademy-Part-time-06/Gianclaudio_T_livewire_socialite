<?php

namespace App\Http\Controllers;

//use Illuminate\Foundation\Auth\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;



class SocialiteController extends Controller
{
    public function login()
    {
        return Socialite::driver('github')->redirect();
    }
    
    public function callback()

    {
        $githubUser = Socialite::driver('github')->user();
        
        $user = User::updateOrCreate([
            'email' => $githubUser->email,
        ], [
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'password' => Hash::make($githubUser->token),
        ]);
        
        Auth::login($user);
        return redirect('welcome');
    }

}
