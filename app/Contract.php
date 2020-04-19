<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{

    public $timestamps = false;
    protected $fillable = [ 'name', 'file', 'size', 'user_id', 'company_id' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
