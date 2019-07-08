@extends('layouts.auth')

@section('content')

<!-- Header-Navbar -->
<div class="header">
    <div class="flex-center">
        <a href="{{ route('welcome') }}">
            <p>Home</p>
        </a>
        <a href="{{ route('about') }}">
            <p>Products</p>
        </a>
        <a href="#">
            <p>Shop</p>
        </a>
        <a href="{{ route('about') }}">
            <p>About Us</p>
        </a>
        <a href="{{ route('contact') }}">
            <p>Contact</p>
        </a>
        <a href="{{ route('register') }}">
            <p>Register</p>
        </a>
    </div>
</div>

<!-- Left Half -->
<div class="split left">
    <div class="centered">
        <div class="image">
            <img src="{{ asset('images/shop.png') }}" class="login-img" />
        </div>
    </div>
</div>

<!--Right Half -->
<div class="split right">

    <!-- Login Form -->
    <div class="login-form">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            
            <div class="imgcontainer">
                <img src="images/tb1.jpg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label class="labels" for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
                @if ($errors->has('email'))
                <span class="form-control-error">
                    {{ $errors->first('email') }}
                </span>
                @endif

                <div class="small-margin"></div>

                <label class="labels" for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                @if ($errors->has('password'))
                <span class="form-control-error">
                    {{ $errors->first('password') }}
                </span>
                @endif

                <span class="psw">Forgot <a href="#">password?</a></span>

                <button class="login-btn" type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <hr class="line-separator">

            <div class="container" style="text-align:center; margin-top:20px">
                <a href="{{ route('register') }}" class="register-btn">Don't have an account? Register</a>
            </div>
        </form>
    </div>
    <!-- End Login Form -->

</div>

</div>

@endsection()