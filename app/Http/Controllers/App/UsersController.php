<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    
    public function edit(User $user)
    {
        $loggedUser = Auth::user();
        return view('app.users.edit', compact('loggedUser'));
    }
}
