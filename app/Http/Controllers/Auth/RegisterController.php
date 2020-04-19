<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersFormRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    
    public function index()
    {
        return view('auth.register.index');
    }

    public function store(UsersFormRequest $usersFormRequest)
    {
        $user = User::create($usersFormRequest->all());
        Auth::login($user);
        return redirect()->route('contracts.index');
    }
}
