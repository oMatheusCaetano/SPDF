<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    
    public function edit(User $user)
    {
        echo $user;
    }
}
