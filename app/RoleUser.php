<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class RoleUser extends Authenticatable
{

    public function role_user()
    {
        return $this->belongsToMany('App\RoleUser');
    }

}
