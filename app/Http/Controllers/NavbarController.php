<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class NavbarController extends Controller
{
    public function Login()
    {
        return view('Login');
    }
    public function Perfil()
    {
        return view('Perfil');
    }
}

