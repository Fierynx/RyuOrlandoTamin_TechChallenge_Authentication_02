<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function create(){
        return view('login');
    }

    public function store(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]); 
        if(!auth()->attempt($request->only('email', 'password'))){ //ngecek + login
            return back()->withErrors('Incorrect email or password');
        }

        $user = auth()->user();
        return view('dashboard', compact('user'));
    }
}
