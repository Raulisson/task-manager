<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return view('welcome');
        }

        return back()->withErrors([
            'email' => 'O endereço  e-mail ou a senha não existem',
        ]);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|unique:users|max:50',
            'password' => 'required|confirmed|min:6|max:30',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        Auth::login($user);

        return view('welcome');
    }
    public function showLoginForm()
    {
    return view('Login');
    }
    public function showRegistrationForm()
    {
    return view('Register');
    }
    public function logout(Request $request)
    {
    $request->session()->invalidate();

    return redirect('/');
    }
}
