<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','alias','parent_id'];

    public function article()
    {
        return $this->hasMany('App\Article');
    }

    public function album()
    {
        return $this->hasMany('App\Album');
    }

}
