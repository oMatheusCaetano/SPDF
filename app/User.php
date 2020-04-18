<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;
    protected $fillable = [ 'name', 'email', 'password' ];
    protected $hidden = [ 'password', 'remember_token' ];

    public function setNameAttrinute($name)
    {
        $this->attributes['name'] = ucwords(strtolower($name));
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}
