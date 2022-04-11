<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    //
    public function v_login()
    {
        return view('login');
        // Auth::attempt(['email' => $email, 'password' => $password]);
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect(route('dashboard'));
        }{
            return route('dashboard');
        }


    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
