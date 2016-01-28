<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Role extends Authenticatable
{

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}
