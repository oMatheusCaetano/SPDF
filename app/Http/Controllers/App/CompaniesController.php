<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompaniesFormRequest;
use App\Services\CreateCompany;
use App\User;
use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
{
    
    public function create()
    {
        $loggedUser = Auth::user();
        return view('app.companies.create', compact('loggedUser'));
    }

    public function store(User $user, CompaniesFormRequest $companiesFormRequest, CreateCompany $createCompany)
    {
        $involvedData = [
            'involved_name' => $companiesFormRequest['involved_name'],
            'involved_cpf' => $companiesFormRequest['involved_cpf'],
            'involved_responsability' => $companiesFormRequest['involved_responsability']
        ];
        echo $createCompany->create($user, $companiesFormRequest->all(), $involvedData);
    }
}
