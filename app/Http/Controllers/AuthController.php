<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    // Proses login
    public function loginAnggota(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Log attempt
        Log::info('Login attempt', $credentials);

        if (Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
            $user = Auth::user();
            Log::info('Login successful for user', ['username' => $user->username, 'role' => $user->role]);

            // Redirect berdasarkan role
            return response()->json([
                'status' => 'success',
                'role' => $user->role,
                'message' => 'Login berhasil!',
            ]);
        }

        // Jika login gagal
        Log::warning('Login failed for user', ['username' => $credentials['username']]);
        return response()->json([
            'status' => 'error',
            'message' => 'Username atau password salah!',
        ]);
    }

    // Tampilkan form login pengguna
    public function showLoginForm()
    {
        return view('login');
    }

    // Tampilkan form registrasi
    public function showRegisterFormAnggota()
    {
        return view('register');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,user',  // Validasi role
        ]);

        // Membuat user baru
        $user = Anggota::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role'],
        ]);

        // Log registration
        Log::info('User registered successfully', ['username' => $user->username, 'role' => $user->role]);

        // Redirect ke halaman login atau halaman lain
        return redirect()->route('login.form')->with('status', 'Registrasi berhasil!');
    }
}