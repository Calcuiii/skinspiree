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
        $credentials = $request->only('name', 'password');

        // Log attempt
        Log::info('Login attempt', ['name' => $credentials['name']]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            Log::info('Login successful for user', ['name' => $user->name, 'role' => $user->role]);

            // Redirect based on role
            if ($user->role === 'admin') {
                return redirect()->route('admin.home')->with('status', 'Login berhasil sebagai Admin!');
            } elseif ($user->role === 'user') {
                return redirect()->route('home')->with('status', 'Login berhasil sebagai User!');
            }

            // Default redirect if role is not recognized
            return redirect()->route('home')->with('status', 'Login berhasil!');
        }

        // If login fails
        Log::warning('Login failed for user', ['name' => $credentials['name']]);
        return response()->json([
            'status' => 'error',
            'message' => 'Name atau password salah!',
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
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,user',  // Validasi role
        ]);

        // Membuat user baru
        $user = Anggota::create([
            'name' => $validatedData['name'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role'],
        ]);

        // Log registration
        Log::info('User registered successfully', ['name' => $user->name, 'role' => $user->role]);

        // Redirect ke halaman login atau halaman lain
        return redirect()->route('login.form')->with('status', 'Registrasi berhasil!');
    }
}
