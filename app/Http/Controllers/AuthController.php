<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Show the registration form.
     */
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    /**
     * Handle the registration logic.
     */
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Simpan data user baru ke dalam database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // Default role
        ]);

        // Login user setelah registrasi
        Auth::attempt($request->only('email', 'password'));

        return redirect()->route('home')->with('success', 'Registrasi berhasil dan Anda telah login.');
    }

    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('home'); // Jika sudah login, arahkan ke halaman home
        }
        return view('auth.login');
    }

    /**
     * Handle the login logic.
     */
    public function login(Request $request)
    {
        // Validasi input login
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Coba login user
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home')->with('success', 'Login berhasil, Selamat Datang ' . Auth::user()->name);
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    /**
     * Handle the logout logic.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }
}
