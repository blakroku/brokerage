<?php

namespace App\Http\Controllers;

use App\Models\Otp;
use App\Models\User;
use App\Notifications\OTPCode;
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
        // validate request
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // authenticate user
        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }

        // generate otp code
        $otp = Otp::where('user_id', auth()->id())->exists();

        if ($otp) {
            $otp = Otp::where('user_id', auth()->id())->first();
            $otp->delete();
        }

        $code = rand(100000, 999999);

        // create and save otp code for verification
        auth()->user()->otp()->create([
            'code' => $code,
        ]);

        // email otp code
        auth()->user()->notify(new OTPCode($code));

        // redirect to otp verify page
        return redirect()->to('dashboard/otp-verification');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
