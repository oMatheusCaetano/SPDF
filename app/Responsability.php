<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsability extends Model
{

    public $timestamps = false;
    protected $table = 'responsabilities';
    protected $fillable = ['involved_id', 'company_id', 'responsability' ];

    public function setResponsabilityAttribute($responsability)
    {
        $this->attributes['responsability'] = ucwords(strtolower($responsability));
    }

    public function involved()
    {
        return $this->belongsToMany(Involved::class, 'involved_responsability');
    }
}