<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email_or_username' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$|^[a-zA-Z0-9_]{3,50}$/'
            ],
            'password' => 'required|string|min:6|max:255',
            'role' => 'required|in:admin,donatur,korban,volunteer',
        ], [
            'email_or_username.regex' => 'Format email atau username tidak valid',
            'password.min' => 'Password minimal 6 karakter',
            'role.required' => 'Role harus dipilih',
        ]);

        try {
            $credentials = $request->only('password');
            $emailOrUsername = $request->email_or_username;
            $role = $request->role;

            // Tentukan guard dan field login berdasarkan role
            $guard = $role;
            $fieldName = ($role === 'admin') ? 'username' : 'email';
            
            $credentials[$fieldName] = $emailOrUsername;

            // Rate limiting check
            $key = 'login_attempt_' . $request->ip();
            if (cache()->has($key) && cache()->get($key) >= 5) {
                return back()->withErrors([
                    'email_or_username' => 'Terlalu banyak percobaan login. Silakan coba lagi dalam 15 menit.',
                ])->onlyInput('email_or_username', 'role');
            }

            // Attempt login dengan guard yang sesuai
            if (Auth::guard($guard)->attempt($credentials, $request->filled('remember'))) {
                $request->session()->regenerate();
                
                // Clear login attempts on successful login
                cache()->forget($key);
                
                // Log successful login
                Log::info('User logged in successfully', [
                    'guard' => $guard,
                    'identifier' => $emailOrUsername,
                    'ip' => $request->ip()
                ]);
                
                // Redirect berdasarkan role
                return redirect()->intended($this->redirectTo($role));
            }

            // Increment failed login attempts
            cache()->put($key, cache()->get($key, 0) + 1, 900); // 15 minutes

            // Log failed login attempt
            Log::warning('Failed login attempt', [
                'guard' => $guard,
                'identifier' => $emailOrUsername,
                'ip' => $request->ip()
            ]);

            return back()->withErrors([
                'email_or_username' => 'Kredensial tidak cocok dengan data kami.',
            ])->onlyInput('email_or_username', 'role');

        } catch (\Exception $e) {
            Log::error('Login system error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return back()->withErrors([
                'email_or_username' => 'Terjadi kesalahan sistem. Silakan coba lagi nanti.',
            ])->onlyInput('email_or_username', 'role');
        }
    }

    protected function redirectTo($role)
    {
        return match($role) {
            'admin' => route('admin.dashboard'),
            'donatur' => route('donatur.dashboard'),
            'korban' => route('korban.dashboard'),
            'volunteer' => route('volunteer.dashboard'),
            default => '/',
        };
    }
}
