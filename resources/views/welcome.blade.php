@extends('layouts.app')

@section('title', 'Welcome')

@section('main')
    @auth
        <div>
            <a href="/dashboard/overview">Go to Dashboard</a>
        </div>
        <div>
            @include('partials.logout')
        </div>
    @else
        <div>
            <a href="/login">/login</a>
        </div>
        <div>
            <a href="/enroll">/enroll</a>
        </div>
    @endauth
@endsection
