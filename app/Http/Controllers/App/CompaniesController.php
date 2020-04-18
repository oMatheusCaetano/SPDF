<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
{
    
    public function create()
    {
        $loggedUser = Auth::user();
        return view('app.companies.create', compact('loggedUser'));
    }
}
