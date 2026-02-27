<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Tampilkan halaman login admin
     */
    public function showLogin()
    {
        return view('admin.login');
    }

    /**
     * Proses login admin
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Cek user & password
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Email atau password salah');
        }

        // Simpan session admin
        Session::put('admin_id', $user->id);
        Session::put('admin_name', $user->name);

        return redirect()->route('admin.dashboard');
    }

    /**
     * Logout admin
     */
    public function logout()
    {
        Session::forget(['admin_id', 'admin_name']);

        return redirect()->route('admin.login');
    }
}
