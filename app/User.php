<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function article()
    {
        return $this->hasMany('App\Article');
    }

    public function album()
    {
        return $this->hasMany('App\album');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

}
