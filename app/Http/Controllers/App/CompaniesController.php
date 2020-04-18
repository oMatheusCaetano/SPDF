<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompaniesFormRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
{
    
    public function create()
    {
        $loggedUser = Auth::user();
        return view('app.companies.create', compact('loggedUser'));
    }

    public function store(User $user, CompaniesFormRequest $companiesFormRequest)
    {
        var_dump($companiesFormRequest->all());
    }
}
