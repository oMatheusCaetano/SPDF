<?php

namespace App\Services;

use App\Contract;
use App\User;
use Illuminate\Support\Facades\DB;

class CreateContract
{
    
    public function create(User $user, int $companyId, $contract): Contract
    {
        DB::beginTransaction();
        $name = $contract->getClientOriginalName();
        $file = uniqid() . ".{$contract->getClientOriginalExtension()}";
        $size =  $contract->getClientSize();
        $user_id = $user->id;
        $company_id = $companyId;
        $contract->storeAs('contracts', $file);
        $contract = Contract::create(compact('name', 'file', 'size', 'user_id', 'company_id'));
        DB::commit();
        return $contract;
    }
}
