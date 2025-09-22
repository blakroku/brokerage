@extends('layouts.app')

@section('title', 'Enroll')

@section('main')
    <section class="w-full lg:w-[400px] mx-auto mt-16">
        <div class="mb-4">
            <h1>Welcome, Investor</h1>
        </div>
        <div>
            <form role="form" action="/enroll" method="POST">

                @csrf

                <div class="mb-4">
                    <input type="text" name="name" id="name" placeholder="Name"
                        class="w-full p-2 border border-black rounded-sm">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <input type="text" name="email" id="email" placeholder="Email"
                        class="w-full p-2 border border-black rounded-sm">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-4">
                    <input type="text" name="mobile" id="mobile" placeholder="Mobile Number"
                        class="w-full p-2 border border-black rounded-sm">
                    @error('mobile')
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

                <div class="mb-4">
                    <input type="text" name="password_confirmation" id="password_confirmation"
                        placeholder="Password Confirmation" class="w-full p-2 border border-black rounded-sm">
                </div>

                <div>
                    <button type="submit" class="bg-[#F96502] text-white px-4 py-2 rounded-sm">Enroll</button>
                </div>
            </form>
        </div>

        <div class="mt-4">
            <a class="bg-[#F96502] text-white px-4 py-2 rounded-sm" href="/login">Login to your account</a>
        </div>
    </section>
@endSection
