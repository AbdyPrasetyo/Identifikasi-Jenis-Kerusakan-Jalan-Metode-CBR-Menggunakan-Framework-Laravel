<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
 public function index()
 {
    if ($user = Auth::user()) {
        if ($user->level == '1') {
            return redirect()->intended('dashboard');
        }elseif ($user->level == '2'){
            return redirect()->intended('home');
        }
    }
    return view('login.view_login',[
        'title' => "Login"
    ]);
 }

public function proses(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    $kredensial = $request->only('email', 'password');

    if (Auth::attempt($kredensial)) {
        $request->session()->regenerate();
        $user = Auth::user();
        if ($user->level == '1') {
            return redirect()->intended('dashboard');
        }elseif ($user->level == '2'){
            return redirect()->intended('home');
        }
        return redirect()->intended('/');
    }

    return back()->withErrors([
        'email' => 'email or password incorect',
    ])->onlyInput('email');

}

public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}

}

