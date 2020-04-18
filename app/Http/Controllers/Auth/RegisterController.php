<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersFormRequest;
use App\User;

class RegisterController extends Controller
{
    
    public function index()
    {
        return view('auth.register.index');
    }

    public function store(UsersFormRequest $usersFormRequest)
    {
        User::create($usersFormRequest->all());
        return redirect()->route('register.index');
    }
}
