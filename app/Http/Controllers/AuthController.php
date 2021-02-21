<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{

    public function show(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only(['email','password']);
        Auth::attempt($credentials);
        return redirect()->route('podcast.home');
    }
}
