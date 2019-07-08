@extends('layouts.main')

@section('content')

<!-- ADMIN LOGIN FORM -->

<div class="register-form">
        <form method="POST" action="{{ route('register') }}">
            @csrf
    
            <div class="container">
    
                <label for="email" class="labels"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
                @if ($errors->has('email'))
                <span class="form-control-error">
                    {{ $errors->first('email') }}
                </span>
                @endif
    
                <label for="password" class="labels"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                @if ($errors->has('password'))
                <span class="form-control-error">
                    {{ $errors->first('password') }}
                </span>
                @endif
    
                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
    
            <hr>
    
        </form>
    </div>

<!--// END OF ADMIN LOGIN FORM -->

@endsection()