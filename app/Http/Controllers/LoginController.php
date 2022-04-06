<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function view_login(){
        return view('login');
    }

    public function authentication(Request $request){
        $credentials = $request->validate([
            'email'     => ['required', 'email:dns'],
            'password'  => ['required']
        ]);

        
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with('login_error', 'These credentials do not match our records');
    }

    public function logout(Request $request){
        
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
