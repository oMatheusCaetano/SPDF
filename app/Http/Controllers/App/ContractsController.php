<?php

namespace App\Http\Controllers\App;

use App\Company;
use App\Http\Controllers\Controller;
use App\Services\CreateContract;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContractsController extends Controller
{
    
    public function create()
    {
        $loggedUser = Auth::user();
        $companies = Company::query()->orderBy('company_name')->get();
        return view('app.contracts.create', compact('loggedUser', 'companies'));
    }

    public function store(User $user, Request $request, CreateContract $createContract)
    {
        $validExtentions = ['pdf'];
        $contract = $request->contract;
        if (!$request->hasFile('contract') || !$contract->isValid())
            return redirect()->back()->withErrors('Falha ao fazer upload, tente novamente');
        if (!in_array($contract->getClientOriginalExtension(), $validExtentions)) 
            return redirect()->back()->withErrors('Extensão do arquivo é inválida. Favor selecionar um arquivo PDF Ex: meu-arquivo.pdf');
        $createContract->create($user, $request->company, $contract);
        echo $user->contracts; exit();
        return redirect()->back();
    }
}
