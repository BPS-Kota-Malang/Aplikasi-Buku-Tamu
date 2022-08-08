<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin',['except'=>'logout']);
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }else{
            return view('Auth.login');
        }
    }

    public function actionlogin(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email|exists:admins',
            'password'=>'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended(config('admin.prefix'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
        // $data = $request->validate([
        //     'email' => 'required|email:dns',
        //     'password' => 'required'
        // ]);

        // if (Auth::Attempt($data)) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('/dashboard');
        // }
        // return back()->with('loginError', 'Login Failed!');
        // //     return view('dashboard');
        // // }else{
        // //     Session::flash('error', 'Email Atau Password Salah');
        // //     return redirect('Auth.login');
        // // }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
