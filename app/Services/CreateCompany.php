<?php

namespace App\Services;

use App\Company;
use App\Involved;
use App\Responsability;
use App\User;
use Illuminate\Support\Facades\DB;

class CreateCompany
{
    
    public function create(User $user, array $companyData, array $involvedData = null): Company
    {
        DB::beginTransaction();
        $company = $user->companies()->create($companyData);
        if (!is_null($involvedData['involved_name']) && !empty($involvedData['involved_name']))
            $this->associateInvolved($company, $involvedData);
        DB::commit();
        return $company;
    }

    public function associateInvolved(Company $company, array $involvedData): void
    {
        $involvedNames = $involvedData['involved_name'];
        $involvedCpfs = $involvedData['involved_cpf'];
        $involvedResponsabilities = $involvedData['involved_responsability'];
        for ($i = 0; $i < count($involvedNames); $i++) {
            $name = $involvedNames[$i];
            $cpf = $involvedCpfs[$i];
            $company_id = $company->id;
            $responsability = $involvedResponsabilities[$i];
            $involved = $company->involved()->create(compact('name', 'cpf'));
            $involved_id = $involved->id;
            $this->setResponsability($involved, compact('involved_id', 'company_id', 'responsability'));
        }   
    }

    public function setResponsability(Involved $involved, array $responsabilityData): Responsability
    {
        return $involved->responsabilities()->create($responsabilityData);
    }
}