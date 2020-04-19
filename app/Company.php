<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    public $timestamps = false;
    protected $fillable = [ 'company_name', 'trading_name', 'cnpj' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function involved()
    {
        return $this->belongsToMany(Involved::class, 'company_involved');
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }
}
