<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index() {
        return view('dashboard.login.index');
    }

    public function store_login(Request $request) {
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();


            $status = User::find(Auth::id());
            $status->update([
                'status' => 'Online',
            ]);

            return Redirect::route('dashboard.index')->with('succes', 'Welcome Back');
        }

        return back()->withErrors([
            'email' => 'Email tidak sesuai atau belum terdaftar',
            'password' => 'Password Salah',]);
    }
}
