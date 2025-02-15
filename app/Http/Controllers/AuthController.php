<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function check(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect()->route('home');
        }
        return back()->with('error', 'Wrong email or password, try again');
    }
}
