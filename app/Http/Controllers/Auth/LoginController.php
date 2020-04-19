<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login.index');
    }

    public function login(Request $request)
    {
        return !Auth::attempt($request->only([ 'email', 'password' ]))
            ? redirect()->back()->withErrors('E-mail e/ou senha inválidos')
            :  redirect()->route('contracts.index', ['user' => Auth::user()->id]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
