<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('auth/login');
        }
    }

    public function actionlogin(Request $request)
    {

        $id = $request->input('username');
        $pw = $request->input('password');

        if ($id == "test" && $pw == "test") {
            // echo ('login');
            return redirect('/home');
        } else {
            // return redirect('/pesan')->with(['warning' => 'Login Gagal']);

            Session::flash('warning', 'Maaf User dan Password Salah');
            return redirect('/pesan');
        };
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
