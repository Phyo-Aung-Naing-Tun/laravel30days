<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function login(){
        return view('auth.logIn');
    }

    public function register(){
        return view('auth.register');
    }

    public function store(Request $request){
        $result =  $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => [
                'required',
                'string',
                Password::min(8),
                'confirmed'
            ],
        ]);
        User::create($result);
        return redirect('/login');
    }

    public function tryLogin(Request $request){
        $result = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
       if( Auth::attempt($result)){
        return redirect('/jobs');
       };
       return back();

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
 
    $request->session()->regenerateToken();
        return redirect('/login');
    }
};