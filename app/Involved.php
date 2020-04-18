<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Involved extends Model
{

    public $timestamps = false;
    protected $table = 'involved';
    protected $fillable = [ 'name', 'cpf' ];

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = ucwords(strtolower($name));
    }

    public function responsabilities()
    {
        return $this->belongsToMany(Responsability::class, 'involved_responsability');
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_involved');
    }
}
