<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'], //email harus unique
            'password' => ['required', 'min:8','string', 'confirmed'], //confirmed mksudnya hrus sesuai dengan password_confirmation valuenya
        ]); 

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), //hashing password, bisa jg dgn Hash::make
        ]);

        auth()->login($user);
        return view('dashboard', compact('user'));
    }
}
