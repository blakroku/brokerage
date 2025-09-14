<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Services\AccountNumberGenerator;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function enroll(Request $request)
    {
        // todo: convert to custom validation request
        $user = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'mobile' => 'nullable|string|max:20',
        ]);

        $user['password'] = Hash::make($user['password']);
        $user['uuid'] = Str::uuid();

        DB::transaction(function () use ($user) {
            $user = User::create($user);

            // todo: move to mutator / observer
            $user->account()->create([
                'account_number' => AccountNumberGenerator::generate(),
                'uuid' => (string) Str::uuid(),
            ]);
        });
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }

        return redirect()->intended('dashboard/overview');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
