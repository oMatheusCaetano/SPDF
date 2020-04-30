<?php

namespace App\Http\Controllers\App;

use App\Company;
use App\Contract;
use App\Http\Controllers\Controller;
use App\Services\CreateContract;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ContractsController extends Controller
{

    private $itemsPerPage = 6;

    public function index()
    {
        $loggedUser = Auth::user();
        $contracts = Contract::paginate($this->itemsPerPage);
        return view('app.contracts.index', compact('loggedUser', 'contracts'));
    }

    public function show(Contract $contract)
    {
        $loggedUser = Auth::user();
        $filePath =  env('RENDER_PDF_FILE') . $contract->file;
        return view('app.contracts.show', compact('loggedUser', 'contract', 'filePath'));
    }
    
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
        $file = uniqid() . ".{$contract->getClientOriginalExtension()}";
        $contract->storeAs('contracts', $file);
        $createContract->create($user, $file, $request->company, $contract);
        return redirect()->back();
    }
}
