<?php

namespace App\Http\Controllers\App;

use App\User;
use Illuminate\Http\Request;
use App\Services\CreateCompany;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CompaniesFormRequest;

class CompaniesController extends Controller
{
    
    public function create(Request $request)
    {
        $loggedUser = Auth::user();
        $returnMessage = $request->session()->get('returnMessage');
        return view('app.companies.create', compact('loggedUser', 'returnMessage'));
    }

    public function store(User $user, CompaniesFormRequest $companiesFormRequest, CreateCompany $createCompany)
    {
        $involvedData = [
            'involved_name' => $companiesFormRequest['involved_name'],
            'involved_cpf' => $companiesFormRequest['involved_cpf'],
            'involved_responsability' => $companiesFormRequest['involved_responsability']
        ];
        $createCompany->create($user, $companiesFormRequest->all(), $involvedData);
        $companiesFormRequest->session()->flash('returnMessage', "Empresa Criada com Sucesso.");
        return redirect()->back();
    }
}
