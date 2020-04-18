<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersFormRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    
    public function edit(User $user)
    {
        $loggedUser = Auth::user();
        return view('app.users.edit', compact('loggedUser'));
    }

    public function update(User $user, UsersFormRequest $usersFormRequest)
    {
        $user->update($usersFormRequest->all());
        $loggedUser = Auth::user();
        return view('app.users.edit', compact('loggedUser'));
    }
}
