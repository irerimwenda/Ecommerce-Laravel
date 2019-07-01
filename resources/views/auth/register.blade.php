@extends('layouts.auth')

@section('content')

<!-- Register Form -->

<div class="register-form">
    <form method="POST" action="{{ route('register') }}">

        <div class="container">
            <label for="name"><b>First + Last Name</b></label>
            <input type="text" placeholder="Enter First + Last Name" name="name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <label for="confirm_password"><b>Confirm Password</b></label>
            <input type="password" placeholder="Re-Enter Password" name="confirm_password" required>

            <button type="submit">Register</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <hr>

        <div class="container">
            Already have an account? <a href="{{ route('login') }}">Login</a>
        </div>

    </form>
</div>

<!-- End Register Form --.

@endsection()