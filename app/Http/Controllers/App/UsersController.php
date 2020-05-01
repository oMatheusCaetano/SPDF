<?php

namespace App\Http\Controllers\App;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UsersFormRequest;

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
