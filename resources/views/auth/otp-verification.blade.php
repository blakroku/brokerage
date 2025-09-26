@extends('layouts.app')

@section('title', 'OTP Verification')

@section('main')
    <section class="w-full lg:w-[400px] mx-auto mt-16">
        <div class="mb-4">
            <h1>OTP Verification</h1>
        </div>
        <div>
            <form action="/dashboard/otp-verification" method="POST">

                @csrf

                <div class="mb-4">
                    <input type="text" name="code" id="code" placeholder="Enter OTP"
                        class="w-full p-2 border border-black rounded-sm" value="{{ old('code') }}">
                    @error('code')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4 flex justify-between items-top mt-5">
                    <div>
                        <a href="">Resend OTP</a>
                    </div>
                    <div>
                        <div class="mb-3">
                            <button type="submit" class="bg-[#F96502] text-white px-4 py-2 rounded-sm">Verify OTP</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endSection
