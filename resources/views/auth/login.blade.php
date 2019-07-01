@extends('layouts.auth')

@section('content')

<!-- Login Form -->

<div class="login-form">
    <form action="action_page.php">
        <div class="imgcontainer">
            <img src="images/tb1.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="email_username"><b>Email or Username</b></label>
            <input type="text" placeholder="Enter Email or Username" name="email_username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" nameA="remember"> Remember me
            </label>
        </div>

        <hr>

        <div class="container">
            <a href="{{ route('register') }}" class="registerbtn">Don't have an account? Register</a>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>

<!-- End Login Form -->

@endsection()