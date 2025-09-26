<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OTPController extends Controller
{
    // verification of OTP code
    public function verification()
    {
        return view('auth.otp-verification');
    }

    public function verify(Request $request)
    {
        // validate request
        $code = $request->validate(['code' => 'required|string|max:6|min:6']);
        $savedOTPCode = auth()->user()->otp;

        // check if not expired after 10 minutes
        if (!$savedOTPCode || $savedOTPCode->created_at->addMinutes(10) < now()) {
            return back()->withErrors([
                'code' => 'The provided OTP code has expired.',
            ])->onlyInput('code');
        }

        if ($savedOTPCode->code !== $code['code']) {
            return back()->withErrors([
                'code' => 'The provided OTP code is invalid.',
            ])->onlyInput('code');
        }

        // mark otp as verified
        $savedOTPCode->delete();

        return redirect()->route('dashboard');
    }
}
