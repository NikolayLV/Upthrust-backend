@extends('layouts.app')

@section('content')
    <h2>Регистрация</h2>
    <form method="POST" action="/register">
        @csrf
            <p class="form-title">Sign in to your account</p>
            <div class="input-container">
                <input placeholder="Enter email" type="email" name="email" value="{{ old('email') }}">
                <span>
            <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
            </div>
            <div class="input-container">
                <input placeholder="Enter password" type="password">

                <span>
            <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
              <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span>
            </div>
            <button class="submit" type="submit">
                Sign in
            </button>

            <p class="signup-link">
                No account?
                <a href="">Sign up</a>
            </p>

    </form>
@endsection
