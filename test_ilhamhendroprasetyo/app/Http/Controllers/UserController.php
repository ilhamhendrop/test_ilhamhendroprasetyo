<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        return view('dashboard.user.index', compact('users'));
    }

    public function store_user(User $user, Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ], [
            'username.required' => 'Tidak boleh kosong',
            'password.required' => 'Tidak boleh kosong',
            'role.required' => 'Tidak boleh kosong',
        ]);

        $user->create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return Redirect::back()->with('succes', 'Berhasil');
    }

    public function edit_user(User $user) {
        return view('dashboard.obat.edit', compact('user'));
    }

    public function update_user(User $user, Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ], [
            'username.required' => 'Tidak boleh kosong',
            'password.required' => 'Tidak boleh kosong',
            'role.required' => 'Tidak boleh kosong',
        ]);

        $user->update([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return Redirect::route('user.index')->with('succes', 'Berhasil');
    }

    public function edit_password(User $user) {
        return view('dashboard.user.edit_password', compact('user'));
    }

    public function update_user_password(User $user, Request $request) {
        $request->validate([
            'password' => 'required',
        ], [
            'username.required' => 'Tidak boleh kosong',
            'password.required' => 'Tidak boleh kosong',
            'role.required' => 'Tidak boleh kosong',
        ]);

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return Redirect::route('user.index')->with('succes', 'Berhasil');
    }

    public function delete_user(User $user) {
        $user->delete();

        return Redirect::back()->with('succes', 'Berhasil');
    }
}
