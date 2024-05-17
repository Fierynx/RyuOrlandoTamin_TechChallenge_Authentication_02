<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate(); //hapus data dari session
        $request->session()->regenerateToken(); //buat session token lagi
        return redirect('/login');
    }

    public function dashboard(){
        $user = auth()->user();
        return view('dashboard', compact('user'));
    }
}
