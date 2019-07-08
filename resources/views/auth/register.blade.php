@extends('layouts.auth')

@section('content')

<!-- Header-Navbar -->
<div class="header">
    <div class="flex-center">
        <a href="{{ route('welcome') }}">
            <p>Home</p>
        </a>
        <a href="{{ route('contact') }}">
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
        <a href="{{ route('login') }}">
            <p>Login</p>
        </a>
    </div>
</div>
<!--// End of Header -->

<!-- Register Form -->

<div class="register-form">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="container">
            <label for="name" class="labels"><b>First + Last Name</b></label>
            <input type="text" placeholder="Enter First + Last Name" name="name" required>
            @if ($errors->has('name'))
            <span class="form-control-error">
                {{ $errors->first('name') }}
            </span>
            @endif

            <label for="email" class="labels"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            @if ($errors->has('email'))
            <span class="form-control-error">
                {{ $errors->first('email') }}
            </span>
            @endif

            <label for="username" class="labels"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            @if ($errors->has('username'))
            <span class="form-control-error">
                {{ $errors->first('username') }}
            </span>
            @endif

            <label for="password" class="labels"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            @if ($errors->has('password'))
            <span class="form-control-error">
                {{ $errors->first('password') }}
            </span>
            @endif

            <label for="confirm_password" class="labels"><b>Confirm Password</b></label>
            <input type="password" placeholder="Re-Enter Password" name="confirm_password" required>
            @if ($errors->has('confirm_password'))
            <span class="form-control-error">
                {{ $errors->first('confirm_password') }}
            </span>
            @endif

            <button type="submit">Register</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <hr>

        <div class="container" style="text-align:center">
            Already have an account? <a href="{{ route('login') }}">Login</a>
        </div>

    </form>
</div>

<!-- End Register Form -->

@endsection()