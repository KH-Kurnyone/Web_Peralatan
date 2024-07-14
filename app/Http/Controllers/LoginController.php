<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $cek = $request->validate ([
            'username'   => 'required',
            'password'   => 'required'
        ]);
        if(Auth::attempt($cek)){
            $request->session()->regenerate();
            $user = auth()->user();
            $level = $user->role;

            if ($level == 'Admin' || $level == 'Manajer' || $level == 'Karyawan' ) {
                return redirect()->intended('/dashboard');
            } 
        } else {
            Alert::error('Login Gagal', 'Email atau Password salah.');
            return back();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/');
    }
}
