@extends('layouts.auth')

@section('content')
    <div id="welcome">
        <div class="content">
            <div class="title">
                <h1>{{ config('app.name', 'Laravel') }}</h1>
                <h2>The Forge Simulator</h2>
            </div>
            <div class="links">
                @auth
                    <button-link href="{{ url('home') }}">Get Started!</button-link>
                @else
                    @if (Route::has('login'))
                        <button-link href="{{ route('login') }}">Login</button-link>
                    @endif
                    @if (Route::has('register'))
                        <button-link href="{{ route('register') }}">Register</button-link>
                    @endif
                @endauth
            </div>
        </div>
    </div>
@endsection
