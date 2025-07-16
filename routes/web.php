<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

Route::get('/register', fn() => view('auth.register'))->name('register');
Route::post('/register', function (Request $request) {
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    auth()->login($user);

    return redirect('/dashboard');
});

Route::get('/login', fn() => view('auth.login'))->name('login');
Route::post('/login', function (Request $request) {
    if (auth()->attempt($request->only('email', 'password'))) {
        return redirect('/dashboard');
    }

    return back()->withErrors(['email' => 'Неверные данные']);
});

Route::get('/dashboard', function () {
    return view('dashboard', ['user' => auth()->user()]);
})->middleware('auth');

Route::post('/logout', function () {
    auth()->logout();
    return redirect('/login');
});

Route::get('/', fn() => view('welcome'))->name('welcome');


