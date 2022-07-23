<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }else{
            return view('v_login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return view('dashboard');
        }else{
            Session::flash('error', 'Email Atau Password Salah');
            return redirect('v_login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
