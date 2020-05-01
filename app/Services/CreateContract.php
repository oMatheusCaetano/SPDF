<?php

namespace App\Services;

use App\User;
use App\Contract;
use Illuminate\Support\Facades\DB;

class CreateContract
{
    
    public function create(User $user, string $file, int $companyId, $contract): Contract
    {
        DB::beginTransaction();
        $name = $contract->getClientOriginalName();
        $size =  $contract->getSize();
        $user_id = $user->id;
        $company_id = $companyId;
        $contract = Contract::create(compact('name', 'file', 'size', 'user_id', 'company_id'));
        DB::commit();
        return $contract;
    }
}
