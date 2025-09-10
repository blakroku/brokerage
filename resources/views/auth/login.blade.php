@extends('layouts.app')

@section('title', 'Enroll')

@section('main')
    <section class="w-[400px] mx-auto mt-16">
        <div class="mb-4">
            <h1>Welcome, Investor</h1>
        </div>
        <div>
            <form action="/login" method="POST">

                @csrf

                <div class="mb-4">
                    <input type="text" name="email" id="email" placeholder="Email"
                        class="w-full p-2 border border-black rounded-sm">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="text" name="password" id="password" placeholder="Password"
                        class="w-full p-2 border border-black rounded-sm">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <input type="checkbox" name="remember" id="remember">
                    <span>Remember me</span>
                </div>
                <div class="mb-4 flex justify-between items-top mt-5">
                    <div>
                        <a href="">Reset password</a>
                    </div>
                    <div>
                        <div class="mb-3">
                            <button type="submit" class="bg-[#F96502] text-white px-4 py-2 rounded-sm">Sign in</button>
                        </div>
                        <div>
                            <a class="bg-[#F96502] text-white px-4 py-2 rounded-sm" href="/enroll">Register Account</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endSection
